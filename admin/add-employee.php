
<?php
include "../db/connection.php";
session_start();
$name = $_SESSION['adminfirstname'];
$email = $_SESSION['adminemail'];



if(isset($_POST['password'])&& isset($_POST['confirmPassword'])) {

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $phone = $_POST['phone'];
    
if($password != $confirmPassword){
    
    @$passwordmismatch = 'mismatch';
    
} else{

    
    $query="INSERT INTO employees (firstname,lastname,username,email,password,phone) values ('$firstname','$lastname','$username','$email','$password','$phone')";
    $query_run = mysqli_query($link,$query);

    if ($query_run) {
        @$success = 'success';
    }else{
        @$error = 'error';
    }

    
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
    <title>Add Employee - Majesty Corporation LMS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/izitoast/css/iziToast.min.css">

</head>

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
                            <a href="admins.php"><i class="fa fa-users"></i> <span></span>Admins</a>
                        </li>
                        <li class="active">
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
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Employee</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="firstname"type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" name="lastname" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" name="username" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email"type="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="password" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" name="confirmPassword" type="password" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" name="phone" type="text" required> 
                                </div>
                            </div>
                        </div>
                  
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn" type="submit">Create Employee</button>
                        </div>
                    </form>
                </div>
            </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/select2.min.js"></script>
    <script src="../assets/js/app.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/izitoast/js/iziToast.min.js"></script>
    <?php
        if(@$passwordmismatch == 'mismatch'){
            echo "<script>
            iziToast.error({
                title: 'Error!',
                message: 'The passwords do not match',
                position: 'bottomRight'
            });
            </script>";
        }elseif(@$success == 'success'){
            echo "<script>
            iziToast.success({
                title: 'Success!',
                message: 'Employee registered successfully',
                position: 'bottomRight'
              });
             </script>";
        } elseif(@$error == 'error'){
            echo "<script>
            iziToast.error({
                title: 'Error!',
                message: 'Error registering employee',
                position: 'bottomRight'
              });
             </script>";
        }
    ?>
    </body>
</html>
