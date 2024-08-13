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
    	echo "<a href='admin/gupload/$gimage' target='_self' class='inline-block litebox' style='margin-right:0px;margin-left:0px;margin-top:0px;margin-bottom:0px' data-litebox-group='group-1'><img src='admin/gcatch/$gimage' class='inline-block' /></a> ";
    }
?>
<?php } 
$conn->close();?>  

