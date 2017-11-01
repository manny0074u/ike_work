<?php

require_once('connect.php');

$sql ="DELETE FROM  services WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../services.php');


?>