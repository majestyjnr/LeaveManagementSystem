<?php
include "../db/connection.php";
session_start();

@$id = $_GET['id'];

$query = "DELETE from employees WHERE id='$id'";

// Execute query
$query_run = mysqli_query($link, $query);

if($query_run){
    header("location: employees.php?s=".urlencode('0')."");
}

?>