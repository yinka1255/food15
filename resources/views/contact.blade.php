<!DOCTYPE html>
<html lang="en">
<head>
	@include("includes.header")
	<title>Food15 | Contact us</title>
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
						<li><a href="javascript:void(0);" style="color:#a53e4c" class="nav-opener visible-xs hidden"><i class="fa fa-bars"></i></a></li>
						<li>
							<a style="color:#a53e4c" href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
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
									<li>
										<a href="{{url('about')}}">About us</a>
									</li>
									<!-- dropdown of the page -->
									<li>
										<a href="{{url('terms')}}">Terms & conditions</a>
									</li>
									
									<li class="active"><a href="{{url('contact')}}">Contact</a></li>
									<li>
										<a href="javascript:void(0);" class="cart-drop-opener"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
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
							<h2 class="heading text-uppercase fwLight">Contact us</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a {{url('/')}}>Shop</a></li>
								<li>/</li>
								<li>Contact us</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- contact sec of the page -->
			<div class="contact-sec container">
				<div class="row">
					<div class="col-xs-12">
						<!-- contact list of the page -->
						<ul class="list-unstyled contact-list text-center">
							<li>
								<span class="fa fa-phone"></span>
								<a href="javascript:void(0);" tel="08161523473">08161523473</a>
							</li>
							<li>
								<span class="fa fa-map-marker"></span>
								<address>No 40 Adeyemi Lawson st off McPherson Ikoyi,<br class="hidden-xs"> Lagos, Nigeria</address>
							</li>
							<li>
								<span class="fa fa-envelope"></span>
								<a href="mailto:info@food15.com">info@food15.com</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<!-- header of the page -->
					<header class="col-xs-12 text-center header">
						<span class="title fontpinyon">Vineyard</span>
						<h1 class="heading text-uppercase">Contact us</h1>
						<div class="header-img">
							<img src="images/bdr-img.png" alt="image description" class="img-responsive">
						</div>
						<p>Food 15 is the most convenient online food ordering site, delivering food to people in lekki, VI, and Ikoyi within 15 minutes.</p>
						<!-- socail network of the page -->
						<ul class="social-network list-unstyled">
						 	<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-twitter active"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</header>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h2 class="heading2 text-uppercase">We will love to hear from you</h2>
						<!-- contact form of the page -->
						<form class="contact-form">
							<fieldset>
								<input class="form-control" type="text" placeholder="Name">
								<input class="form-control" type="email" placeholder="Email">
								<input class="form-control" type="text" placeholder="Subject">
								<textarea class="form-control" placeholder="Your Comment"></textarea>
								<button type="submit" class="btn-primary active lg-round text-uppercase">send messages</button>
							</fieldset>
						</form>
					</div>
					<div class="col-sm-6">
						<div id="map-canvas" style="width: 100%; height: 400px;">
						</div>
					</div>
				</div>
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
								<a {{url('/')}}><img class="img-responsive" src="images/logo.png" alt="vineyard" ></a>
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

	<script src="https://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyC8QxwIfsIOtdjP2KfUaAoBBZkLfu37deQ&amp;&scale=2" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
							var myLatLng = {lat: 6.443455, lng: 3.446753};
			
				var map = new google.maps.Map(document.getElementById('map-canvas'), {
				zoom: 17,
				center: myLatLng
				});
			
				var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'FOOD15'
				});
			});
		</script>
</body>
</html>