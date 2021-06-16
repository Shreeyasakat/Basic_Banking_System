<?php
$server  = "localhost:3360";
$username = "root";
$password = "";
$db="tsf";

$mysqli = mysqli_connect($server,$username,$password,$db);
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 

 
$mysqli->close();  
?>