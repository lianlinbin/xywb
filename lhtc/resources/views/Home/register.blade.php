<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	 
<!--     <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('home/css/register.css') }}" >

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

</head>
<body class="login_bj" >

<div class="zhuce_body">
	 
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai" style="margin:120px">
            <h3>欢迎注册</h3>
       	  	  
              <form action="/register" method="post">
               {{ csrf_field() }}
                <input name="telphone" type="text" class="kuang_txt phone" placeholder="手机号">
                 
                <input name="pwd" type="password" class="kuang_txt possword" placeholder="密码">
                <input name="code" type="text" class="kuang_txt possword" placeholder="手机验证码">
                

                 
                <div>
               		<input name="read_idea" type="checkbox" value=""><span>已阅读并同意<a href="#" target="_blank"><span class="lan">《祥云微博使用协议》</span></a></span>
                </div>
               
                <button type="submit" class="btn_zhuce">注册</button>  
                </form>
            </div>
        	 
        </div>
         
    </div>

</div>
    

</body>
</html>