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
	<script src="js/validation.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>

				<a class="navbar-brand" href="/">CardMarkt</a>
				<div class="col-md-2 cart-wthree visible-xs">
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="cardview-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="{{ Request::is('/') ? 'active' : '' }}">
						<a href="{{url('/')}}" class="hyper "><span>Home</span></a>
					</li>
					<li class="{{ Request::is('buy-gift-cards') ? 'active' : '' }}">
						<a href="{{url('/buy-gift-cards')}}" class="hyper"><span>Buy Gift cards</span></a>
					</li>	
					<li class="{{ Request::is('sell-gift-cards') ? 'active' : '' }}">
						<a href="{{url('/sell-gift-cards')}}" class="hyper"><span>Sell Gift cards</span></a>
					</li>
					<li class="hidden-md hidden-sm">
						<form class="navbar-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-success">Submit</button>
						</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
					<li><a href="{{url('/admin')}}"><span class="glyphicon glyphicon-user"></span> Dashboard |</a></li>
					<li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
					@else
					<li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> LOGIN |</a></li>
					<li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> REGISTER</a></li>
					@endif
					<li class="hidden-xs">
						<div class="col-md-1 cart-wthree">
							<div class="cart"> 
								<form action="#" method="post" class="last"> 
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="display" value="1" />
									<button class="cardview-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
								</form>  
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content');
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 cardagile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 cardagile_newsletter_right">
				<form action="newsletter" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
	<script src="js/custom.js"></script>
<!-- 	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
	</script> -->
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