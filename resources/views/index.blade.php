<!DOCTYPE html>
<html lang="en">
	@include("includes.header")
	<title>Food15 | 15 mins delivery to Lekki, VI, Ikoyi, Ajah, Surulere</title>

	<meta name="description" content="It takes us only 15 mins to deliver your food to Lekki, VI, Ikoyi, Ikate, VGC, Ajah, Surulere, Lagos Island">
	<style>
		info-div{
			height: 110px;
			display: block;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- Header of the page -->
		<header id="header" class="v1">
			<!-- Header holder of the page -->
			<!-- Header holder of the page -->
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
						<a href="{{url('/')}}"><img src="{{asset('public/images/logo.png')}}" alt="Vine Yard" class="img-responsive"></a>
					</div>
				</div>
			</div>
			<div class="bdr-bt">
			<div class="bdr-bt">
				<!-- nav holder of the page -->
				<div class="nav-holder">
					<div class="row">
						<div class="col-xs-12">
							<!-- Nav of the page -->
							<nav id="nav">
								<ul class="list-unstyled text-center">
									<li class="logo"><a style="padding-bottom: 0 !important;" href="{{url('/')}}"><img style="height: 75px;" src="{{asset('public/images/logo.png')}}" alt="Vine Yard" class="img-responsive"></a></li>
									<li class="active"><a href="{{url('/')}}">Shop</a></li>
									<!-- dropdownfull of the page -->
									<li class="l">
										<a href="{{url('about')}}">About us</a>
									</li>
									<!-- dropdown of the page -->
									<li>
										<a href="{{url('terms')}}">Terms & conditions</a>
									</li>
									
									<li><a href="{{url('contact')}}">Contact</a></li>
									<li>
										<a href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
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
		</header>
		<!-- main of the page -->
		<main id="main">
			<!-- main slider of the page -->
			<div class="main-slider">
				<!-- slide of the page -->
				<div class="slide bg-full" style="background-image:url({{asset('public/images/slider1.jpg')}});">
					<div class="holder">
						<div class="b-logo" style="width: 350px;">
							<h2 style="color: #fff;">Enjoy 15 min delivery when you order through us</h2>
						</div>
						<a href="#shop" class="btn-primary active lg-round text-uppercase">shop now</a>
					</div>
				</div>
				<!-- slide of the page -->
				<div class="slide bg-full" style="background-image:url({{asset('public/images/slider2.jpg')}});">
					<div class="holder">
						<div class="b-logo" style="width: 350px;">
								<h2 style="color: #fff;">Enjoy 15 min delivery when you order through us</h2>
						</div>
						<a href="#shop" class="btn-primary active lg-round text-uppercase">shop now</a>
					</div>
				</div>
			</div>
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
							<header class="header text-center wow fadeInUp" data-wow-delay="0.4s">
								<span class="title fontpinyon">Welcome</span>
								<h1 class="heading text-uppercase">food15</h1>
								<div class="header-img">
									<img src="{{asset('public/images/bdr-img.png')}}" alt="image description" class="img-respnsive">
								</div>
								<p>Food 15 is the most convenient online food ordering site, delivering food to people in lekki, VI, and Ikoyi within 15 minutes. We believe food is a pleasure and food ordering should be fast and definitely fun experience.</p>
							</header>
							<span class="signature-image"><img src="{{asset('public/images/sign.png')}}" class="img-responsive" alt="Signature"></span>
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
			<!-- feature sec of the page -->
			<div class="feature-sec container" id="shop">
				<div class="row">
					<!-- header of the page -->
					<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
						<span class="title fontpinyon">food15</span>
						<h1 class="heading text-uppercase">FEATURED DELICACIES</h1>
						<div class="header-img">
							<img src="{{asset('public/images/bdr-img.png')}}" alt="image description" class="img-responsive">
						</div>
					</header>
				</div>
				<div class="row">
					
				</div>
				<!--
				<div class="row">
					<div class="col-md-9">
					</div>
					<div class="form-group col-md-3" >
						<input class="form-control" placeholder="search here..." name="search" id="search" style="background: transparent;" />
					</div>
				</div>
			-->
				<div class="row">
					<!-- feature holder of the page -->
					<div id="feature-holder">
						<div class="grid-sizer"></div>
						@foreach ($products as $product)
						<div  id="contentDiv">
							<div class="col-xs-12 col-sm-6 col-md-3 item-col roes ccc">
								<!-- feature col of the page -->
								<div >
									<a href="{{url('add_to_cart/'.$product->id.'/'.str_replace(' ', '_', $product->name).'/1/'.$product->image.'/'.$product->price)}}" >
										<div class="feature-col">
											<div class="img-holder text-center">
												<img src="{{asset("public/images/".$product->image)}}" alt="image description" class="img-responsive">
											</div>
											<div class="info-div" >
												<h2 class="heading3">{{$product->name}}</h2>
												<footer class="footer">
													<ul class="list-unstyled rating-list pull-left">
														<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
														<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
														<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
														<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
														<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
													</ul>
													<strong class="price pull-right">₦{{$product->price}}</strong>
												</footer>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- tomatin sec of the page -->
			<section class="tomatin-sec bg-parallax" style="{{asset('public/images/img07.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-lg-12">
							<!-- header of the page -->
							<header class="header text-center wow fadeInUp" data-wow-delay="0.4s">
								<span class="title fontpinyon">Deal Of Week</span>
								<h2 class="heading text-uppercase">Dominos Pizza Buy 1 get 1 free</h2>
								<div class="header-img">
									<img src="{{asset('public/images/bdr-img.png')}}" class="img-responsive" class="">
								</div>
								<p>World's largest & best pizza in Nigeria! Delivering hot, fresh pizzas to your doorstep within 15mins in Lekki, VI, IKOYI, Ikate, Ajah, VGC and Surulere. You pay for one while we deliver two to you </p>
							</header>
							<div class="text-center">
								<div id="defaultCountdown" class="comming-timer"></div>
								<a href="shop.html" class="btn-primary text-uppercase lg-round">shop now</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			
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
					<a href="javascript:void(0);"><img src="{{asset('public/images/img35.png')}}" class="img-responsive" alt="Payment Card"></a>
				</div>
				<a id="back-top" class="round"><i class="fa fa-chevron-up"></i></a>
			</aside>
			<!-- footer folder of the page -->
			<div class="footer-holder">
				<div class="container">
					<div class="row mar-bt">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="logo">
								<a {{url('/')}}><img class="img-responsive" src="{{asset('public/images/logo.png')}}" alt="food15" ></a>
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
									<li><a href="javascript:void(0);">Login</a></li>
									<li><a href="javascript:void(0);">Register</a></li>
									<li><a href="javascript:void(0);">My account</a></li>
									<li><a href="javascript:void(0);">My orders</a></li>
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
							<h4 class="heading3">Tag Cloud</h4>
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
								<p>Copyright<a href="javascript:void(0);"> food15</a> © 2019. All rights reserved.</p>
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
	<script src="{{asset('public/js/jquery.js')}}"></script>
	<!-- include jQuery -->
	<script src="{{asset('public/js/plugins.js')}}"></script>
	<!-- include jQuery -->
	<script src="{{asset('public/js/jquery.main.js')}}"></script>

	<script>
		$(document).ready(function(){
		  $("#search").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#contentDiv .ccc").filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});
	</script>
</body>
</html>