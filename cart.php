<?php
include "connection.php";
$name=$_GET['name'];
$sql="INSERT INTO `cart`(`name`) VALUES ('$name')";
mysqli_query($connection,$sql);
$sql1="SELECT * FROM `product` WHERE `name` LIKE '$name'";
$result=mysqli_query($connection,$sql1);
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

        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading">My Cart</h2>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product</th>
                            <th scope="col" >Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td><?php echo $temp['pdct_id'] ?></td>
                            <td><?php echo $temp['brand'] ?> <?php echo $temp['name'] ?></td>
                            <td>       1</td>
                            <td class="text-right">Rs.<?php echo $temp['price'] ?></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>Rs.<?php echo $temp['price'] ?></strong></td>
                        </tr>
                    </tbody>
                </table>
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
