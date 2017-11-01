<?php

require_once('inc/connect.php');

$sql ="DELETE FROM  agent WHERE id=".$_GET['id'];
$query =mysqli_query($con, $sql);

header('Location: agents.php');


?>