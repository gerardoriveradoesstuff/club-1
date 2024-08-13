<?php
	include('header.php');
	?>
<div class="container text-white p-2">
  <div class="row row-cols-4">
    <div class="col col-lg col-md">
    	<form>
			<div><h1>CONTACT US</h1></div>
  			<div class="form-group">
    			<div class="form-group col col-lg col-md col-sm">
      				<label for="inputFirtName">First Name</label>
      				<input type="text" class="form-control" id="inputFirstName" placeholder="Enter First Name">
    			</div>
    			<div class="form-group col col-lg col-md col-sm">
      				<label for="inputLastName">Last Name</label>
      				<input type="text" class="form-control" id="inputLastName" placeholder="Enter Last Name">
    			</div>
  			</div>
  			<div class="form-group">
    				<label for="email">Email</label>
    				<input type="email" class="form-control" id="inputEmail" placeholder="Email">
  			</div>
  			<div class="form-group">
    			<label for="inputPhone">Phone Number</label>
    			<input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
  			</div>
  			<div class="form-group">
    			<div class="form-group col">
      				<label for="inputSubject">Subject</label>
      				<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
    			</div>
    			<div class="form-group">
    				<label for="inputMessage">Message</label>
    				<textarea class="form-control" id="inputMessage" rows="3"></textarea>
  				</div>
  			</div>
  			<button type="submit" class="btn btn-warning">Submit</button>
		</form>
    </div>
    <div class="col">
      <div class="justify-content-center">
		<h4 class="text-center text-warning">ADDRESS</h4>
		  <p class="text-center">1001 S 1st St, San Jose, CA 95110</p>
	  </div>
	  <div class="justify-content-center">
		<h4 class="text-center text-warning">CALL OR TEXT</h4>
		  <p class="text-center">(408) 444-4444</p>
	  </div>	
	  <div class="justify-content-center">
		<h4 class="text-center text-warning">PRIVATE EVENTS</h4>
		  <p class="text-center">info@clubcaribedesanjose.com</p>
	  </div>
	  <div class="justify-content-center">
		<h4 class="text-center text-warning">HOURS</h4>
		  <p class="text-center">Friday: 10:00PM - 2:00AM</p>
		  <p class="text-center">Saturday: 10:00PM - 2:00AM</p>
		  <p class="text-center">Sunday: 10:00PM - 2:00AM</p>
		  <div class="row text-center">
		  	<section class="mb-4">
      			<!-- Facebook -->
      			<a class="fa fa-facebook text-warning" href="#!" role="button"></a>
				<!-- Instagram -->
      			<a class="fa fa-instagram text-warning" href="#!" role="button"></a>
				<!-- Twitter -->
				<a class="fa fa-twitter text-warning" href="#!" role="button"></a>
			</dection>
		  </div>
	  </div>		
    </div>
    <div class="col">
      <div id="googleMap" style="width:110%;height:600px;"></div>
    </div>
  </div>
</div>
<?php
	include('footer.php');
	?>
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(37.3206971,-121.8787193),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>