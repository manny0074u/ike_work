        
	
<?php
$menu="contact";
include('inc/header.php');

if(isset($_POST["submit"]))
	{

    $recipient="info@sigprodigy.com";
    $subject="CONTACT MESSAGE";
   
     $name=$_POST["name"];
    $email=$_POST["email"];
     $phone=$_POST["phone"];
    $message=$_POST["message"];
    
    $mailBody="Name: $name\n  Email: $email\n   Phone: $phone\n        Message: $message\n  ";


    mail($recipient, $subject, $mailBody, "From: $name <$email>");



 echo "<script>alert('Thank you , your message is sent.');window.location='contact.php' </script>";

     }
     

    


?>

		
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area black-opacity mt-84 bg-img-6">
        	<div class="table">
        		<div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="breadcumb-wrap text-center">
                                    <h1>Contact Us</h1>
                                    <h2>Contact</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
            <div class="breadcumb-menu">
                <div class="container">
                	<div class="row">
                		<div class="col-xs-12">
                			<ul>
                				<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                				<li>-/-</li>
                				<li>Contact</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
		
		<!--contact area start-->
		<div class="contact-area">
			<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0366951836168!2d3.3607096136566263!3d6.517039525049146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c49228d3e4b%3A0xca4adecb4fa8f0fa!2sIkwise+Head+Office!5e0!3m2!1sen!2sng!4v1506160240153" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			<div class="contact-wrapper bg-img-6 black-opacity ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-xs-12  clear">
							<div class="contact-item text-center">
								<i class="fa fa-map-marker"></i>
								<p>45, Odejayi Street </p>
								<p>Surulere Lagos</p>
							</div>
							<div class="contact-item text-center">
								<i class="fa fa-phone"></i>
								<p>08184488404</p>
								<p>08180852283</p>
							</div>
							<div class="contact-item text-center">
								<i class="fa fa-envelope"></i>
								
								<p>info@sigprodigy.com</p>
								<p>ike@sigprodigy.com</p>
							</div>
							<div class="contact-item text-center">
								<i class="fa fa-clock-o"></i>
								<p>Mon - Fri :9Am to 9Pm</p>
								<p>Sat - Sun : 10Am to 9Pm</p>
							</div>
						</div>
					</div>
					<div class="form-style">
						<div class="cf-msg"></div>
						<form action="contact.php" method="post" >
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input type="text" required placeholder="Full Name" id="fname" name="name">
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input type="text" required placeholder="Email" id="email" name="email">
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<input type="text" required placeholder="Phone" id="subject" name="phone">
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea class="contact-textarea"  required placeholder="Message" id="msg" name="message"></textarea>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">

									<button  type="submit" class="cont-submit btn-contact" name="submit">SEND MESSAGE</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <!--contact area start-->
		
		
        <br>
          <br>
            <br>
              <br>
                <br>
                  <br>
                    <br>
                      <br>  <br>
                        <br>

                          <br>
                            <br>
	
<?php
include('inc/footer.php');


?>