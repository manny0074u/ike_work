<?php 
$menu="home";
include('inc/header.php');
include('inc/connect.php');

$sql ="SELECT * FROM pictures LIMIT 0,8";
$query = mysqli_query($con, $sql);

$sql1 ="SELECT * FROM product LIMIT 0,4";
$query1 = mysqli_query($con, $sql1);




?>
		<!-- heared area start -->
		
		<!-- slider area start -->
		<div class="slider-area mt-8 ">
			<div class="slider-active">
				<div class="slider-items">
					<img src="assets/images/slider/1.jpg" alt="" class="slider">
					<div class="slider-content">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8">
											<h2>Welcome our Barber Shop</h2>
											<h3>we Trule Believe Haircut Matters </h3>
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<ul>
												<li><a href="#">Book Appointment</a></li>
												<li><a href="#">I Want to Order</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-items">
					<img src="assets/images/slider/2.jpg" alt="" class="slider">
					<div class="slider-content text-right">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-md-8 col-md-offset-4">
											<h2>Welcome our Barber Shop</h2>
											<h3>we Trule Believe Haircut Matters </h3>
											<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<ul>
												<li><a href="#">Book Appointment</a></li>
												<li><a href="#">I Want to Order</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider area end -->
		
		<!-- .service-area start -->
		<div class="service-area ptb-100 service-area2 service-style" id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40">
							<h2>OUR Service</h2>
							<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrap text-center mb-30">
							<div class="service-img">
								<img src="assets/images/basic.png" alt="" />
							</div>
							<div class="service-content">
								<h3>Basic haircut</h3>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrap text-center mb-30">
							<div class="service-img">
								<img src="assets/images/haircut.png" alt="" />
							</div>
							<div class="service-content">
								<h3>Enhanced haircut</h3>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="service-wrap text-center mb-30">
							<div class="service-img">
								<img src="assets/images/face.png" alt="" />
							</div>
							<div class="service-content">
								<h3>Face steaming</h3>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- .service-area end -->
		
		<!-- opening-area start -->
		<div class="opaning-area  parallax black-opacity opaning-area2"  data-speed="3" data-bg-image="assets/images/bg/7.jpg">
			<div class="opening">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
							<div class="section-title text-center mb-40 section-title2">
								<h2>OPENING HOURS</h2>
								<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
								
							</div>
						</div>
					</div>
					<div class="row">
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>MON</h3>
                                <p>09.00 AM - 09.00 PM</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>TUE</h3>
                                <p>90.00 AM - 09.00 PM</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>WED</h3>
                                <p>CLOSED</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>THU</h3>
                                <p>10.00 AM - 09.00 PM</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>FRI</h3>
                                <p>09.00 AM - 09.00 PM</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 col-sm-4">
                            <div class="opening-item">
                                <h3>WEEKEND</h3>
                                  <p>11.00 AM - 10.00 PM</p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- opening-area end -->
		
        <!-- galley-area start -->
		<div class="portfolio-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40">
							<h2>Latest HAIR</h2>
							<div class="line line2">
                                <span class="flaticon-woman-with-long-hair"></span>
                            </div>
							
						</div>
					</div>
				</div>
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

		         <div class="spacial-area ptb-100 parallax black-opacity"  data-speed="3" data-bg-image="assets/images/bg/6.jpg">
        	<div class="container">
        		<div class="row">
        			<div class="col-xs-12">
                        <div class="spacial-wrap text-center">
                            <p>Make your appointment</p>
                            <h2>08184488404 & 08180852283</h2>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
        
        
		<!-- .shop-area start -->
        <div class="shop-area ptb-100 bg-1 shop-area2">
        	<div class="container">
        		<div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40">
							<h2>Our Shop</h2>
							<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
							
						</div>
					</div>
                </div>
                <div class="row">
                	<?php

                	while ($row1 =mysqli_fetch_array($query1)) {
                	
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


  
        <!-- .shop-area end -->
		
		<!-- funfact-area start 
		<div class="funfact-area ptb-100 parallax black-opacity"  data-speed="3" data-bg-image="assets/images/bg/3.jpg">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="funfact-wrap">
							<div class="funfact-icon">
								<span class="flaticon-valentines-heart"></span>
							</div>
							<div class="funfac-content">
								<h2 class="counter">1250</h2>
								<p>Happy Clients</p>
							</div>
						</div>
					</div>
					<div class="col-md-3  col-sm-3 col-xs-6">
						<div class="funfact-wrap">
							<div class="funfact-icon">
								<span class="flaticon-coffee"></span>
							</div>
							<div class="funfac-content">
								<h2 class="counter">870</h2>
								<p>Cups Of Coffee</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="funfact-wrap">
							<div class="funfact-icon">
								<span class="flaticon-valentines-heart"></span>
							</div>
							<div class="funfac-content">
								<h2 class="counter">1578</h2>
								<p>Likes</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="funfact-wrap">
							<div class="funfact-icon">
								<span class="flaticon-woman-head-side-silhouette"></span>
							</div>
							<div class="funfac-content">
								<h2 class="counter">1520</h2>
								<p>Best Look</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- funfact-area end -->
		
        <!-- pricing-table start 
		<div class="pricing-table-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40">
							<h2>OUR Best Price</h2>
							<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="pricing-wrapper text-center">
							<h3>Hair Style</h3>
							<div class="pricing-icon">
								<span class="flaticon-woman-with-long-hair"></span>
							</div>
							<ul>
								<li>Trim Your Hair <span class="pull-right">$15.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$12.00</span></li>
								<li>Special Beard Treatment <span class="pull-right">$6.00</span></li>
								<li>Color Your Beard <span class="pull-right">$10.00</span></li>
								<li>Wax Your Beard <span class="pull-right">$18.00</span></li>
								<li>Complete Treatment <span class="pull-right">$13.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$11.00</span></li>
							</ul>
							<a href="appointment.html">Book Now</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="pricing-wrapper text-center">
							<h3>Hair Cutting</h3>
							<div class="pricing-icon">
								<span class="flaticon-hairdresser-with-scissors-cutting-the-hair-to-a-client-sitting-in-front-of-him"></span>
							</div>
							<ul>
								<li>Trim Your Hair <span class="pull-right">$15.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$12.00</span></li>
								<li>Special Beard Treatment <span class="pull-right">$6.00</span></li>
								<li>Color Your Beard <span class="pull-right">$10.00</span></li>
								<li>Wax Your Beard <span class="pull-right">$18.00</span></li>
								<li>Complete Treatment <span class="pull-right">$13.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$11.00</span></li>
							</ul>
							<a href="appointment.html">Book Now</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="pricing-wrapper text-center">
							<h3>Hair Wosh</h3>
							<div class="pricing-icon">
								<span class="flaticon-hairdresser-washing-the-hair-of-a-client-with-bubbles-shampoo"></span>
							</div>
							<ul>
								<li>Trim Your Hair <span class="pull-right">$15.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$12.00</span></li>
								<li>Special Beard Treatment <span class="pull-right">$6.00</span></li>
								<li>Color Your Beard <span class="pull-right">$10.00</span></li>
								<li>Wax Your Beard <span class="pull-right">$18.00</span></li>
								<li>Complete Treatment <span class="pull-right">$13.00</span></li>
								<li>Trim Your Beard <span class="pull-right">$11.00</span></li>
							</ul>
							<a href="appointment.html">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- pricing-table end -->
		
		
		<!-- appointment-area end -->
        
		<!-- team-area start 
		<div class="team-area ptb-100 bg-1 team-area2 team-area3">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40">
							<h2>OUR Best STYLERS</h2>
							<div class="line line2">
                                <span class="flaticon-woman-with-long-hair"></span>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="team-wrap fix">
                            <div class="team-img">
                                <img src="assets/images/team/5.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><a href="team-single.html">MARTIN JACKSON</a></h3>
                                <span>Barber</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="team-wrap fix">
                            <div class="team-img">
                                <img src="assets/images/team/6.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><a href="team-single.html">NATALIA DOE</a></h3>
                                <span>Hairdresser</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <div class="team-wrap fix">
                            <div class="team-img">
                                <img src="assets/images/team/7.jpg" alt="" />
                            </div>
                            <div class="team-content">
                                <h3><a href="team-single.html">JOHAN SMITH</a></h3>
                                <span>Stylist</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>-->
		<!-- team-area end -->
		
        <!-- testmonial-area start 
        <div class="testmonial-area ptb-100 parallax black-opacity"  data-speed="3" data-bg-image="assets/images/bg/8.jpg">
        	<div class="container">
        		<div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="section-title text-center mb-40 section-title2">
							<h2>Our Client Say</h2>
							<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
                </div>
                <div class="row">
                	<div class="test-active">
                        <div class="col-xs-12">
                            <div class="testmonial-wrap">
                                <div class="testmonial-img">
                                    <img src="assets/images/test/1.jpg" alt="" />
                                </div>
                                <div class="testmonial-content">
                                    <div class="test-info">
                                        <h3>Big Boss</h3>
                                        <span>CEO/ Founder</span>
                                        <p>Dolor lorem ipsum  sit amet,do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="testmonial-wrap">
                                <div class="testmonial-img">
                                    <img src="assets/images/test/2.jpg" alt="" />
                                </div>
                                <div class="testmonial-content">
                                    <div class="test-info">
                                        <h3>Smit Deo</h3>
                                        <span>CEO/ Founder</span>
                                        <p>labore et dolore magna aliqua. Lorem ipsum dolor sit amet,do eiusmod consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="testmonial-wrap">
                                <div class="testmonial-img">
                                    <img src="assets/images/test/3.jpg" alt="" />
                                </div>
                                <div class="testmonial-content">
                                    <div class="test-info">
                                        <h3>John DEO</h3>
                                        <span>CEO/ Founder</span>
                                        <p>Do eiusmod consectetur adipisicing elit, Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="testmonial-wrap">
                                <div class="testmonial-img">
                                    <img src="assets/images/test/4.jpg" alt="" />
                                </div>
                                <div class="testmonial-content">
                                    <div class="test-info">
                                        <h3>Catherine Grace</h3>
                                        <span>CEO/ Founder</span>
                                        <p>Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,do eiusmod consectetur adipisicing elit, sed do eiusmod tempor </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="testmonial-wrap">
                                <div class="testmonial-img">
                                    <img src="assets/images/test/5.jpg" alt="" />
                                </div>
                                <div class="testmonial-content">
                                    <div class="test-info">
                                        <h3>Bravo Grace</h3>
                                        <span>CEO/ Founder</span>
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,do eiusmod consectetur adipisicing elit, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </div>-->
        <!-- testmonial-area end -->
        
		<!-- brand-area start 
		<div class="brand-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="section-title text-center mb-40">
							<h2>Our Client Logo</h2>
							<div class="line"><span class="flaticon-hair-salon-badge-with-scissors"></span></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="brand-active">
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/1.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/2.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/3.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/4.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/5.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/6.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="brand-wrap">
								<a href="#">
									<img src="assets/images/brand/7.jpg" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- brand-area end -->
		
		<br>
		<br>
		<br>
		<br>

		<?php
include('inc/footer.php');

		?>