<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>祥云微博</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheet css -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="css/templatemo-green.css"> -->

	<link rel="shortcut icon" href="{{ asset('home/list/images/favicon.ico') }}" />

	<link rel="stylesheet" href="{{ asset('home/list/assets/css/main.css') }}" />
</head>
<body data-spy="scroll" data-target=".navbar-collapse">


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
			<header id="header">
				<h1><a href="#">祥云微博</a></h1>
				<nav class="links">
					<ul>
						<li><a href="#">首页</a></li>
						<li><a href="#">发现</a></li>
						<li><a href="#">@我的</a></li>
					</ul>
					<ul style="width:100px; border 1px  solid red;float:right">
						<li><a href="#">发现</a></li>
					</ul>
				</nav>
			</header>
		<!-- Header end -->

		<!-- Main -->
			<div id="main">
				@yield('content')

				<!-- Pagination -->
					<ul class="actions pagination">
						<li><a href="" class="disabled button big previous">Previous Page</a></li>
						<li><a href="#" class="button big next">Next Page</a></li>
					</ul>

			</div>
		<!-- Main end -->

		<!-- Sidebar -->
			<section id="sidebar">

				@yield('column')

			</section>
	</div>

<!-- javascript js -->	
<script src="{{ asset('home/personal/js/jquery.js') }}"></script>
<script src="{{ asset('home/personal/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('home/personal/js/custom.js') }}"></script>

</body>
</html>