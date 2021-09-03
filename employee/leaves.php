<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.png">
    <title>My Leaves | Majesty Corporation LMS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/izitoast/css/iziToast.min.css">
</head>
<?php 
include "../db/connection.php";
session_start();
@$msg = $_GET['s'];
$name = $_SESSION['firstname'];
$email = $_SESSION['email'];

?>
<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="dashborad.php" class="logo">
					<img src="../assets/img/logo.png" width="35" height="35" alt=""> <span>LMS</span>
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
						<li>
                            <a href="request-leave.php"><i class="fa fa-user-md"></i> <span>Request Leave</span></a>
                        </li>
                        <li class="active">
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
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="request-leave.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Leave</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Leave Type</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>No of Days</th>
                                        <th>Reason</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
// Specify the query to execute
$query = "SELECT * FROM leaves WHERE `employeeEmail` ='$email'";

// Execute query
$query_run = mysqli_query($link, $query);

// Loop through each records 
while($row = mysqli_fetch_array($query_run)){

    $id = $row['id'];
    $employeeName = $row['employeeName'];
    $employeeEmail = $row['employeeEmail'];
    $leaveType = $row['leaveType'];
    $startDate = $row['startDate'];
    $endDate = $row['endDate'];
    $duration = $row['duration'];
    $reason = $row['reason'];
    $status = $row['status'];

?>
                                    <tr>
                                        <td><?php echo $leaveType ?></td>
                                        <td><?php echo $startDate ?></td>
                                        <td><?php echo $endDate ?></td>
                                        <td><?php echo $duration ?> days</td>
                                        <td><?php echo $reason ?></td>
                                        <td class="text-center">
                                            <?php
                                                if($status == 'Pending'){
                                            ?>
                                                <a class="custom-badge status-blue" >
                                                    Pending
                                                </a>
                                            <?php

                                                } else if($status == 'Declined'){

                                            ?>
                                                <a class="custom-badge status-red" >
                                                    Declined
                                                </a>
                                            <?php

                                                } else if($status == 'Approved'){
                                            ?>
                                                    <a class="custom-badge status-green" >
                                                        Approved
                                                    </a>
                                            <?php

                                                }
                                            ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="delete.php?id=<?php echo $id ?>" title="Decline"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
<?php
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div id="delete_approve" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Leave Request?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../../js/data-table.js"></script>
    <script src="../assets/izitoast/js/iziToast.min.js"></script>
    <?php
        if(@$msg == '0'){
            echo "<script>
            iziToast.success({
                title: 'Success!',
                message: 'The leave has been deleted successfully',
                position: 'bottomRight'
              });
            </script>";
        }
    ?>
</body>


<!-- leaves23:23-->
</html>