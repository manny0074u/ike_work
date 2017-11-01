
<?php
$menu="gallery";
include('inc/header.php');
include('inc/connect.php');
$sql ="SELECT * FROM pictures ";
$query = mysqli_query($con, $sql);



?>
		
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area black-opacity mt-84 bg-img-3">
        	<div class="table">
        		<div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="breadcumb-wrap text-center">
                                    <h2> Pictures</h2>
                                    
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
                				<li>Pictures</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
		
		<!-- galley-area start -->
		<div class="portfolio-area ptb-100">
			<div class="container">
				<div class="row grid">
					<?php

                        while($row =mysqli_fetch_array($query)){

                       echo ' 
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item ">
                        <div class="portfolio-wrap mb-30">
                            <img src="assets/images/portfolio/portfolio2/6.jpg" alt="" />
                            <div class="portfolio-content">
                                <a href="assets/images/portfolio/portfolio2/6.jpg" class="popup">
                                    <span class="fa fa-link"></span>
                                </a>
                                <h3>BEARD TRIMMING</h3>
                            </div>
                        </div>
                    </div>';
                }

                ?>

                  
					
				</div>
			</div>
		</div>
		<!-- galley-area end -->
		
        
	
<?php
include('inc/footer.php');


?>