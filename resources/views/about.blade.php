<!DOCTYPE html>
<html lang="en">
<head>
	@include("includes.header")
	<title>Food15 | About us</title>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header" class="wh-clr">
			<div class="header-holder bg-light">
				<div class="container-fluid">
					<!-- Setting Wrap of the page -->
					<ul class="list-unstyled setting-wrap pull-left">
						<li><a href="javascript:void(0);" style="color:#a53e4c;" class="nav-opener visible-xs hidden"><i class="fa fa-bars"></i></a></li>
						<li>
							<a  style="color:#a53e4c;" href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
						</li>
					</ul>
					<div class="logo">
						<a href="{{url('/')}}"><img src="images/logo.png" alt="Vine Yard" class="img-responsive"></a>
					</div>
				</div>
			</div>
			<div class="bdr-bt">
				<!-- nav holder of the page -->
				<div class="nav-holder container">
					<div class="row">
						<div class="col-xs-12">
							<nav id="nav">
								<ul class="list-unstyled text-center">
									<li class="n-logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Vine Yard" class="img-responsive"></a></li>
									<li><a href="{{url('/')}}">Shop</a></li>
									<!-- dropdownfull of the page -->
									<li class="active">
										<a href="{{url('about')}}">About us</a>
									</li>
									<!-- dropdown of the page -->
									<li>
										<a href="{{url('terms')}}">Terms & conditions</a>
									</li>
									
									<li><a href="{{url('contact')}}">Contact</a></li>
									<li>
										<a href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
										<!-- Cart Dropdown of the page -->
										<div class="cart-dropdown right">
											<!-- Cart Menu of the page -->
											<ul class="list-unstyled cart-menu">
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li class="total-price text-uppercase">
													total:
													<em class="price clr fwBold pull-right">$168.00</em>
												</li>
												<li>
													<a href="shopping-cart.html" class="btn-primary active text-center text-uppercase lg-round">View Card</a>
													<a href="checkout.html" class="btn-primary lg-round text-center text-uppercase">Check Out</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- search holder of the page -->
		<div class="search-holder">
			<!-- select form of the page -->
			<form action="javascript:void(0);" class="select-form">
				<fieldset>
					<select>
						<option value="0">ALL CATEGORIES</option>
						<option value="1">ALL CATEGORIES</option>
						<option value="2">ALL CATEGORIES</option>
					</select>
					<input type="search" class="form-control fwNormal bdr" placeholder="Search">
					<button type="submit" class="sub-btn"><i class="fa fa-search"></i></button>
				</fieldset>
			</form>
			<a href="javascript:void(0);" class="search-opener icon"><i class="fa fa-times"></i></a></li>
		</div>
		<!-- main of the page -->
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image:url({{asset('public/images/img75.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">About us</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a {{url('/')}}>Shop</a></li>
								<li>/</li>
								<li>Pages</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- aboutus sec of the page -->
			<section class="aboutus-sec bg-light">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-lg-6">
							<div class="image-block img-col" data-tilt>
								<img src="{{asset('public/images/img02.jpg')}}" class="img-responsive" alt="img-description">
							</div>
						</div>
						<div class="col-xs-12 col-md-7 col-lg-6">
							<!-- header of the page -->
							<header class="header text-center">
								<span class="title fontpinyon">Welcome</span>
								<h1 class="heading text-uppercase">food15</h1>
								<div class="header-img">
									<img src="images/bdr-img.png" alt="image description" class="img-respnsive">
								</div>
								<p>Food 15 is the most convenient online food ordering site, delivering food to people in lekki, VI, and Ikoyi within 15 minutes.

									We believe food is a pleasure and food ordering should be fast and definitely fun experience.</p>
							</header>
							<span class="signature-image"><img src="images/sign.png" class="img-responsive" alt="Signature"></span>
						</div>
					</div>
					<div class="row contact-holder">
						<div class="col-xs-12 col-sm-4 text-center">
							<h2 class="heading2">Hotline</h2>
							<a class="sub-title" href="tell:(00)123456789">08161523473</a>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">We’re Open</h2>
							<time class="sub-title">MON-SUN: 8AM-10PM</time>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">Follow Us</h2>
							<ul class="list-unstyled social-network text-center">
								<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="bg-light">
				<!-- team sec of the page -->
			</div>
		</main>
		<!-- footer of the page -->
		<footer id="footer" class="bg-black">
			<!-- footer aside of the page -->
			<aside class="footer-aside bg-grey">
				<!-- socail network of the page -->
				<ul class="social-network list-unstyled">
					<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-twitter active"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<div class="payment-img">
					<a href="javascript:void(0);"><img src="images/img35.png" class="img-responsive" alt="Payment Card"></a>
				</div>
				<a id="back-top" class="round"><i class="fa fa-chevron-up"></i></a>
			</aside>
			<!-- footer folder of the page -->
			<div class="footer-holder">
				<div class="container">
					<div class="row mar-bt">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="logo">
								<a {{url('/')}}><img class="img-responsive" src="images/logo.png" alt="vineyard"></a>
							</div>
							<!-- contact list of the page -->
							<ul class="list-unstyled contact-list">
								<li>Address : No 40 Adeyemi Lawson st off McPherson Ikoyi,<br class="hidden-xs"> Lagos, Nigeria</li>
								<li>Email: <a href="mailto:info.food15.com">info@food15.com.ng</a></li>
								 <li>Phone: <a href="tell:08161523473">08161523473</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<h3 class="heading3">My Accounts</h3>
							<!-- f nav of the page -->
							<ul class="list-unstyled f-nav">
								<li><a href="javascript:void(0);">My account</a></li>
								<li><a href="javascript:void(0);">My orders</a></li>
								<li><a href="javascript:void(0);">Register</a></li>
								<li><a href="javascript:void(0);">Login</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<h3 class="heading3">Quick link</h3>
							<!-- f nav of the page -->
							<ul class="list-unstyled f-nav">
								<li><a href="javascript:void(0);">Blog</a></li>
								<li><a href="javascript:void(0);">Help Center</a></li>
								<li><a href="javascript:void(0);">Report Spam</a></li>
								<li><a href="javascript:void(0);">FAQs</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<h4 class="heading3">Tag Clound</h4>
							<!-- tags list of the page -->
							<ul class="list-unstyled tags-list">
								<li><a href="javascript:void(0);">Music</a></li>
								<li><a href="javascript:void(0);">Travel</a></li>
								<li><a href="javascript:void(0);">video</a></li>
								<li><a href="javascript:void(0);">Ecommerce</a></li>
								<li><a href="javascript:void(0);">feature</a></li>
								<li><a href="javascript:void(0);">text</a></li>
								<li><a href="javascript:void(0);">sports</a></li>
								<li><a href="javascript:void(0);">fashion</a></li>
								<li><a href="javascript:void(0);">store</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- footer nav of the page -->
							<ul class="list-unstyled footer-nav text-center">
								<li><a href="{{url('about')}}">About</a></li>
								<li><a href="{{url('terms')}}">Terms &amp; Conditions</a></li>
								<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
							</ul>
						</div>													
						<div class="col-xs-12">
							<div class="copyright text-center">
								<p>Copyright<a href="javascript:void(0);"> VineYard</a> © 2019. All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="{{asset('public/images/svg/hearts.svg')}}" width="100" alt="loader"></div>
		</div>
	</div>
	
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>
</html>