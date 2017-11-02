<!-- footer-area start -->
		<footer class="footer-area black-opacity">
			<div class="footer-top ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-widget">
								<img src="assets/images/2.png"  width="100" height="100" alt="" />
								<p>We specialize in all forms of barbering</p>
								<div class="contact">
									<ul>
										<li><i class="fa fa-map-marker"></i> <span> 45, Odejayi Street,Surulere Lagos </span></li>
										<li><i class="fa fa-phone"></i> <span>08184488404 & 08180852283</span></li>
										<li><i class="fa fa-envelope"></i> <span>info@sigprodigy.com</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-widget">
								<h2>Useful Links</h2>
								<div class="footer-menu">
									<ul>
										<li><a href="about.php">About Us</a></li>
										<li><a href="#">Salons</a></li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="#">Giftcards</a></li>
										<li><a href="#">Work With Us</a></li>
										<li><a href="#">Terms & Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-widget">
								<h2>instagram</h2>
								<div class="instagram">
                                    <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/2e4d58a4fb2956d5875a12273e392cd9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-widget">
								<h2>QUICK BOOKING</h2>
								<div<div class="fb-page" data-href="https://www.facebook.com/sanusiikeoluwaa/" data-tabs="timeline" data-height="400" data-width="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom black-opacity">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="copyright">
								<p>2017 Sanusi Ikeoluwa Grooming Prodigy (SIGP). Designed  by <a href="http://e3tech.com.ng" target="blak_">E3 technologies</a> </p>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="socil-media text-right">
								<ul>
									<li><a href="https://www.facebook.com/sanusiikeoluwaa/" target="blak_"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/sanusi_ikeoluwa/" target="blak_"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://twitter.com/kwycee" target="blak_"><i class="fa fa-twitter"></i></a></li>
									<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-area end -->
		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="assets/js/owl.carousel.min.js"></script>
		<!-- counterup.main.js -->
        <script src="assets/js/counterup.main.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- jquery-ui.min.js -->
        <script src="assets/js/jquery-ui.min.js"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
		<!-- main js -->
        <script src="assets/js/scripts.js"></script>


         <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkyVw9JMI0N6HBsjIKelYK337j81RNec &libraries=places&callback=initAutocomplete"
        async defer></script>
    </body>

<!-- Mirrored from irsfoundation.com/tf/templates/legacy-preview/legacy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2017 19:51:28 GMT -->
</html>
