<?php

require_once('inc/connect.php');

$sql ="DELETE FROM  bus WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: buses.php');


?>