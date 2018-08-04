<?php
  include "connection.php";
  $id=$_GET['id'];
  $sql="SELECT * FROM `images`,`product`,`size`";
	$result=mysqli_query($connection,$sql);
  $temp=mysqli_fetch_array($result);
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Morning Time</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>

</head>
<body>
<!-- Top -->
		<!-- Header -->

		<nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <h1 id="logo"><a href="#">Urgan Gear</a></h1>
     </div>
     <ul class="nav navbar-nav">
       <li class="active"><a href="index.php">Home</a></li>
       <li><a href="#">Support</a></li>
       <li><a href="#">My Account</a></li>
     </ul>
  </div>
 </nav>

		<!-- End Header -->

<!-- Top -->

<!-- Main -->
<div id="main">
	<div class="shell">

		<!-- Search, etc -->
		<div class="options">

			<div class="right">

				<span class="left more-links">
					<a href="#">Checkout</a>
					<a href="#">Details</a>
				</span>
			</div>
		</div>
		<!-- End Search, etc -->

		<!-- Content -->
		<div id="content">


      <!-- Container -->
			<div id="container">
        <div class="card">
    			<div class="container-fliud">
    				<div class="wrapper row">
    					<div class="preview col-md-6">
                <form method="GET" action="cart.php">
    						<div class="preview-pic tab-content">
    						   <img src="<?php echo $temp['img1']; ?>" alt="" style="width:250px;height:250px;"/>
    						</div>
              </div>
              <div class="details col-md-6">
                <h3 class="product-title"><?php echo $temp['brand'];?> <?php echo $temp['name']; ?></h3>
                <span class="review-no">41 reviews</span>
                <p class="product-description"><?php echo $temp['description']; ?></p>
    						<h4 class="price"><span>Rs.<?php echo $temp['price']; ?> now <?php echo $temp['discount']; ?>% off</span></h4>
    						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                <h5 class="sizes">sizes:
    							<span class="size" data-toggle="tooltip" title="small">s</span>
    							<span class="size" data-toggle="tooltip" title="medium">m</span>
    							<span class="size" data-toggle="tooltip" title="large">l</span>
    							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
    						</h5>
    						<div class="action">
    							<input type="submit" class="add-to-cart btn btn-default" value="Add to cart">
                   <input type="hidden" name="name" value="<?php echo $temp['name']; ?>"/>
                  <button class="add-to-cart btn btn-default" type="button">Buy Now</button>
    						</div>
              </form>
                <br>
                <div class="preview-thumbnail nav nav-tabs">
    						  <img src="<?php echo $temp['img1']; ?>" alt="" />
    						  <img src="<?php echo $temp['img2']; ?>" alt="" />
                  <img src="<?php echo $temp['img3']; ?>" alt="" />
                  <img src="<?php echo $temp['img4']; ?>" alt="" />
    						</div>

    					</div>
    				</div>
    			</div>
    		</div>
</div>



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
