<?php

$mykey1=$_REQUEST['key1'];
$status='delete';

include 'connect.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE tbl_gallery SET status='$active' WHERE id = '$mykey1'";
$result = $conn->query($sql);

echo "<script>location.href='viewallgallery.php'</script>"

?> 