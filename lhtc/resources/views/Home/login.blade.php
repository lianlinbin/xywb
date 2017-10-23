<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>祥云微博登录</title>
		<meta charset="utf-8">  
		<link rel="stylesheet" href="{{ asset('home/css/amazeui.min.css') }}" />
     	<link rel="stylesheet" href="{{ asset('home/css/app.css') }}" />
	</head>
	<style>
		body { 
		   
	
		  margin: 0;
		  padding: 0;
		  width:100%;
		  left:100px;
		  overflow: hidden;
		  position:absolute;
		  background-image:url(/home/img/3.jpg);
		  height:100%;
		  width: 100%;
		  background-size:cover;
		  
		} 
		#canv{
			position:absolute;
			left:-340px;
		}
		
	</style>
	<body data-type="login">
		
		<canvas id='canv'></canvas>
		<div style="width: 500px;height: 300px;position:absolute;left:700px;top:200px;">
			    <form class="am-form tpl-form-line-form" method="post" action="/login">
			    	 {{ csrf_field() }}

                    <div class="am-form-group">
                        <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请输入账号">
                    </div><br>

                    <div class="am-form-group">
                        <input type="password" name="pwd" class="tpl-form-input" id="user-name" placeholder="请输入密码">
                    </div><br>
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox" style="float:left">
                       <div> <label for="remember-me">记住密码</label></div>
                    </div><br>

                    <div class="am-form-group">
                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>
                    </div>
                </form>

		</div>

	 

	
	</body>
</html>
<script>
	var c = document.getElementById('canv');
	var $ = c.getContext('2d');
	var w = c.width = window.innerWidth;
	var h = c.height = window.innerHeight;
	var w2 = w* 0.5;
	var h2 = h * 0.5;
	var ŭ = 0;
	var topiary = new branch(90, -30, 0);
	var cnt = 0;
	
	function anim(){
		cnt++;
	  ŭ-=.5;
	  	if (cnt%2) {
	      draw();
	      
	    }
	 window.requestAnimationFrame(anim);
	}
	anim();
	
	
	
	
	function draw() {
	    $.save();
	    $.clearRect(0, 0, w, h);
	    $.translate(w2, h*0.98);
	    $.rotate(Math.PI * 0.98);
	    topiary.disp($);
	    $.restore();
	}
	
	function branch(len, ang, gen){
	    this.len = len;
	    this.ang = ang;
	    this.gen = gen;
	    this.limb = [];
	    this.sway = 0;
	    this.mult = rnd(0.01, 0.1);
	    this.spawn = 0;
	    this.vel =0;
	    
	    if(gen < 10){
	    	this.limb.push(new branch(len*rnd(0.8, 0.99), 
	      rnd(0, Math.PI/6), this.gen+1));
	    	this.limb.push(new branch(len*rnd(0.8, 0.99), 
	      rnd(0, -Math.PI/6), this.gen+1));
	    }
	    
	    this.disp = function($){
	    	  this.sway++;  
	        $.save(); 
	        
	        this.vel *= 0.9;
	        var dif = 1-this.spawn;
	        this.vel += (dif*0.1);
	        this.spawn += this.vel;
	        
	        $.strokeStyle = "hsla(" + (ŭ % 360) + ",100%,50%,1)";
			$.alpha = .5;
	        $.lineWidth = 2;
	        $.beginPath();
	        $.rotate(this.ang + (Math.sin(this.sway*this.mult)*Math.PI/64));
	        $.moveTo(0, 0);
	        $.lineTo(this.len * this.spawn, 0);
	        $.stroke();
	        
	        $.translate(this.len * this.spawn, 0);
	        
	        if(this.spawn > 0.6){
	            for(var i = 0; i < this.limb.length; i++){
	            	var limb = this.limb[i];
	                limb.disp($);
	            }
	        }
	        $.restore();
	    };
	}
	
	
	
	function rnd(min, max){
		return Math.random()*(max - min) + min;
	}

</script>