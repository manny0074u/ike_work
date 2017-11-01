<?php

require_once('connect.php');

$sql ="DELETE FROM  slides WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../slides.php');


?>