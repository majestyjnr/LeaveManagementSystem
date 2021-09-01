<?php
include "../db/connection.php";
session_start();

@$id = $_GET['id'];

$query = "DELETE from admins WHERE id='$id'";

// Execute query
$query_run = mysqli_query($link, $query);

if($query_run){
    header("location: admins.php?s=".urlencode('0')."");
}

?>