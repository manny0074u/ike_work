
<?php
$menu="product";
include('inc/header.php');





?>
		
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area black-opacity mt-84 bg-img-6">
        	<div class="table">
        		<div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="breadcumb-wrap text-center">
                                    <h1>Welcome Our Shop</h1>
                                    <h2>Shopping Cart</h2>
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
                				<li><a href="products.php">Products</a></li>
                				<li>-/-</li>
                				<li>Shopping Cart</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
		
			<!-- cart-area start -->
		<div class="cart-area ptb-100 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive mb-40 cart-wrapper">
							<table>
								<thead>
									<tr>
										<!-- <th>Remove</th>-->
										<th>Image</th>
										<th>Product Name</th>
										<th>PRICE</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<!--<td><a href="#"><i class="fa fa-times"></i></a></td>-->
										<td><img src="assets/images/cart/1.jpg" alt="" /></td>
										<td><p>Hair Color</p></td>
										<td><span>$35.00</span></td>
										<td><input type="number" value="10"/></td>
										<td><span>$35.00</span></td>
									</tr>
									
								</tbody>
							</table>
													</div>
						<div class="">
							<div class="total-cart">
								<!-- checkout-area start -->
		<div class="checkout-area ptb-100 bg-1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-9 ">
						<div class="checkout-form-wrap mb-20">
							<h3 class="checkout-title">Fill the form below to place order</h3>
							<form method="post" action="cart.php">
							<div class="checkout-form">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<p>full Name <span>*</span></p>
										<input required type="text" name="name" placeholder="Your first name..."/>
									</div>
									<div class="col-sm-6 col-xs-12">
										<p>Phone <span>*</span></p>
										<input  required type="text" name="phone" placeholder="Your phone..."/>
									</div>
									<div class="col-sm-6 col-xs-12">
										<p>Email Address <span>*</span></p>
										<input required type="email" name="email" placeholder="Your email address..."/>
									</div>
									<div class="col-sm-6 col-xs-12">
										<p>State <span>*</span></p>
										<select required name="select" name="state">
											<option>-- Select State --</option>
 <option value="ABIA">ABIA</option>
              <option value="ADAMAWA">ADAMAWA</option>
              <option value="AKWA IBOM">AKWA IBOM</option>
              <option value="ANAMBRA">ANAMBRA</option>
              <option value="BAUCHI">BAUCHI</option>
              <option value="BAYELSA">BAYELSA</option>
              <option value="BENUE">BENUE</option>
              <option value="BORNO">BORNO</option>
              <option value="CROSS RIVER">CROSS RIVER</option>
              <option value="DELTA">DELTA</option>
              <option value="EBONYI">EBONYI</option>
              <option value="EDO">EDO</option>
              <option value="EKITI">EKITI</option>
              <option value="ENUGU">ENUGU</option>
              <option value="FCT">FCT</option>
              <option value="GOMBE">GOMBE</option>
              <option value="IMO">IMO</option>
              <option value="JIGAWA">JIGAWA</option>
              <option value="KADUNA">KADUNA</option>
              <option value="KANO">KANO</option>
              <option value="KATSINA">KATSINA</option>
              <option value="KEBBI">KEBBI</option>
              <option value="KOGI">KOGI</option>
              <option value="KWARA">KWARA</option>
              <option value="LAGOS">LAGOS</option>
              <option value="NASSARAWA">NASSARAWA</option>
              <option value="NIGER">NIGER</option>
              <option value="OGUN">OGUN</option>
              <option value="ONDO">ONDO</option>
              <option value="OSUN">OSUN</option>
              <option value="OYO">OYO</option>
              <option value="PLATEAU">PLATEAU</option>
              <option value="RIVERS">RIVERS</option>
              <option value="SOKOTO">SOKOTO</option>
              <option value="TARABA">TARABA</option>
              <option value="YOBE">YOBE</option>
              <option value="ZAMFARA">ZAMFARA</option>
</select>
									</div>
									<div class="col-sm-6 col-xs-12" id="locationField" >
										<p>City <span>*</span></p>
	<input required type="text" id="autocomplete" placeholder="Enter your City" onFocus="geolocate()" name="city" />
								
									
	</div>
	<button type="submit" name="submit" class="btn cart-btn btn-danger btn-lg">SUBMIT</button>	
</div>
</div>
</form>

</div>
</div>
									
								
	</div>							
									
									
							
				
</form>

					<div class="col-md-3 col-xs-12">
						
				</div>
			</div>
		</div>
		<!-- checkout-area end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-area end -->
		

<?php
include('inc/footer.php');


?>