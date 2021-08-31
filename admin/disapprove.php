<?php
include "../db/connection.php";
session_start();

$id = $_GET['id'];

$query = "UPDATE leaves SET status='Declined' WHERE id='$id'";

// Execute query
$query_run = mysqli_query($link, $query);

if($query_run){
    header("location: leaves.php?s=".urlencode('0')."");
}

?>