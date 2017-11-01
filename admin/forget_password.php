<?php

// Include MySQL class
require_once('inc/connect.php');
// Include database connection



$action = $_GET['action'];
switch ($action) {
	case 'add':
		
		break;
	case 'select':
		
		$email = trim($_POST['email']);
	
		
		if($email==""){
			$msg = "Field is empty!";
		}
		else if($email==""){
			$msg = "A Field is empty!";
		}
		else{
								
			$sql = "SELECT * FROM admin WHERE email='".$email."'";
				$query 	= mysqli_query($con, $sql);
			    $rw = mysqli_fetch_array($query);

			
						
			if($rw['email']!=$email ){
				$msg = "No account attached to this email, Contact the site developer for more info";
			}
			else{
				SendEmail($rw['email'], $rw['password']);

				

				 echo "<script>alert('An email has been sent with your login details !');  window.location='index.php'</script>";
			}

		
			
			
		}
	break;
}

function SendEmail($email, $pass){
	// to
	$to  = $email;
							
	// subject
	$subject = 'Password Retrieval';

	// message
	$message = '
	<html>
	<head>
	  <title></title>
	</head>
	<body>
	  <p>Email : '.$email.'.</p>
	  <p>Password : '.$pass.'.</p>
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: '.strtolower(trim($to)). "\r\n";
	$headers .= 'From: '.strtolower(trim("info@4tensolutions.com"))."\r\n";
	//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);
}


?>





<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/demo/rapido/login_login.html?box=forgot by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 13:55:41 GMT -->
<head>
		<title>Admin Portal</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo">
				</div>
				


				<!-- start: FORGOT BOX -->
				<div class="">
					<h3>Forget Password?</h3>
					<p>
						Enter your e-mail address below to reset your password.
					</p>
					<?php

					$output1[]='<form class="form-forgot"  method="post" action="forget_password.php?action=select">';
					 $output1[] ='<center><div style="font-size:14px;"> <span style="color:red" >' . $msg.' </span></div></center>';
						
						$output1[]='</div>';


						$output1[]='<fieldset>';
							$output1[]='<div class="form-group">';
								$output1[]='<span class="input-icon">';
									$output1[]='<input type="email" class="form-control" name="email" placeholder="Email">';
									$output1[]='<i class="fa fa-envelope"></i> </span>';
							$output1[]='</div>';
							$output1[]='<div class="form-actions">';
								$output1[]='<a class="btn btn-light-grey go-back"  href="index.php">';
								$output1[]='	<i class=""></i> Log-In';
								$output1[]='</a>';
								$output1[]='<button type="submit" class="btn btn-green pull-right">';
									$output1[]='Submit <i class="fa fa-arrow-circle-right"></i>';
								$output1[]='</button>';
							$output1[]='</div>';
						$output1[]='</fieldset>';
					$output1[]='</form>';

					echo join('',$output1);
					?>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						2017 &copy; Admin portal  by <a href="http://e3tech.com.ng/" target="blank_" > E3 Technologies.
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: FORGOT BOX -->
				
			</div>
		</div>




		
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	
</html>