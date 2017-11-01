<?php
// Include MySQL class
require_once('inc/connect.php');
// Include database connection

$sql = "DELETE FROM pro_order  WHERE id=".$_GET['id'];
$query = mysqli_query($con, $sql);
	
	header('Location: order.php');


?>  
