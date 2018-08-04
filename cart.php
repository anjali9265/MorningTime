<?php
$id=$_GET['id'];
$sql="INSERT INTO `cart`(`pdct_id`) VALUES ('$id')";
mysqli_query($connection,$sql);
?>
