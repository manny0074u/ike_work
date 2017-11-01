<?php

 session_start();
if (isset($_POST['email']) and isset($_POST['password'])){

	$email = trim($_POST['email']);
		
		$password = trim($_POST['password']);
		
		if($email=="" && $password==""){
			echo "<script>alert('Fields are empty');  </script>";
			//$msg = "Fields are empty!";
		}
		else if($email=="" || $password==""){
			echo "<script>alert('A Field is empty!');  </script>";
			//$msg = "A Field is empty!";
		}
		else{
								
			$sql = "SELECT * FROM admin WHERE email='".$email."' and password='".$password."'";
			$query 	= mysqli_query($con, $sql);
			$rw = mysqli_fetch_array($query);

			
			//echo $rw['Email'] ." ".$rw['Password'] ." ".$rw['UniqueCode'];			
			if($rw['email']!=$email && $rw['password']!=$password){
				//echo "<script>alert('Invalid Login,  Check your email and password');  </script>";
				$msg = '<div class="alert alert-danger">
											<button data-dismiss="alert" class="close">
												&times;
											</button>
											<strong>Invalid Login,</strong> Check your email and password</a>
											
										</div>';
			}
			else{
						
				//header("Location: account.php?uc=".$rw['Usercode']);				
				//$msg = "valid Login!";
				 $_SESSION['email'] = $rw['email'];
				echo "<script language='javascript' type='text/javascript'>
						window.location.href='dashboard.php';
						</script>";
			}
		}
}




?>