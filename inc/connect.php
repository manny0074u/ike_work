<?php


// Open Connection
$con = @mysqli_connect('localhost', 'root', '', 'ikedb');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}



//ini_set('display_errors', '0'); 		# don't show any errors...
//error_reporting(E_ALL | E_STRICT); 		# ...but do log them

?>



<?php
/*$conn = new mysqli('localhost', 'root', '', 'demo');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
*/
?>