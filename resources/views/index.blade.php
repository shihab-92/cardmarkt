@extends('home')

@section('content')
<div class="banner-agile">
	<div class="container" style="text-align: center;">
		<h2>WELCOME TO</h2>
		<h3>CARD <span>MARKT</span></h3>
		<p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
		<a href="{{url('/buy-gift-cards')}}" style="margin-right: 10px;">Buy card</a><a href="{{url('/sell-gift-cards')}}">Sell card</a>
	</div>
</div>
<div class="top-heading">
	<h1>Our Top Deals</h1>
</div>
<div class="banner-bootom-card-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-cardlayouts">
			<a href="women.html"><div class="bb-left-agileits-cardlayouts-inner">
				<h3>Beauty</h3>
				<h4>upto<span>75%</span></h4>
			</div></a>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-cardlayouts">
			<a href="shoes.html"><div class="bb-middle-top">
				<h3>Sports</h3>
				<h4>upto<span>55%</span></h4>
			</div></a>
			<a href="jewellery.html"><div class="bb-middle-bottom">
				<h3>Women's wear</h3>
				<h4>upto<span>65%</span></h4>
			</div></a>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-cardlayouts">
			<a href="watches.html"><div class="bb-right-top">
				<h3>Men's wear</h3>
				<h4>upto<span>50%</span></h4>
			</div></a>
			<a href="handbags.html"><div class="bb-right-bottom">
				<h3>Bags</h3>
				<h4>upto<span>60%</span></h4>
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="top-products">
	<div class="container">
		<h3>Featured Products</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Men's</span></li>
					<li class="resp-tab-item"><span>WOMEN</span></li>
					<li class="resp-tab-item"><span>CHILDREN</span></li>	
					<li class="resp-tab-item"><span>COSMETICS</span></li>						
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/tp1.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Formal shoes" /> 
										<input type="hidden" name="amount" value="220.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp2.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
										<input type="hidden" name="amount" value="190.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp3.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Blazer" /> 
										<input type="hidden" name="amount" value="160.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp4.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual shoes" /> 
										<input type="hidden" name="amount" value="250.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
							<div class="col-md-3 top-product-grids tp5">
								<a href="single.html"><div class="product-img">
									<img src="images/ip2.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Inner wear" /> 
											<input type="hidden" name="amount" value="50.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$50.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp6">
								<a href="single.html"><div class="product-img">
									<img src="images/shp8.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Shoes" /> 
											<input type="hidden" name="amount" value="150.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$150.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp7">
								<a href="single.html"><div class="product-img">
									<img src="images/cap1.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
											<input type="hidden" name="amount" value="100.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$100.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wap3.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Watch" /> 
											<input type="hidden" name="amount" value="200.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$200.00</h5>						
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/tp5.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="220.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp6.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="190.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp7.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="160.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp8.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="250.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp8.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="250.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$250.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp5.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="250.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$250.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp4.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="350.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$350.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp3.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="200.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$200.00</h5>						
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/tp1.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Formal shoes" /> 
										<input type="hidden" name="amount" value="220.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp2.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
										<input type="hidden" name="amount" value="190.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp3.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Blazer" /> 
										<input type="hidden" name="amount" value="160.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp4.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual shoes" /> 
										<input type="hidden" name="amount" value="250.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
							<div class="col-md-3 top-product-grids tp5">
								<a href="single.html"><div class="product-img">
									<img src="images/ip2.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Inner wear" /> 
											<input type="hidden" name="amount" value="50.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$50.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp6">
								<a href="single.html"><div class="product-img">
									<img src="images/shp8.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Shoes" /> 
											<input type="hidden" name="amount" value="150.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$150.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp7">
								<a href="single.html"><div class="product-img">
									<img src="images/cap1.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Formal shirt" /> 
											<input type="hidden" name="amount" value="100.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$100.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wap3.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Watch" /> 
											<input type="hidden" name="amount" value="200.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$200.00</h5>						
							</div>
							<div class="clearfix"></div>
						</div>						
					</div>		
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/tp5.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="220.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$220.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp6.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="190.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$190.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp7.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="160.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$160.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp8.jpg" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
										<input type="hidden" name="amount" value="250.00" /> 
										<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Kmart Gift Card</h4>
							<h5>$250.00</h5>						
						</div>
						<div class="clearfix"></div>
						<div class="top-products-set2">
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp8.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="250.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$250.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp5.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="250.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$250.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp4.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="350.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$350.00</h5>						
							</div>
							<div class="col-md-3 top-product-grids tp4">
								<a href="single.html"><div class="product-img">
									<img src="images/wp3.jpg" alt="" />
									<div class="p-mask">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" /> 
											<input type="hidden" name="w3ls1_item" value="Casual wear" /> 
											<input type="hidden" name="amount" value="200.00" /> 
											<button type="submit" class="cardls-cart pcardls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
										</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4>Kmart Gift Card</h4>
								<h5>$200.00</h5>						
							</div>
							<div class="clearfix"></div>
						</div>
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
	});		
</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online free support</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Free shipping</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% money back</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
<!-- 		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c1.png" alt=" " class="img-responsive" />
								<p>Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.</p>
								<h4># Andrew</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/c2.png" alt=" " class="img-responsive" />
								<p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
								<h4># Lucy</h4>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="images/c3.png" alt=" " class="img-responsive" />
								<p>Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque  eget ullamcorper vehicula. </p>
								<h4># Martina</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div> -->
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.wmuSlider.js"></script> 
	<script>
		$('.example1').wmuSlider();         
	</script> 
</div>
<!-- top-brands -->
<div class="top-brands">
	<div class="container">
		<h3>Top Brands</h3>
		<div class="sliderfig">
			<ul id="flexiselDemo1">			
				<li>
					<img src="images/4.png" alt=" " class="img-responsive" />
				</li>
				<li>
					<img src="images/5.png" alt=" " class="img-responsive" />
				</li>
				<li>
					<img src="images/6.png" alt=" " class="img-responsive" />
				</li>
				<li>
					<img src="images/7.png" alt=" " class="img-responsive" />
				</li>
				<li>
					<img src="images/46.jpg" alt=" " class="img-responsive" />
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});

			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
 @include('flash::message')
<script>
    $('#flash-overlay-modal').modal();
</script>
<!-- //top-brands -->
@stop