
<?php
$menu="gallery";
include('inc/header.php');

include('inc/connect.php');
$sql ="SELECT * FROM videos ";
$query = mysqli_query($con, $sql);



?>
        
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area black-opacity mt-84 bg-img-2">
        	<div class="table">
        		<div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="breadcumb-wrap text-center">
                                     <h2>Videos</h2>
                                    
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
                				<li>Videos</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
        
        <!-- blog-area start -->
        <div class="blog-area ptb-100 bg-1 blog-area2">
            <div class="container">
                <div class="row">
                    <?php

                        while($row =mysqli_fetch_array($query)){

                       echo ' 
                    <div class="col-md-4  col-xs-12 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="">
                                '.$row['link'].'
                                
                            </div>
                            <div class="blog-content">
                                
                                <!--<h3>Best Hair Cut for Woman</h3>-->
                               
                            </div>
                        </div>
                    </div>';


                }


                ?>








                    
                </div>
            </div>
        </div>
        <!-- blog-area end -->


                   
        
        
       



<?php
include('inc/footer.php');


?>