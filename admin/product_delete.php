<?php
// Include MySQL class
require_once('inc/connect.php');
// Include database connection

$sql = "DELETE FROM product  WHERE id=".$_GET['id'];
$query = mysqli_query($con, $sql);
	
	header('Location: products.php');


?>  
