<?php
$menu="product";
include('inc/header.php');
include('inc/connect.php');

$sql ="SELECT * FROM product ";
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
                                  
                                    <h2>Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
            <div class="breadcumb-menu breadcumb-menu2">
                <div class="container">
                	<div class="row">
                		<div class="col-xs-12">
                			<ul>
                				<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                				<li>-/-</li>
                				<li>Service</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
        
        <!-- .service-area start -->
		<div class="service-area ptb-100 bg-1 service-area2 service-style">
			<div class="container">
				<div class="row">
                   <?php

                    while ($row =mysqli_fetch_array($query)) {
                    
                    echo '<div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="shop-wrap">
                            <div class="shop-img">
                                <img src="assets/images/shop/4.jpg" alt="" />
                                <a href="shop.html" class="cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="shop-content">
                                <h3 style="font-weight: bolder;"><a href="shop.html">Hair Dryer</a></h3>
                               
                               <span style="font-size: 20px; font-weight: bolder;">$25.00</span>  
                            </div>
                        </div>
                    </div>';

                }

                ?>
					
				</div>
			</div>
		</div>
		<!-- .service-area end -->
        
       
        
	
<?php
include('inc/footer.php');


?>