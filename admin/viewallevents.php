<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header1.php"; ?>
<?php include "menu/amenu2.php"; ?>
<style>.navigation_item{
		padding: 0px 5px;
		background: #fff;
		text-decoration: none;
		
		color: #e3e3e3 !important;
		font-size: 12px;
		border: 2px solid #e3e3e3;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	.navigation_item:hover,.selected_navigation_item{
		border: 2px solid #2A6496;
		border-radius: 2px;
		color: #2A6496 !important;
		background: #fff;
	}
	</style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Events </h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Gallery Control panel
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "SELECT * FROM tbl_eventos WHERE status='active' ORDER BY id DESC LIMIT $start_from, 20";
$result = $conn->query($sql);
?>
                                <table class="table">
                                    
<thead>
                                        <tr>
											<th width="20%">Event Name</th>
                                            <th>Images</th>
											<th>Event Date</th>
											<th colspan=2 width="18%">Action (Delete & Edit)</th>
											
											
                                            
                                        </tr>
                                    </thead>

<?php
while($row = $result->fetch_assoc()){
?>

										<tbody>
                                        <tr>
                                            <td> <?php echo $row["edesc"]; ?> </td>
                                            <td>
			<a href='changeimageevents.php?key0=<?php echo $row["id"];?> &key1=<?php echo $row["edate"]; ?> &key2=<?php echo $row["edesc"]; ?>&key3=<?php echo $row["image"]; ?>'><img src="ecatch/<?php echo $row["image"]; ?>"  width="100px"/></a></td>
											<td><?php echo $row["edate"]; ?></td>
                                           <td><a href='eventdelete.php?key1=<?php echo $row["id"]; ?>'>Delete</a> | 
			<a href='changeimageevents.php?key0=<?php echo $row["id"];?> &key1=<?php echo $row["edate"]; ?> &key2=<?php echo $row["edesc"]; ?>&key3=<?php echo $row["image"]; ?> '>Edit</a></td>
										   
                                        </tr>
										
										</tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(*) FROM tbl_eventos WHERE status='active'";
$result = $conn->query($sql);
$row = mysqli_num_rows($result);
//$row = $result->fetch_assoc();
$total_records = $row;
$total_pages = ceil($total_records / 20); 
for ($i=1; $i<=$total_pages; $i++) {
			echo "<ul class='pagination text-center'>";
				echo "<b>Page</b>";
    			echo "<li class='page-item'>";
      			echo "<a class='page-link' href='viewallevents.php?page=".$i."' tabindex=$i>".$i."</a>";
    			echo "</li>";
  			echo "</ul>";
//echo "<a href='viewallalbums.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>


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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>
