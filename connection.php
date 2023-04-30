<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "travel-2";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

?>