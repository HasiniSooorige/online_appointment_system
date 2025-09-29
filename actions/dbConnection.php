<?php

$userName = "root";
$passWord ="1234";
$database = "opd_system";
$host = "localhost";
$port = "3307";

$conn = new mysqli($host, $userName, $passWord, $database, $port);

if($conn->errno){
    echo "Error:".$conn->connect_error;
}else{
//    echo 'success';
}