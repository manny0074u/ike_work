<?php

require_once('connect.php');

$sql ="DELETE FROM  pictures WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../pictures.php');


?>