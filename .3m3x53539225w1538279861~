<?php
	include('header.php');
	?>
<div class="text-center text-warning p-4">
	<h1>Photo Gallery</h1>
</div>
<div>
<hr>
</div>
<div class="container-fluid">

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
		echo "<img class='example-image' src='admin/gcatch/$gimage' width='240' height='250' alt='' />";
		echo "</a>";
	
    }	
?>
<?php } 
$conn->close();?>  

</div>

<?php
	include('footer.php');
	?>

	<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
