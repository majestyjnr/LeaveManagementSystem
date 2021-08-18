<?php
session_start();
if(session_destroy()){
header("location: ../auth/admin/login.php");
}