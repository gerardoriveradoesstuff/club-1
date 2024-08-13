<!DOCTYPE html>
<html>
<head>
	<title>Anturio events and design - Our Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<!--navigation bar --> 

 <!-- Serivices -->
<script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
</script>	
<hr>
<h1 class="text-center text-white">Our Services</h1>
<hr>
<div class="text-lg-center"><p>Please click on each photo to see our services gallery.</p></div>
<div class="container">
	<section class="wrapper cl" >
<?php  
include "connect.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 12;  
$sql = "SELECT * FROM tbl_gallery where status='active' ORDER BY id DESC LIMIT $start_from, 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$gimage=$row['image'];
    	echo "<div class='grid'>";
            echo "<a href='admin/gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='admin/gcatch/$gimage' class='inline-block' /></a> ";
        echo "</div>";
    }
?>
<?php } 
$conn->close();?>  
	</section>
</div>
<div class="clearfix"></div>
<div class="container">
<?php  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gallerydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT COUNT(*) FROM tbl_gallery WHERE status='active'";  
$result = $conn->query($sql);
$row = mysqli_num_rows($result);
//$row = $result->fetch_assoc();
$total_records = $row;
$total_pages = ceil($total_records / 12);
	for ($i=1; $i<=$total_pages; $i++) {
  			echo "<ul class='pagination text-center'>";
				echo "<b>Page</b>";
    			echo "<li class='page-item'>";
      			echo "<a class='page-link' href='services.php?page=".$i."' tabindex=$i>".$i."</a>";
    			echo "</li>";
  			echo "</ul>";
		//echo "<b>Page </b>";
		//echo "<ul class='pagination pagination-lg'>";
		//echo "<a href='services.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";	
		//echo "</ul>";
	}
//echo "$total_records";
?>
</div>
<hr>
<footer style="background-color: #46781a; color:ghostwhite;">
  		<div class="container">
      		<div class="col-xs-10 text-center">
        		<p>Copyright © Digital Solutions. All rights reserved.</p>
      		</div>
  		</div>
</footer>
  
</body>
</html>
