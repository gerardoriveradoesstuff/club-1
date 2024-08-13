<?php
	include('header.php');
	?>
<div class="container-flex">
	<div class="text-center text-warning p-3">
		<h1>All Future Events</h1>
	</div>
	<div><hr></div>
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
$sql = "SELECT * FROM tbl_eventos WHERE edate > " . $date . " AND status = 'active' LIMIT 0,9";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$gimage=$row['image'];
		$edate=$row['edate'];
		
		echo "<div class='col'>";
    	echo "<div class='card h-100 bg-warning'>";
		echo "<a class='example-image-link' href='admin/eupload/$gimage' data-lightbox='example-set' data-title='Click anywhere outside the image or the X to the right to close.''>";
        echo "<img src='admin/eupload/$gimage' class='card-img-top' width='400' height='400' alt=''></a>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title text-center text-white bg-warning'>Event Date: $edate</h5>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
		
    	 //echo "<a href='admin/eupload/$gimage' target='_self' class='inline-block litebox' style='margin-right:0px;margin-left:0px;margin-top:0px;margin-bottom:0px' data-litebox-group='group-1'><img src='admin/ecatch/$gimage' class='inline-block' /></a> ";
    }
?>
<?php } 
$conn->close();?>  
</div>
</div>	
	
<?php
	include('footer.php');
	?>

<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>






