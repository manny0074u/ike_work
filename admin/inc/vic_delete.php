<?php

require_once('connect.php');

$sql ="DELETE FROM  videos WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: ../videos.php');


?>