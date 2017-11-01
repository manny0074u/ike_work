<?php
include('include/database.php');

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
{
	$result = mysql_query("SELECT * FROM admin WHERE email = '$email' and password='$password'")
	or die(mysql_error());
	
	$row = mysql_fetch_array($result);
	$count = mysql_num_rows($result);				
		if ($count == 0) 
			{
			echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
			} 
		else if ($count > 0)
			{
				session_start();
				$_SESSION['email'] = $row['email'];
				header("location:show.php");
			}
}				
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>discussdesk.com - Login form in PHP mysql</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

	<form  action="g.php" method="post" >
		<table class="form" border="0">

			<tr>
			<td></td>
				<td style="color:red;">
				<?php echo $msg; ?></td>
			</tr> 
			
			<tr>
				<th><label for="email"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" /></td>
			</tr>
			<tr>
				<th><label for="name"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" name="submit" value="Submit" alt="Submit" title="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
				
			</tr>
		</table>
	</form>

<div style="line-height: 30px; margin-left: 307px;"><b>Name:</b> discussdesk <br/>  <b>Password:</b> discussdesk</div>
<div style="line-height: 30px; margin-left: 207px;">For More Info: <a href="http://www.discussdesk.com">Visit our Website</a></div>

</body>
</html>
