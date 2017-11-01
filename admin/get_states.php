<?php
require_once('inc/connect.php');
$country_id = mysql_real_escape_string($_POST['country_id']);
if($country_id!='')
{
$states_result = $conn->query('select * from location where state='.$country_id.'');
$options = "<option value=''>Select State</option>";
while($row = $states_result->fetch_assoc()) {
$options .= "<option value='".$row['city']."'>".$row['city']."</option>";
}
echo $options;
}
?>