 <?php

include('inc/header2.php');
// Include MySQL class
require_once('inc/connect.php');



?>















			<!-- end: PAGESLIDE LEFT -->
			
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1>Dashboard <small>overview &amp; stats </small></h1>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									<!-- start: TOP NAVIGATION MENU -->
									<ul class="nav navbar-right">
										<!-- start: TO-DO DROPDOWN -->
										<!--<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<i class="fa fa-plus"></i> SUBVIEW
												<div class="tooltip-notification hide">
													<div class="tooltip-notification-arrow"></div>
													<div class="tooltip-notification-inner">
														<div>
															<div class="semi-bold">
																HI THERE!
															</div>
															<div class="message">
																Try the Subview Live Experience
															</div>
														</div>
													</div>
												</div>
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-subview">
												<li class="dropdown-header">
													Notes
												</li>
												<li>
													<a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
												</li>
												<li>
													<a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
												</li>
												<li class="dropdown-header">
													Calendar
												</li>
												<li>
													<a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
												</li>
												<li>
													<a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
												</li>
												<li class="dropdown-header">
													Contributors
												</li>
												<li>
													<a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
												</li>
												<li>
													<a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-messages">
												<li>
													<span class="dropdown-header"> You have 9 messages</span>
												</li>
												<li>
													<div class="drop-down-wrapper ps-container">
														<ul>
															<li class="unread">
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-2.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Nicole Bell</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time"> Just Now</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-3.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Steven Thompson</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">8 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="assets/images/avatar-5.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Kenneth Ross</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">14 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="view-all">
													<a href="pages_messages.html">
														See All
													</a>
												</li>
											</ul>
										</li>-->
										<li class="menu-search">
											<a href="#">
												
											</a>
											<!-- start: SEARCH POPOVER -->
											<div class="popover bottom search-box transition-all">
												<div class="arrow"></div>
												<div class="popover-content">
													<!-- start: SEARCH FORM -->
													
													<!-- end: SEARCH FORM -->
												</div>
											</div>
											<!-- end: SEARCH POPOVER -->
										</li>
									</ul>
									<!-- end: TOP NAVIGATION MENU -->
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="#">
											Dashboard
										</a>
									</li>
									<li class="active">
										Dashboard
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										
									</div>
									<div class="panel-body no-padding">
										<div class="partition-green padding-20 text-center core-icon">
											<i class="fa fa-bar-chart-o fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<a href="t.php"><h3 class="title block no-margin">Services</h3></a>
											<span class="subtitle"></span>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-blue padding-20 text-center core-icon">
											<i class="fa fa-group fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Customers</h3>
											<span class="subtitle">   </span>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-red padding-20 text-center core-icon">
											<i class="fa fa-calendar-o fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Reservation</h3>
											<span class="subtitle"></span>
										</div>
									</div>
								
								</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-azure padding-20 text-center core-icon">
											<i class="fa fa-shopping-cart fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Products</h3></a>
											<span class="subtitle"> </span>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-4 col-sm-6">
								<div class="panel panel-blue core-box">
									<div class="e-slider owl-carousel owl-theme">
										
										
										
								</div>
							</div>
							<div class="col-md-6 col-lg-4 col-sm-6">
								<div class="panel panel-green">
									<div class="e-slider owl-carousel owl-theme">
										</div>
										</div>
										</div>
										</div>

							<div class="col-md-12 col-lg-4 col-sm-12">
								<div id="notes">
									<div class="panel panel-note">
										<div class="e-slider owl-carousel owl-theme">
											
											
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-7">
								<div class="panel panel-white">
									
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-5">
								<div class="panel panel-red panel-calendar">
									<div class="panel-heading border-light">
										<h4 class="panel-title">Appointments</h4>
										<div class="panel-tools">
											<div class="dropdown">
												<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-white">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu dropdown-light pull-right" role="menu">
													<li>
														<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
													</li>
													<li>
														<a class="panel-refresh" href="#">
															<i class="fa fa-refresh"></i> <span>Refresh</span>
														</a>
													</li>
													<li>
														<a class="panel-config" href="#panel-config" data-toggle="modal">
															<i class="fa fa-wrench"></i> <span>Configurations</span>
														</a>
													</li>
													<li>
														<a class="panel-expand" href="#">
															<i class="fa fa-expand"></i> <span>Fullscreen</span>
														</a>
													</li>
												</ul>
											</div>
											<a class="btn btn-xs btn-link panel-close" href="#">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="panel-body">
										<div class="height-300">
											<div class="row">
												<div class="col-xs-6">
													<div class="actual-date">
														<span class="actual-day"></span>
														<span class="actual-month"></span>
													</div>
												</div>
												<div class="col-xs-6">
													<div class="row">
														<div class="col-xs-12">
															<div class="clock-wrapper">
																<div class="clock">
																	<div class="circle">
																		<div class="face">
																			<div id="hour"></div>
																			<div id="minute"></div>
																			<div id="second"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="weather text-light">
																<i class="wi-day-sunny"></i>
																25°
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<div class="row">
														<div class="appointments border-top border-bottom border-light space15">
															<a class="btn btn-sm owl-prev text-light">
																<i class="fa fa-chevron-left"></i>
															</a>
															<div class="e-slider owl-carousel owl-theme" data-plugin-options='{"transitionStyle": "goDown", "pagination": false}'>
																<div class="item">
																	<div class="inline-block padding-10 border-right border-light">
																		<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 17:00</span>
																		<span class="text-light text-extra-small">1 hour</span>
																	</div>
																	<div class="inline-block padding-10">
																		<span class="bold-text text-small">NETWORKING</span>
																		<span class="text-light text-small">Out to design conference</span>
																	</div>
																</div>
																<div class="item">
																	<div class="inline-block padding-10 border-right border-light">
																		<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 18:30</span>
																		<span class="text-light text-extra-small">30 mins</span>
																	</div>
																	<div class="inline-block padding-10">
																		<span class="bold-text text-small">BOOTSTRAP SEMINAR</span>
																		<span class="text-light text-small">Problem Solving</span>
																	</div>
																</div>
																<div class="item">
																	<div class="inline-block padding-10 border-right border-light">
																		<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 20:00</span>
																		<span class="text-light text-extra-small">2 hour</span>
																	</div>
																	<div class="inline-block padding-10">
																		<span class="bold-text text-small">Lunch with Nicole</span>
																		<span class="text-light text-small">Next on Tuesday</span>
																	</div>
																</div>
															</div>
															<a class="btn btn-sm owl-next text-light"><i class="fa fa-chevron-right"></i> </a>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<div class="pull-right">
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 col-lg-4">
								
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-7">
								
												<!--
												<button id='start-stop-button'>
												Start/Stop Stream
												</button>
												!-->
											</div>
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





<?php 

include ('inc/footer.php');
?>