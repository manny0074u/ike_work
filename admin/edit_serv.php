<?php
// Include MySQL class
require_once('inc/connect.php');
// Include database connection
include ('inc/header2.php');


$msg ="";
$rowid = $_GET['id'];






//echo $rowid;

$action = $_GET['action'];
switch ($action) {
	case 'add':
					
		break;
	case 'edit':
		
		break;
	case 'delete':
		
		break;
	case 'update':






/*if($_FILES['picture']['name'])
        {
            //if no errors...   && !$_FILES['message']['error']
            if(!$_FILES['picture']['error'])
            {
            
                $valid_file = true;
                            
                //now is the time to modify the future file name and validate the file
                
                if($_FILES['picture']['size'] > 9024000) //can't be larger than 10 MB 1024000 10MB 11200000   && $_FILES['message']['size'] > 3072000
                {
                    
                    $valid_file = false;
                     echo "<script>alert('Oops!  Your file\'s size is too larger than 10 MB.');  </script>";
                   
                }
                
                //if the file has passed the test
                if($valid_file)
                {
                
                    $fileName = $_FILES['picture']['name']; 
                    //$fileNameMessage = $_FILES['message']['name']; 
                      
                      if(!get_magic_quotes_gpc())
                      {
                        $fileName = addslashes($fileName);
                      }
                      
                    //$new_file_name = strtolower($fileName); //rename file
                    //move it to where we want it to be

                    move_uploaded_file($_FILES['picture']['tmp_name'], 'img/'.$fileName);*/











     $sql1 = "UPDATE services SET name='".$_POST['name']."', price='".$_POST['price']."'  WHERE id=".$rowid;
			$query = mysqli_query($con, $sql1);

		echo "<script>alert('Update Successful!!'); window.location='services.php' </script>";

         
             
           
   /* }
            }
            //if there is an error...
            else
            { 
                //set that to be the returned message
                $msg = "Ooops!  Your upload triggered the following error:  ".$_FILES['picture']['error'];
                //$msg .= "Ooops!  Your upload triggered the following error:  ".$_FILES['message']['error'];
            }
        }
        else
        {
            //set that to be the returned message
            $msg = "No file was uploaded:  ".$_FILES['picture']['error'];
            //$msg .= "No file was uploaded:  ".$_FILES['message']['error'];
        }
    break;
}*/







}
        
            

            
             
            




?>



















			<!-- end: PAGESLIDE RIGHT -->
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
									<h1>Edit Video</h1>
								</div>
							</div>
							<br>
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
										<a href="dashboard.php">
											Dashboard
										</a>
									</li>
									<li>
										<a href="videos.php">
											Videos
										</a>
									</li>
									<li class="active">
										Edit Video
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-sm-12">
								<div class="tabbable">
									<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
										
										<li class="active">
											<a data-toggle="tab" href="#panel_edit_account">
												Edit Video
											</a>
										</li>
										
									</ul>
									<div class="tab-content">
										
										<div id="panel_edit_account" class="tab-pane fade in active">
















										<?php
$sql = "SELECT * FROM services WHERE id=".$rowid;
								$query 	= mysqli_query($con, $sql);
								$rw = mysqli_fetch_array($query);


											echo '<form method="post" action="edit_serv.php?action=update&id='.$rowid.'" enctype="multipart/form-data" role="form" id="form">
												<div class="row">
													<div class="col-md-12">
														<h3>Edit Product</h3>
														<hr>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">
																Video Title
															</label>
															<input type="text"  value="'.$rw['name'].'" class="form-control" id="p_name" name="name">
														</div>
														
														<div class="form-group">
															<label class="control-label">
																Video link
															</label>
															<input type="text"  value="'.$rw['price'].'" class="form-control" id="p_name" name="price">
														</div>
														
														
														
														<div class="form-group">
															
														</div>



														

													</div>


													<div class="col-md-6">
														<div class="form-group connected-group">
															
															<div class="row">
																<div class="col-md-3">
																	
																</div>
																<div class="col-md-3">
																	
																</div>
																
															</div>
														</div>
														<div class="form-group">
															
															<div>
																
																
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	
																</div>
															</div>
															<div class="col-md-8">
																<div class="form-group">
																	
																</div>
															</div>
														</div>
														
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
													
														
													</div>
													<div class="col-md-6">
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div>
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														
													</div>
													<div class="col-md-4">
														<button class="btn btn-green btn-block" name="submit" type="submit">
															Update <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</form>';
											?>










										</div>
										<div id="panel_projects" class="tab-pane fade">
											<table class="table table-striped table-bordered table-hover" id="projects">
												<thead>
													<tr>
														<th class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey selectall">
															</label>
														</div></th>
														<th>Project Name</th>
														<th class="hidden-xs">Client</th>
														<th>Proj Comp</th>
														<th class="hidden-xs">%Comp</th>
														<th class="hidden-xs center">Priority</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>IT Help Desk</td>
														<td class="hidden-xs">Master Company</td>
														<td>11 november 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
																<span class="sr-only"> 70% Complete (danger)</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>PM New Product Dev</td>
														<td class="hidden-xs">Brand Company</td>
														<td>12 june 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
																<span class="sr-only"> 40% Complete</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-warning">High</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>ClipTheme Web Site</td>
														<td class="hidden-xs">Internal</td>
														<td>11 november 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
																<span class="sr-only"> 90% Complete</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>Local Ad</td>
														<td class="hidden-xs">UI Fab</td>
														<td>15 april 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
																<span class="sr-only"> 50% Complete</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>Design new theme</td>
														<td class="hidden-xs">Internal</td>
														<td>2 october 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
																<span class="sr-only"> 20% Complete (warning)</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
													<tr>
														<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey foocheck">
															</label>
														</div></td>
														<td>IT Help Desk</td>
														<td class="hidden-xs">Designer TM</td>
														<td>6 december 2014</td>
														<td class="hidden-xs">
														<div class="progress active progress-xs">
															<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
																<span class="sr-only"> 40% Complete (warning)</span>
															</div>
														</div></td>
														<td class="center hidden-xs"><span class="label label-warning">High</span></td>
														<td class="center">
														<div class="visible-md visible-lg hidden-sm hidden-xs">
															<a href="#" class="btn btn-light-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
															<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
															<a href="#" class="btn btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
														</div>
														<div class="visible-xs visible-sm hidden-md hidden-lg">
															<div class="btn-group">
																<a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																	<i class="fa fa-cog"></i> <span class="caret"></span>
																</a>
																<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-edit"></i> Edit
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-share"></i> Share
																		</a>
																	</li>
																	<li role="presentation">
																		<a role="menuitem" tabindex="-1" href="#">
																			<i class="fa fa-times"></i> Remove
																		</a>
																	</li>
																</ul>
															</div>
														</div></td>
													</tr>
												</tbody>
											</table>
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
						2017 &copy; Admin portal by <a href="http://e3tech.com.ng"> E3 Technologies</a>.
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="fa fa-chevron-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
			<!-- *** NEW NOTE *** -->
			<div id="newNote">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new note</h3>
					<form class="form-note">
						<div class="form-group">
							<input class="note-title form-control" name="noteTitle" type="text" placeholder="Note Title...">
						</div>
						<div class="form-group">
							<textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
							<textarea class="summernote" placeholder="Write note here..."></textarea>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-note" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** READ NOTE *** -->
			<div id="readNote">
				<div class="barTopSubview">
					<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
				</div>
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="panel panel-note">
						<div class="e-slider owl-carousel owl-theme">
							<div class="item">
								<div class="panel-heading">
									<h3>This is a Note</h3>
								</div>
								<div class="panel-body">
									<div class="note-short-content">
										Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
									</div>
									<div class="note-content">
										Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
										Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
										<br>
										Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<br>
										Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
										<br>
										Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
										<br>
										Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
										<br>
										At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
										<br>
										Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
										<br>
										Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
									</div>
									<div class="note-options pull-right">
										<a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="assets/images/avatar-2-small.jpg" alt="">
									</div>
									<span class="author-note">Nicole Bell</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
							<div class="item">
								<div class="panel-heading">
									<h3>This is the second Note</h3>
								</div>
								<div class="panel-body">
									<div class="note-short-content">
										Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
									</div>
									<div class="note-content">
										Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<br>
										Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
										<br>
										Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
										<br>
										Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
										<br>
										Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
										<br>
										Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
									</div>
									<div class="note-options pull-right">
										<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="assets/images/avatar-3-small.jpg" alt="">
									</div>
									<span class="author-note">Steven Thompson</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
							<div class="item">
								<div class="panel-heading">
									<h3>This is yet another Note</h3>
								</div>
								<div class="panel-body">
									<div class="note-short-content">
										At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
									</div>
									<div class="note-content">
										At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
										<br>
										Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<br>
										Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
										<br>
										Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
									</div>
									<div class="note-options pull-right">
										<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="assets/images/avatar-4-small.jpg" alt="">
									</div>
									<span class="author-note">Ella Patterson</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- *** SHOW CALENDAR *** -->
			<div id="showCalendar" class="col-md-10 col-md-offset-1">
				<div class="barTopSubview">
					<a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
				</div>
				<div id="calendar"></div>
			</div>
			<!-- *** NEW EVENT *** -->
			<div id="newEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new event</h3>
					<form class="form-event">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="event-id hide" type="text">
									<input class="event-name form-control" name="eventName" type="text" placeholder="Event Name...">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
								</div>
							</div>
							<div class="no-all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-clock-o"></i> </span>
										</div>
									</div>
								</div>
							</div>
							<div class="all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-calendar"></i> </span>
										</div>
									</div>
								</div>
							</div>
							<div class="hide">
								<input type="text" class="event-start-date" name="eventStartDate"/>
								<input type="text" class="event-end-date" name="eventEndDate"/>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="form-control selectpicker event-categories">
										<option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="event-cancelled">Cancelled</option>
										<option data-content="<span class='event-category event-home'>Home</span>" value="event-home">Home</option>
										<option data-content="<span class='event-category event-overtime'>Overtime</span>" value="event-overtime">Overtime</option>
										<option data-content="<span class='event-category event-generic'>Generic</span>" value="event-generic" selected="selected">Generic</option>
										<option data-content="<span class='event-category event-job'>Job</span>" value="event-job">Job</option>
										<option data-content="<span class='event-category event-offsite'>Off-site work</span>" value="event-offsite">Off-site work</option>
										<option data-content="<span class='event-category event-todo'>To Do</span>" value="event-todo">To Do</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="summernote" placeholder="Write note here..."></textarea>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-new-event" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** READ EVENT *** -->
			<div id="readEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<h2 class="event-title">Event Title</h2>
							<div class="btn-group options-toggle pull-right">
								<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
									<span class="caret"></span>
								</button>
								<ul role="menu" class="dropdown-menu dropdown-light pull-right">
									<li>
										<a href="#newEvent" class="edit-event">
											<i class="fa fa-pencil"></i> Edit
										</a>
									</li>
									<li>
										<a href="#" class="delete-event">
											<i class="fa fa-times"></i> Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<span class="event-category event-cancelled">Cancelled</span>
							<span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
						</div>
						<div class="col-md-12">
							<div class="event-start">
								<div class="event-day"></div>
								<div class="event-date"></div>
								<div class="event-time"></div>
							</div>
							<div class="event-end"></div>
						</div>
						<div class="col-md-12">
							<div class="event-content"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- *** NEW CONTRIBUTOR *** -->
			<div id="newContributor">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new contributor</h3>
					<form class="form-contributor">
						<div class="row">
							<div class="col-md-12">
								<div class="errorHandler alert alert-danger no-display">
									<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
								</div>
								<div class="successHandler alert alert-success no-display">
									<i class="fa fa-ok"></i> Your form validation is successful!
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="contributor-id hide" type="text">
									<label class="control-label">
										First Name <span class="symbol required"></span>
									</label>
									<input type="text" placeholder="Insert your First Name" class="form-control contributor-firstname" name="firstname">
								</div>
								<div class="form-group">
									<label class="control-label">
										Last Name <span class="symbol required"></span>
									</label>
									<input type="text" placeholder="Insert your Last Name" class="form-control contributor-lastname" name="lastname">
								</div>
								<div class="form-group">
									<label class="control-label">
										Email Address <span class="symbol required"></span>
									</label>
									<input type="email" placeholder="Text Field" class="form-control contributor-email" name="email">
								</div>
								<div class="form-group">
									<label class="control-label">
										Password <span class="symbol required"></span>
									</label>
									<input type="password" class="form-control contributor-password" name="password">
								</div>
								<div class="form-group">
									<label class="control-label">
										Confirm Password <span class="symbol required"></span>
									</label>
									<input type="password" class="form-control contributor-password-again" name="password_again">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">
										Gender <span class="symbol required"></span>
									</label>
									<div>
										<label class="radio-inline">
											<input type="radio" class="grey contributor-gender" value="F" name="gender">
											Female
										</label>
										<label class="radio-inline">
											<input type="radio" class="grey contributor-gender" value="M" name="gender">
											Male
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										Permits <span class="symbol required"></span>
									</label>
									<select name="permits" class="form-control contributor-permits" >
										<option value="View and Edit">View and Edit</option>
										<option value="View Only">View Only</option>
									</select>
								</div>
								<div class="form-group">
									<div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
										<div class="fileupload-new thumbnail"><img src="assets/images/anonymous.jpg" alt="" width="50" height="50"/>
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail"></div>
										<div class="contributor-avatar-options">
											<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
												<input type="file">
											</span>
											<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										SEND MESSAGE (Optional)
									</label>
									<textarea class="form-control contributor-message"></textarea>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-contributor" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** SHOW CONTRIBUTORS *** -->
			<div id="showContributors">
				<div class="barTopSubview">
					<a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
				</div>
				<div class="noteWrap col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="contributors">
								<div class="options-contributors hide">
									<div class="btn-group">
										<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
											<i class="fa fa-cog"></i>
											<span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">
											<li>
												<a href="#newContributor" class="show-subviews edit-contributor">
													<i class="fa fa-pencil"></i> Edit
												</a>
											</li>
											<li>
												<a href="#" class="delete-contributor">
													<i class="fa fa-times"></i> Delete
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: SUBVIEW SAMPLE CONTENTS -->
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
		<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="assets/js/pages-user-profile.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				PagesUserProfile.init();
			});
		</script>

				<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="assets/plugins/select2/select2.min.js"></script>
		<script src="assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		<script src="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-elements.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				FormElements.init();
			});
		</script>
	</body>
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/pages_user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 13:53:17 GMT -->
</html>