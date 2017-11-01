<?php
// Include MySQL class
require_once('inc/connect.php');
// Include database connection

$sql = "SELECT status FROM product WHERE id=".$_GET['id'];
	$query 	= mysqli_query($con, $sql);
	$rw = mysqli_fetch_array($query);


if($rw['status'] == 0){
	$sql1 = "UPDATE product SET status = 1 WHERE id=".$_GET['id'];
	$query1 = mysqli_query($con, $sql1);

	header('Location: products.php');
}
else{
	$sql2 = "UPDATE product SET status = 0 WHERE id=".$_GET['id'];
	$query2 	= mysqli_query($con, $sql2);

	header('Location: products.php');
}

?> 