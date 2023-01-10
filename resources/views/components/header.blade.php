<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
<!-- header -->
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="{{url('/')}}">Static Home</a></li>
										<li><a href="{{url('index_2')}}">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="{{url('about')}}">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{url('404')}}">404 page</a></li>
										<li><a href="{{url('about')}}">About</a></li>
										<li><a href="{{url('cart')}}">Cart</a></li>
										<li><a href="{{url('checkout')}}">Check Out</a></li>
										<li><a href="{{url('contact')}}">Contact</a></li>
										<li><a href="{{url('news')}}">News</a></li>
										<li><a href="{{url('shop')}}">Shop</a></li>
									</ul>
								</li>
								<li><a href="#">News</a>
									<ul class="sub-menu">
										<li><a href="{{url('news')}}">News</a></li>
										<li><a href="{{url('single-news')}}">Single News</a></li>
									</ul>
								</li>
								<li><a href="{{url('contact')}}">Contact</a></li>
								<li><a href="#">Shop</a>
									<ul class="sub-menu">
										<li><a href="{{url('shop')}}">Shop</a></li>
										<li><a href="{{url('checkout')}}">Check Out</a></li>
										<li><a href="{{url('single_product')}}">Single Product</a></li>
										<li><a href="{{url('cart')}}">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{url('cart')}}"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->