<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header1.php"; ?>
<?php include "menu/amenu1.php"; ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Events</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <script type="application/javascript">
function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){return true;}else{alert("only jpeg format supported!");fup.focus();return false;}}</script>
<?php
if(isset($_POST['submit']))
{
$aname = $_POST['eventname'];
$descrip = $_POST['description'];
$edate = $_POST['edate'];
$adate = date('Y-m-d H:i:s');
$status='active';
$rd=rand();

$uploadedfile = $_FILES['upload']['tmp_name'];

$src = imagecreatefromjpeg($uploadedfile);

list($width,$height)=getimagesize($uploadedfile);


$newwidth=500;
//$newheight=($height/$width)*100;
$newheight=500;
$tmp=imagecreatetruecolor($newwidth,$newheight);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

$filename = "ecatch/".$rd. $_FILES['upload']['name'];
imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp); 
$photo=$rd.$_FILES['upload']['name'];
move_uploaded_file($_FILES["upload"]["tmp_name"],"eupload/".$rd.$_FILES["upload"]["name"]);

if (empty($aname))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
 }
else
{
include "connect.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO tbl_eventos(ename,edesc,image,edate,dcreated,status) VALUES ('$aname','$descrip','$photo','$edate','$adate','$status')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
echo " <div class='alert alert-success'>Your Event Is Successfully Added. <a href='viewallevents.php'>View albums</a> |<a href='addevent.php'> Add new album</a></div>";
}
	else
	{
		echo "error";
		print mysql_error();
	}
	echo "<script>location.href='addevent.php </script";
   }
}	
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Events (Only upload jpg files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <label>Event Name or Title></label>
                                            <input class="form-control" placeholder="Enter Name" name="eventname">
                                        </div>
										<div class="form-group">
                                            <label>Event Description</label>
                                            <textarea class="form-control" placeholder="Enter Description" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Date</label>
                                             <p class="help-block" style="font-weight:bold">Enter Event Date</p>
                                            <input type="date" id="edate" name="edate" value="2022-12-31" min="2022-01-01" max="2040-12-31">
                                        </div>
                                        <div class="form-group">
                                            <label>Event Imagen</label>
                                            <input type="file" name="upload"  id="upload" />
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 500 X 500"</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>
