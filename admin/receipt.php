<?php
// Include MySQL class

// Include database connection
include('inc/connect.php');




$sql = "SELECT * FROM pro_order WHERE id='".$_GET['id']."'";
$query = mysqli_query($con , $sql);
$rw = mysqli_fetch_array($query);




$amount =$rw['Amount'];
$vat_amount = 0.05 * $amount;
$dis_amount = 0.03 * $amount;

$grossb4vat = $amount - $dis_amount;
$net_amount = $grossb4vat + $vat_amount;









 







?> 





<!DOCTYPE html>

<html lang="en">

<head>
		<title>Rapido - Responsive Admin Template</title>
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
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
		<div id="slidingbar-area">
			<div id="slidingbar">
				<div class="row">
					
					
					
				</div>
				<div class="row">
					
				</div>
			</div>
		</div>
		<!-- end: SLIDING BAR -->
		<div class="main-wrapper">
			<!-- start: TOPBAR -->
			
			<!-- end: TOPBAR -->
			
			<!-- start: MAIN CONTAINER -->
			
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
							
									<div class="panel-body">
										<div class="invoice">
											<div class="row invoice-logo">
												<div class="col-sm-6">
													<img alt="" src="images/logo2.png" width="100" height="100">
												</div>
												<div class="col-sm-6">
													<p>
													<?php echo $rw['date'] ?>, <?php echo $rw['date'] ?> <span> Order Date And Time </span>
													</p>
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-4">
													<h4>Client:</h4>
													<div class="well">
														<address>
															<strong>Name : <?php echo $rw['fname'] ?>  </strong>
															<br>
															<strong>Name : <?php echo $rw['state'] ?>  </strong>
															<br>
															<strong>Name : <?php echo $rw['city'] ?>  </strong>
															<br>
															<abbr title="Phone">Phone:</abbr> <?php echo $rw['phone'] ?>
														</address>
														<address>
															<strong>E-mail</strong>
															<br>
															<a href="mailto:#">
																<?php echo $rw['email'] ?>
															</a>
														</address>
													</div>
												</div>



 


												
											<div class="row">
												<div class="col-sm-12 table-responsive">
													<table class="table table-striped table-hover">
														<thead>
															<tr>
																<th> </th>
																<th> Product Name </th>
																<th > Price </th>
																<th > Quantity </th>
																
																<th > Time Of Order </th>
																<th > Date of Order </th>
																

															</tr>
														</thead>
														<tbody>
															<tr>
																<td>  <?php 
                                                                    
                                    echo '<img src="images/'.$rw['picture'].'" width="100" height="100">';
                                    ?></td>
																<td> <?php echo $rw['name'] ?> </td>
																<td> <?php echo $rw['price'] ?> </td>
																<td > <?php echo $rw['quantity'] ?> </td>
																
																<td> <?php echo $rw['time'] ?> </td>
																<td > <?php echo $rw['date'] ?> </td>
																
															</tr>
															
															
															
														</tbody>
													</table>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 invoice-block">
													<ul class="list-unstyled amounts">
														<li>
															<strong>Total :</strong> ₦<?php echo $rw['Amount'] ?>
														</li>
														<!--<li>
															<strong>Discount:</strong> 3%
														</li>
														<li>
															<strong>VAT:</strong> 5%
														</li>
														<li>
															<strong>Grand Total:</strong> ₦<?php echo $net_amount;
 ?>
														</li>-->
													</ul>
													<br>
													<!--<a onclick="javascript:window.print();" class="btn btn-lg btn-light-blue hidden-print">
														Print <i class="fa fa-print"></i>
													</a>-->
													<a onclick="javascript:window.print();" class="btn btn-lg btn-light-blue hidden-print">
														Print Reciept <i class="fa fa-print"></i>
													</a>
												</div>

											</div>
											<!--<center><h3>Print and present this details upon boarding the bus</h3></center>
											<center>2017 &copy;  by  <a href="http://e3tech.com.ng/" target="blank_">E3 Technologies.</a></center>-->
										</div>
									</div>
								</div>         
							</div>
						</div>

						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<!-- start: FOOTER -->
			<footer class="inner">
				<div class="footer-inner">
					<div class="pull-left">
						
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="fa fa-chevron-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			
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
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/moment/min/moment.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		
		<script src="assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/js/subview.js"></script>
		<script src="assets/js/subview-examples.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/pages_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 13:55:42 GMT -->
</html>