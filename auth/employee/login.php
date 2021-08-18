<?php
include "../../db/connection.php";
session_start();


if(isset($_POST['email']) && isset($_POST['password'])){
    $username =  $_POST['email'];
    $password = $_POST['password'];
       
        //Query The Database
        $query = "SELECT id FROM employees WHERE `email` = '$email' and `password` = '$password'";
        $query_run = mysqli_query($link, $query);
        $query_num_rows = mysqli_num_rows($query_run);

        if($query_num_rows == 1){
            while($row = mysqli_fetch_assoc($query_run)){
                $username = $row['username'];
                $firstname = $row['firstname'];
                $email = $row['e-mail'];

                $_SESSION['username'] = $username;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['email'] = $email;
            }

            header('location: ../../employee/emp-dashboard.php');

        }else{
            
            echo "<script>
    
            alert('Invalid Credentials');
        
            window.location.href='../../auth/employee_login.php';
        
            </script>";
        }


    }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Employee | Majesty Corporation LMS</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action=" " method="POST" class="form-signin">
                        <div class="account-logo">
                            <a href="../../index.php"><img src="../../assets/img/mj.jpg" alt=""></a>
                            <h3 class="mt-3">Employee Login</h3>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" autofocus="" name="email"class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group text-right">
                            <a href="employee_forgot-password.php">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="../../index.php">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>

</html>