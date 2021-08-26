<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <title>Request Leave | Majesty Corporation LMS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<?php
include "../db/connection.php";
session_start();
$name = $_SESSION['firstname'];
$email = $_SESSION['email'];

if(isset($_POST['leavetype']) && isset($_POST['duration']) && isset($_POST['startdate']) && isset($_POST['enddate']) && isset($_POST['reason'])){
    
    $leavetype =  $_POST['leavetype'];
    $duration = $_POST['duration'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $reason = $_POST['reason'];
       
    $query="INSERT INTO leaves (employeeName,employeeEmail,leaveType,startDate,endDate,duration,reason,status) values ('$name','$email','$leavetype','$startdate','$enddate','$duration','$reason', 'Pending')";
    
    $query_run = mysqli_query($link,$query);

    if ($query_run) {
        
        echo "<script>
    
        alert('Leave Request Submitted Successfully');

        window.location.href='dashboard.php';

        </script>";

    }else{
        echo "<script>
    
        alert('Error submitting data');

        window.location.href='request-leave.php';

        </script>";
    }

}

?>
<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="dashboard.php" class="logo">
					<img src="../assets/img/logo.png" width="35" height="35"  alt=""><span>LMS</span>
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
						<a class="dropdown-item" href="profile.php">My Profile</a>
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
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="active">
                            <a href="request-leave.php"><i class="fa fa-user-md"></i> <span>Request Leave</span></a>
                        </li>
                        <li>
                            <a href="leaves.php"><i class="fa fa-wheelchair"></i> <span>All Leaves</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="page-wrapper">
            <div class="content">
                <div class="row">
                     <div class="col-sm-8 col-6">
                        <h4 class="page-title">Leave Request</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST">
                            <div class="row">
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Leave Type <span class="text-danger">*</span></label>
                                        <select class="select" name="leavetype">
                                            <option value="notspecified">Select Leave Type</option>
                                            <option value="Casual Leave">Casual Leave</option>
                                            <option value="Medical leave">Medical Leave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Number of days <span class="text-danger">*</span></label>
                                        <input class="form-control" type="number" name="duration">
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="startdate">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="enddate">
										</div>
									</div>
								</div>
							</div>
                            <div class="form-group">
                                <label>Leave Reason <span class="text-danger">*</span></label>
                                <textarea rows="4" cols="5" class="form-control" name="reason"></textarea>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Submit Leave Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>


<!-- add-leave24:07-->
</html>
