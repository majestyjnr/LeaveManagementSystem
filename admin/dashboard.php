<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <title>Dashboard | Majesty Corporation LMS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    
</head>
<?php 
include "../db/connection.php";
session_start();
$name = $_SESSION['adminfirstname'];
$email = $_SESSION['adminemail'];
?>


<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="dashboard.php" class="logo">
					<img src="../assets/img/logo.png" width="35" height="35"  alt=""> <span>LMS</span>
				</a>
			</div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
             <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="../assets/img/account.png" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><?php echo $email ?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">Edit Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
           
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                    <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="admins.php"><i class="fa fa-users"></i> <span></span>Admins</a>
                        </li>
                        <li>
                            <a href="employees.php"><i class="fa fa-users"></i> <span>Employees</span></a>
                        </li>
                        <li>
                            <a href="leaves.php"><i class="fa fa-user-md"></i> <span>Leaves</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                     <div class="col-sm-8 col-6">
                        <h4 class="page-title">Welcome <span style="color: blue"><?php echo $name ?></span>!</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-table"></i></span>
                            <div class="dash-widget-info text-right">
                                <?php 
                                // GET Approved REQUESTS
                                $query = "SELECT status FROM leaves WHERE `status` = 'Pending'";

                                // Execute query
                                $query_run = mysqli_query($link, $query);

                                $declinedTotal = mysqli_num_rows($query_run);

                                ?>
                                <h3><?php echo $declinedTotal ?></h3>
                                <span class="widget-title2">Pending Leaves <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-table" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                                <?php 
                                // GET Approved REQUESTS
                                $query = "SELECT status FROM leaves WHERE `status` = 'Approved'";

                                // Execute query
                                $query_run = mysqli_query($link, $query);

                                $ApprovedTotal = mysqli_num_rows($query_run);

                                ?>
                                <h3><?php echo $ApprovedTotal ?></h3>
								
								<span class="widget-title1">Approved Leaves <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-table"></i></span>
                            <div class="dash-widget-info text-right">
                                <?php 
                                // GET Approved REQUESTS
                                $query = "SELECT status FROM leaves WHERE `status` = 'Declined'";

                                // Execute query
                                $query_run = mysqli_query($link, $query);

                                $declinedTotal = mysqli_num_rows($query_run);

                                ?>
                                <h3><?php echo $declinedTotal ?></h3>
                                <span class="widget-title4">Declined Leaves <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-table" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <?php 
                                // GET All Leaves
                                $query = "SELECT * FROM leaves";

                                // Execute query
                                $query_run = mysqli_query($link, $query);

                                $AllLeaves = mysqli_num_rows($query_run);

                                ?>
                                <h3><?php echo $AllLeaves ?></h3>
                                <span class="widget-title3">All Leave Requests <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <center>
                <img src="../assets/img/mj.jpg" alt="" width="80%">
                </center>
            </div>
        </div>
    	
	</div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/Chart.bundle.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/app.js"></script>

</body>



</html>