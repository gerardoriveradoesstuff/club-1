<?php session_start();


if(isset($_SESSION['uname']))
{
?>
<?php
$ab=$_POST['gname'];
echo $ab;
?>
<?php include "header1.php"; ?>
<?php include "menu/gmenu2.php"; ?>
<?php $asid=$_REQUEST['ids']; ?>
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
                    <h1 class="page-header">DOTCODE Gallery</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         DOTCODE Gallery Control panel
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "SELECT * FROM tbl_gallery WHERE status='process' AND aid='$ab' ORDER BY gid ASC LIMIT $start_from, 20";
$result = $conn->query($sql);
?>
                                <table class="table">
                                    
<thead>
                                        <tr>
                                            <th>Image Name</th>
                                                                                       

                                            <th>Images</th>
                                            <th colspan=2 width="18%">Action (Delete)</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>

<?php
while($row = $result->fetch_assoc()) {
?>

<tbody>
                                        <tr>
                                            <td><?php echo $row["gimages"]; ?></td>
                                            <td><a href='gchangeimage.php?key0=<?php echo  $row["gid"];?>&asid2=<?php echo $row["aid"]; ?>'><img src="gcatch/<?php echo $row["gimages"]; ?>"  width="100px"/></a></td>
                                           <td><a href='gallerydelete.php?key1=<?php echo $row["gid"]; ?> && key2=<?php echo $row["aid"]; ?>'>Delete</a> 
                                           
                                        </tr>
                                        
                                        </tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(aid) FROM tbl_gallery WHERE aid='$ab' AND status='process'";
$result = $conn->query($sql);
$row = mysqli_num_rows($result);
$total_records = $row;
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
echo "<a href='viewsgimages.php?page=$i&ids=$asid' class='navigation_item selected_navigation_item'>".$i."</a> ";
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

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

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