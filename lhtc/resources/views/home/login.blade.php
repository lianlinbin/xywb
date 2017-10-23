@extends('home.public.parent')

@section('content')
			<!-- Post -->
				<article class="post">
					<header>
						<div class="title">
							<h1><a href="#">今天我就要发个微博</a></h1>
							<p>低调都</p>
						</div>
						<div class="meta">
							<time class="published" datetime="2015-11-01">November 1, 2015</time>
							<a href="#" class="author"><span class="name">Jane Doe</span><img src="{{ asset('home/list/images/avatar.jpg') }}" alt="" /></a>
						</div>
					</header>
					<a href="#" class="image featured"><img src="{{ asset('home/list/images/pic01.jpg') }}" alt="" /></a>
					<p>划重点！十九大新闻发布会干货】#十九大#明天开幕。大会主要议程有：①听取和审查十八届中央委员会的报告；②审查十八届中央纪律检查委员会的工作报告；③审议通过《中国共产党章程（修正案）》；④选举十九届中央委员会；⑤选举十九届中央纪律检查委员会。 °7天5大议程！关于十九大，你关心的信息都在这... ​​​​</p>
					<footer>
						<ul class="actions">
							<li><a href="#" class="button big">Continue Reading</a></li>
						</ul>
						<ul class="stats">
							<li><a href="#">General</a></li>
							<li><a href="#" class="icon fa-heart">28</a></li>
							<li><a href="#" class="icon fa-comment">128</a></li>
						</ul>
					</footer>
				</article>
@endsection
@section('column')

			<!-- Intro -->
				<section id="intro">
					<a href="#" class="logo"><img src="{{ asset('home/list/images/logo.jpg') }}" alt="" /></a>
					<header>
						<h2>登录名</h2>
						<ul class="user_atten">
							<li><a href="#" class=""><span class="label">关注</span></a></li>
							<li><a href="#" class=""><span class="label">粉丝</span></a></li>
							<li><a href="#" class=""><span class="label">微博</span></a></li>
						</ul>
					</header>
				</section>

			<!-- Posts List -->
				<section>
					<ul class="posts">
						<li>
							<article>
								<header>
									<h3><a href="#">首页</a></h3>
								</header>
								<a href="#" class="image"><img src="{{ asset('home/list/images/logo.jpg') }}" alt="" /></a>
							</article>
						</li>
					</ul>
				</section>
				<section>
					<ul class="posts">
						<li>
							<article>
								<header>
									<h3><a href="#">好友圈</a></h3>
								</header>
								<a href="#" class="image"><img src="{{ asset('home/list/images/pic08.jpg') }}" alt="" /></a>
							</article>
						</li>
					</ul>
				</section>
@endsection
	