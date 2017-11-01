<?php

require_once('connect.php');

$sql ="DELETE FROM  pro WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../products.php');


?>