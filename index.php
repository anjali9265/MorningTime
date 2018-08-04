<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	<title>Morning Time</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]>
		<style type="text/css" media="screen">
			.tabbed { height:420px; }
		</style>
	<![endif]-->

	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>

</head>
<body>
<!-- Top -->
<div id="top">
 <div class="shell">
		<!-- Header -->
		<div id="header">
			<h1 id="logo"><a href="#">Urgan Gear</a></h1>
			<div id="navigation">
				<ul>
				    <li><a href="#">Home</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">My Account</a></li>
					<li class="last"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- End Header -->

		<!-- Slider -->
		<div id="slider">
			<div id="slider-holder">
				<ul>
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
				</ul>
			</div>
			<div id="slider-nav">
				<a href="#" class="prev">Previous</a>
				<a href="#" class="next">Next</a>
			</div>
		</div>
		<!-- End Slider -->

	</div>
</div>
<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">

		<!-- Search, etc -->
		<div class="options">
			<div class="right">
				<span class="cart">
					<a href="#" class="cart-ico">&nbsp;</a>
					<strong>$0.00</strong>
				</span>
				<span class="left more-links">
					<a href="#">Checkout</a>
					<a href="#">Details</a>
				</span>
			</div>
		</div>
		<!-- End Search, etc -->
		<?php
		  include "connection.php";
			$sql="SELECT `img1` FROM `images`";
			$result=mysqli_query($connection,$sql);
			$temp=mysqli_fetch_array($result);
			$sql1="SELECT * FROM `product`";
			$result1=mysqli_query($connection,$sql1);
			$var=mysqli_fetch_array($result1);
		 ?>

		<!-- Content -->
		<div id="content">


			<!-- Container -->
			<div id="container">

				<div class="tabbed">

					<!-- First Tab Content -->
					<div class="tab-content" style="display:block;">
						<div class="items">
							<div class="cl">&nbsp;</div>
							<ul>
							    <li>
										<a href="product_details.php?id=<?php echo $var['pdct_id']; ?>">
							    	<div class="image">
							    		<img src="<?php echo $temp['img1']; ?>" alt="" />
							    	</div>
							    	<p>
							    		Item Number: <span><?php echo $var['pdct_id']; ?></span><br />
							    		Brand Name: <?php echo $var['brand']; ?> Shoes
							    	</p>
							    	<p class="price">Wholesale Price: <strong>Rs.<?php echo $var['price']; ?></strong></p>

									</a>
							    </li>
						    </ul>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<!-- End Third Tab Content -->

				</div>

				<!-- Brands -->
				<div class="brands">
					<h3>Brands</h3>
					<div class="logos">
						<a href="#"><img src="css/images/logo1.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo2.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo3.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo4.gif" alt="" /></a>
						<a href="#"><img src="css/images/logo5.gif" alt="" /></a>
					</div>
				</div>
				<!-- End Brands -->

				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="#">Home</a>
						<span>|</span>
						<a href="#">Support</a>
						<span>|</span>
						<a href="#">My Account</a>
						<span>|</span>
						<a href="#">The Store</a>
						<span>|</span>
						<a href="#">Contact</a>
					</div>

				</div>
				<!-- End Footer -->

			</div>
			<!-- End Container -->

		</div>
		<!-- End Content -->

	</div>
</div>
<!-- End Main -->

</body>
</html>
