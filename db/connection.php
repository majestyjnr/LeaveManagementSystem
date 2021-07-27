<?php

$link = mysqli_connect('localhost','root','');
$database = 'lms';

$link or die('sorry...Could not connect.');


if(!$link || !mysqli_select_db($link, $database)) {
    die('Could not Connect.');
}else{
     //echo '<b>Connected</b><br><br>';
}

?>