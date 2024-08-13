<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Club Caribe de San Jose</title>
	  <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <link href="css/lightbox.min.css" rel="stylesheet">
      <link rel="icon" type="image/ico" href="/images/sanjoseca.ico">
	  
	  <script src="js/bootstrap.js"></script>
	  <script src="js/lightbox.min.js"></script>
	  <script src="js/index.bundle.min.js"></script>
	  <script src="https://kit.fontawesome.com/6d74ba2c75.js" crossorigin="anonymous"></script>
	  
	  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
<body>
    <!-- HEADER -->
   
<nav class="navbar navbar-expand-lg navbar-light fixed-header">
  <a class="navbar-brand" href="#"><img src='../images/sanjoseca.png' width="100px" height="100%" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a style="color:black!important;" class="nav-link" href="#">Hom <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Ev">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#PhG">Photo Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Res">Reservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Co">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/ClubCaribeDeSanJose">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/clubcaribedesanjose/">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>


    

  <!-- CONTENT -->
<div class="one">
  
  <div class="container d-flex justify-content-center align-items-center">
    <img class="img-fluid d-sm-none" style="margin-top:120px;margin-bottom:80px" src='images/sanjoseca.png' />
    <img class="img-fluid d-none d-sm-block" width="50%" style="margin-top:120px;margin-bottom:80px" src='images/sanjoseca.png' />
  </div>
</div>


<div  id="Ev"  class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center" style="border-top: 5px solid rgba(255, 255, 153, 1); border-bottom: 5px solid rgba(255, 255, 153, 1);color:rgba(255, 255, 153, 1);margin-bottom: 25px;margin-top: 25px;">
        <h2>Events</h2>
      </div>
    </div>
  </div>
<div class="row row-cols-1 row-cols-md-3 g-4 p-4">
<?php  
include "connect.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$date = date("Y-m-d");
$sql = "SELECT * FROM tbl_eventos WHERE edate > " . $date . " AND status = 'active' LIMIT 0,3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$gimage=$row['image'];
		$edate=$row['edate'];
		

		echo "<div class='col col-sm'>";
    	echo "<div class='card h-100 bg-warning'>";
		echo "<a class='example-image-link' href='admin/eupload/$gimage' data-lightbox='example-set' data-title='Click anywhere outside the image or the X to the right to close.''>";
        echo "<img src='admin/eupload/$gimage' class='card-img-top evimg' width='400' height='100%' alt=''></a>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title text-center text-ly bg-warning'>Event Date: $edate</h5>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
		
    	 //echo "<a href='admin/eupload/$gimage' target='_self' class='inline-block litebox' style='margin-right:0px;margin-left:0px;margin-top:0px;margin-bottom:0px' data-litebox-group='group-1'><img src='admin/ecatch/$gimage' class='inline-block' /></a> ";
    }?>
<?php } 
$conn->close();?>  
</div>
</div>
<!-- PHOTO GALLERY -->
<div id="PhG" class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center" style="border-top: 5px solid rgba(255, 255, 153, 1); border-bottom: 5px solid rgba(255, 255, 153, 1);color:rgba(255, 255, 153, 1);margin-bottom: 25px;margin-top: 25px;">
        <h2>Photo Gallery</h2>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row-cols-6">
	  <?php  
include "connect.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM tbl_gallery WHERE status='active'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$gimage=$row['image'];
		
		echo "<a class='example-image-link' href='admin/gupload/$gimage' data-lightbox='example-set' data-title='Click anywhere outside the image or the X to the right to close.''>";
		echo "<img class='example-image' src='admin/gcatch/$gimage' width='auto' height='100%' alt='' style='margin:15px;' />";
		echo "</a>";
	
    }	
?>
<?php } 
$conn->close();?> 
  </div>  
</div>
  
   

<!-- RESERVATION -->
<div id="Res" class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center" style="border-top: 5px solid rgba(255, 255, 153, 1); border-bottom: 5px solid rgba(255, 255, 153, 1);color:rgba(255, 255, 153, 1);margin-bottom: 25px;margin-top: 25px;">
        <h2>Reservations</h2>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12 text-center">
      <h2 style="color: rgba(255, 255, 153, 1);">Reserve Now</h2>
      <p style="color: rgba(255, 255, 153, 1);">Or call 209-209-2099</p>
	  <h4 class="text-ly">Choose a table number</h4>
	  <table class="text-ly">
        <!-- TABLE TOP ROW HEADINGS-->
        
    </table>
		<?php
			  if(isset($_POST['submit']))
			  {
			  $id = $_POST['tableNumber'];
			  $fullname = $_POST['fullName'];
			  $phone = $_POST['phoneNumber'];
			  $status = "1";
			  include "connect.php";
			  $conn = new mysqli($servername, $username, $password, $dbname);
   					if ($conn->connect_error) {
       					die("Connection failed: " . $conn->connect_error);
   					}
   					$sql = "UPDATE tbl_mesas SET customername='$fullname', phone='$phone', status='$status' WHERE id='$id'";
					$result = $conn->query($sql);
   					if ($conn->query($sql) === TRUE) {
       					echo "Record updated successfully";
   					} else {
       					echo "Error updating record: " . $conn->error;
					}
					//$conn->close();
					}?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 text-ly">
      <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"> 
        <div class="form-group">
          <label  for="fullName">Full Name</label>
          <input type="text" class="form-control" name="fullName" placeholder="Enter your full name">
        </div>
        <div class="form-group">
          <label for="phoneNumber">Phone Number</label>
          <input type="tel" class="form-control" name="phoneNumber" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
          <label for="tableNumber">Table Number</label>
          <select name="tableNumber" class="form-control">
			  <?php
			  include "connect.php";
			  $conn = new mysqli($servername, $username, $password, $dbname);
    		  $sql = "SELECT * FROM `tbl_mesas` WHERE status='0'";
			  $result = $conn->query($sql);
			 while($row = $result->fetch_assoc()) {?>
			    <option><?php echo $row['id'];?></option>
               <?php }
           ?>
          </select>
        </div>
        <button type="submit" class="btn btn-block" style="background-color: rgba(64, 224, 208, 1)!important;margin:15px;" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
 
    </div>
    <div class="col-lg-6 col-md-12">
      <img src="images/tablemap.png" class="img-fluid" style="filter: grayscale();" alt="Responsive image">
    </div>
  </div>
</div>



    
<!-- MAP -->
<div id="OL" class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="text-center" style="border-top: 5px solid rgba(255, 255, 153, 1); border-bottom: 5px solid rgba(255, 255, 153, 1);color:rgba(255, 255, 153, 1);margin-bottom: 25px;margin-top: 25px;">
        <h2>Our Location</h2>
      </div>
    </div>
  </div>
</div>
<div class="container four">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe width="100%" height="250px" class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.518464200468!2d-121.88106458468838!3d37.32526197983969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcfc9b4a4dcf5%3A0x87ce2f1eb5f8c050!2s1001%20S%201st%20St%2C%20San%20Jose%2C%20CA%2095110!5e0!3m2!1sen!2sus!4v1657312611462!5m2!1sen!2sus" allowfullscreen></iframe>
  </div>
</div>



    <!-- FOOTER -->
<footer class="bg-black py-3 three">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>About Us</h4>
        <p>+21 Somos Club Caribe de San Jose CA, la mejor opción de entretenimiento nocturno en el Area de la Bahea</p>
		<p>+21 We are Club Caribe from San Jose CA, the best night entertainment option in the Bay Area</p>
      </div>
      <div class="col-md-3">
        <h4>Quick Links</h4>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#Ev">Events</a></li>
          <li><a href="#PhG">Photo Gallery</a></li>
          <li><a id="Co" href="#Co">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4>Enter Your Email</h4>
        <form>
          <div class="form-group">
            <label for="emailInput" class="sr-only">Email address</label>
            <input type="email" class="form-control" id="emailInput" placeholder="Enter email">
          </div>
          <button type="submit" class="btn btn-primary" style="background-color: rgba(64, 224, 208, 1)">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</footer>
  <script src="js/lightbox-plus-jquery.min.js"></script>  
  </body>
</html>
