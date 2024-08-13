<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-instagram fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php 
									
include "connect.php"; 
$sql = "SELECT COUNT(*) AS total FROM tbl_gallery WHERE status='active'";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$total=$row['total'];
    }
}
echo $total;
 ?></div>
                                    <div>Photo Gallery</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewallgallery.php">
                            <div class="panel-footer">
                                <span class="pull-left">View all Photos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-photo-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php 
									
include "connect.php";
 $sql = "SELECT COUNT(*) AS total FROM tbl_eventos WHERE status='active'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$total=$row['total'];
    }
}
echo $total;
 ?></div>
                                    <div>All Events</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewallevents.php">
                            <div class="panel-footer">
                                <span class="pull-left">View all Events</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                           <!-- /.row -->
				
				<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-photo-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php 
									
include "connect.php";
 $sql = "SELECT COUNT(*) AS total FROM tbl_mesas WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$total=$row['total'];
    }
}
echo $total;
 ?></div>
                                    <div>Table Reservation</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/viewalltables.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Reservations</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
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
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>

