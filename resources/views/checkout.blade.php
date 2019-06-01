<!DOCTYPE html>
<html lang="en">
<head>
	@include("includes.header")
	<title>Food15 | Checkout</title>
	<style>
		.checkout-form .form-control {
    		margin-top: 12px;
		}
		#visa{
			height: 60px;
		}
	</style>
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
									<li class="active">
										<a href="{{url('terms')}}">Cart</a>
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
							<h2 class="heading text-uppercase fwLight">Checkout</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a {{url('/')}}>Shop</a></li>
								<li>/</li>
								<li>Checkout</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="checout-sec left-sidebar container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-8 form-holder">
						<h2 class="heading3 text-center">BILLING ADDRESS</h2>
						<!-- Checkout Form of the page -->
						<form class="checkout-form" id="card-form" action="{{url('order')}}" method="post">
							<fieldset>
								<div class="form-group">
									<label class="text-uppercase">PROVINCE</label>
									<select name="province" class="form-control" required>
										<option>Ikate - Ajah</option>
										<option>Ikoyi</option>
										<option>Lekki Phase 1</option>
										<option>Surulere</option>
										<option>VI</option>
									</select>
								</div>
								<div class="form-group">
									<label class="text-uppercase">DELIVERY ADDRESS *</label>
									<input class="form-control" name="address" type="text" required>
								</div>
								<div class="form-group">
									<label class="text-uppercase">FULL NAME *</label>
									<input class="form-control" name="name" type="text" required>
								</div>
								
								<div class="form-group">
									<label class="text-uppercase">EMAIL *</label>
									<input class="form-control" name="email" type="text">
								</div>
								<div class="form-group">
									<label class="text-uppercase">PHONE *</label>
									<input class="form-control" type="text" >
								</div>

								<h2 class="heading3 text-center">CARD DETAILS</h2>
								<div class="row">
									<div class="col-md-12">
										<img src="{{asset('public/images/visa.jpg')}}" class="pull-right" id="visa" />
									</div>
								</div>
								<div class="form-group">
									<label class="text-uppercase">CARD NUMBER</label>
									<input class="form-control cc-number amex" name="card" required type="text" x-autocompletetype="cc-number" placeholder="Card number">
								</div>
								<div class="form-group">
									<label class="text-uppercase">NAME ON CARD</label>
									<input class="form-control" placeholder="As written on card" required type="text" name="name">
								</div>
								<div class="form-group">
									<label class="text-uppercase">CARD EXPIRY DATE</label>
									<input class="form-control cc-exp"  required  placeholder="MM/YYYY" required="" maxlength="9" name="expiry">
								</div>
								<div class="form-group">
									<label class="text-uppercase">CVV</label>
									<input class="form-control" placeholder="CVC" required type="number" name="cvv" maxlength="3">
								</div>
								{{--
								<div class="form-group">
									<label class="text-uppercase">PIN</label>
									<input class="form-control" type="tel" required name="pin" maxlength="4" >
								</div>
								--}}
								<div class="form-group wrap2">
									<label class="text-uppercase">ORDER NOTES</label>
									<textarea class="form-control" name="note"></textarea>
								</div>
								<!--
								<div class="form-group wrap">
									<input type="checkbox"><span>Create an account?</span>
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page</p>
								</div>
								<div class="form-group">
									<label class="text-uppercase">ACCOUNT PASSWORD *</label>
									<input class="form-control" type="password">
								</div>
								<div class="form-group mar wrap">
									<input type="checkbox"><span>Create an account?</span>
								</div>
								-->
								<button class="btn-primary active text-center text-uppercase lg-round" style="margin-bottom: 25px;" type="submit">Place Order</button>
								
							</fieldset>
						</form>
					</div>
					<aside class="col-xs-12 col-md-4">
						<!-- Cart Widget of the page -->
						
						<!-- Cart Widget of the page -->
						<div class="cart-widget text-center">
							<h3 class="heading3 text-uppercase">your order</h3>
							<ul class="list-unstyled cart-totel">
								<li class="text-uppercase">product<span class="titles pull-right">total</strong></li>
								@foreach(Cart::content() as $cart) 
								<li>{{$cart->name}} X <strong>{{$cart->qty}}</strong><strong class="heading2 pull-right">₦{{$cart->price}}</strong></li>
								@endforeach
								<li>Delivery<strong class="heading2 pull-right">₦300.00</strong></li>
								<li>Grand total<strong class="heading2 pull-right">₦{{number_format(str_replace(',', '', Cart::subtotal()) + 300)}}.00</strong></li>
							</ul>
						</div>
						
					</aside>
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
		<!-- loader of the page 
		<div id="loader" class="loader-holder">
			<div class="block"><img src="{{asset('public/images/svg/hearts.svg')}}" width="100" alt="loader"></div>
		</div>
		-->
		<form id="updateForm" action="{{url('update_cart')}}" method="post">
			<input name="quantity" id="quantityInput" type="hidden" />
			<input name="row_id" id="rowInput" type="hidden" />
		</form>
	</div>
	
	<!-- include jQuery -->
	<script src="{{asset('public/js/jquery.js')}}"></script>
	<!-- include jQuery -->

	{{--<script src="{{asset('public/card-master/dist/jquery.card.js')}}"></script>--}}
	<script src="{{asset('public/card/lib/jquery.payment.js')}}"></script>

	<script>
		function updateCart(quantity, rowId){
			if(quantity>0){
				$("#quantityInput").val(quantity);
				$("#rowInput").val(rowId);
				$("#updateForm").submit();
			}
		}
		jQuery(function($){
			$('.cc-number').payment('formatCardNumber');
			$('.cc-exp').payment('formatCardExpiry');
		});
	</script>
</body>
</html>