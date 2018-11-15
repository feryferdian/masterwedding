<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Wedding Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Cart :: w3layouts</title>
<link href="<?= BASE_ASSETS ?>/application/views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= BASE_ASSETS ?>/application/views/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?= BASE_ASSETS ?>/application/views/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="<?= BASE_ASSETS ?>/application/views/js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="<?= BASE_ASSETS ?>/application/views/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?= BASE_ASSETS ?>/application/views/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->
<?php $this->load->view('layouts/menu'); ?>
<!---->
<div class="checkout">	 
	 <div class="container">	
		 <ol class="breadcrumb">
		  <li><a href="<?= base_url("") ?>">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>
		 <div class="col-md-9 product-price1">
			 <div class="check-out">			
				 <div class=" cart-items">
					 <h3>My Shopping Bag (2)</h3>
						<script>$(document).ready(function(c) {
							$('.close1').on('click', function(c){
								$('.cart-header').fadeOut('slow', function(c){
									$('.cart-header').remove();
								});
								});	  
							});
					   </script>
					<script>$(document).ready(function(c) {
							$('.close2').on('click', function(c){
								$('.cart-header1').fadeOut('slow', function(c){
									$('.cart-header1').remove();
								});
								});	  
							});
					   </script>
						
					 <div class="in-check" >
						  <ul class="unit">
							<li><span>Item</span></li>
							<li><span>Product Name</span></li>		
							<li><span>Unit Price</span></li>
							<li><span>Stock Status</span></li>
							<li> </li>
							<div class="clearfix"> </div>
						  </ul>
						  <ul class="cart-header">
						   <div class="close1"> </div>
							<li class="ring-in"><a href="single" ><img src="<?= BASE_ASSETS ?>/application/views/images/f1.jpg" class="img-responsive" alt=""></a>
							</li>
							<li><span>Woo Dress</span></li>
							<li><span>$ 60.00</span></li>
							<li><span>In Stock</span></li>
							<li> <a href="single" class="add-cart cart-check">ADD TO CART</a></li>
							<div class="clearfix"> </div>
							</ul>
							<ul class=" cart-header1">
						   <div class="close2"> </div>
							<li class="ring-in"><a href="single" ><img src="<?= BASE_ASSETS ?>/application/views/images/f2.jpg" class="img-responsive" alt=""></a>
							</li>
							<li><span>Woo Dress</span></li>
							<li><span>$ 60.00</span></li>
							<li><span>In Stock</span></li>
							<li> <a href="single" class="add-cart cart-check">ADD TO CART</a></li>
							<div class="clearfix"> </div>
							</ul>
					 </div>
				  </div>					  
			 </div>
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total">350.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">100.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final">450.00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
<!---->
<div class="shoping">
	 <div class="container">
		 <div class="shpng-grids">
			 <div class="col-md-4 shpng-grid">
				 <h3>Free Shipping</h3>
				 <p>On Order Over Rs999</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>Order Return</h3>
				 <p>Return Within 14days</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>COD</h3>
				 <p>Cash On Delivery</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Careers</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Wedding</a></li>
					 <li><a href="#">> Jewellerys</a></li>
					 <li><a href="#">> Shoes</a></li>
					 <li><a href="#">> Flowers</a></li>
					 <li><a href="#">> Cakes</a></li>
					 <li><a href="#">...More</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2015 Wedding Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>
</div>		 
</body>
</html>