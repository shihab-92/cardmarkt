<!DOCTYPE html>
<html lang="en">
<head>
	<title>Card markt |Europe |card |Markt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="card market,card markt" />
	<meta property="og:title" content="Card markt"/>
	<meta property="og:description" content="Card Markt is one of the fastest growing Card services provider."/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="http://www.cardmarkt.com"/>
	<meta property="og:site_name" content="cardmarkt.com"/>
	<meta property="og:image" content="images/logo2.png"/>
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="314" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>

<body>
	<div class="header-top-cardlayouts">
		<div class="container">
			<div class="col-md-6 logo-card">
				<a href="{{url('/')}}"><img src="images/logo2.png" alt=" " /><h1>Card<span>markt</span></h1></a>
			</div>
			<div class="col-md-6 phone-cardl">
				<ul>
					<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span></li>
					<li><a href="{{url('/login')}}">LOGIN |</a></li>
					<li><a href="{{url('/register')}}">REGISTER</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="header-bottom-cardls">
		<div class="container">
			<div class="col-md-7 navigation-agileits">
				<nav class="navbar navbar-default">
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}" class="hyper "><span>Home</span></a></li>
							<li class="{{ Request::is('buy-gift-cards') ? 'active' : '' }}"><a href="{{url('/buy-gift-cards')}}" class="hyper"><span>Buy Gift cards</span></a></li>	
							<li class="{{ Request::is('sell-gift-cards') ? 'active' : '' }}"><a href="{{url('/sell-gift-cards')}}" class="hyper"><span>Sell Gift cards</span></a></li>
							<li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{url('/about')}}" class="hyper"><span>About</span></a></li>
							<li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{url('/contact')}}" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
						);
				});
			</script>
			<div class="col-md-4 search-agileinfo">
				<form action="#" method="post">
					<input type="search" name="Search" placeholder="Search for a Product..." required="">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
				</form>
			</div>
			<div class="col-md-1 cart-wthree">
				<div class="cart"> 
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart" />
						<input type="hidden" name="display" value="1" />
						<button class="cardview-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	@yield('content');
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 cardagile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 cardagile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grids fgd1">
				<a href="index.html"><img src="images/logo2.png" alt=" " /><h3>Card<span>Markt</span></h3></a>
				<ul>
					<li>1234k Avenue, 4th block,</li>
					<li>New York City.</li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</ul>
			</div>
			<div class="col-md-3 footer-grids fgd2">
				<h4>Information</h4> 
				<ul>
					<li><a href="{{url('/contact')}}">Contact Us</a></li>
					<li><a href="{{url('/about')}}">About Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grids fgd3">
				<h4>Shop</h4> 
				<ul>
					<li><a href="{{url('/buy-gift-cards')}}">Buy Gift cards</a></li>
					<li><a href="{{url('/sell-gift-cards')}}">Sell Gift cards</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grids fgd4">
				<h4>My Account</h4> 
				<ul>

					<li><a href="{{url('/login')}}">Login</a></li>
					<li><a href="{{url('/register')}}">Register</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">© 2016 Card Markt. All rights reserved | Developed & Designed by <a href="http://shihab-sharar.com"> Shihab Sharar.</a></p>
		</div>
	</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		// cardls1.render();

		// cardls1.cart.on('cardsb1_checkout', function (evt) {
		// 	var items, len, i;

		// 	if (this.subtotal() > 0) {
		// 		items = this.items();

		// 		for (i = 0, len = items.length; i < len; i++) {
		// 			items[i].set('shipping', 0);
		// 			items[i].set('shipping2', 0);
		// 		}
		// 	}
		// });
	</script>  
	<!-- //cart-js -->  
</body>
</html>`