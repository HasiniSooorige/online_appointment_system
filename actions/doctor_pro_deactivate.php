<?php
session_start();
include './dbConnection.php';

$is_login = "";
$iddoctor = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_doctor'])){$iddoctor = $_SESSION['id_doctor'];}

if($is_login!=true){header("Location:doctor_login.php?msg= Please Login Again!");die();}

$query = "update doctor set is_active = '0' where id_doctor = '".$iddoctor."' ";
$result = $conn->query($query);

if($result===TRUE){
    header("Location: ./doctor_logout.php");die();
}else{
    header("Location: ../doctor_profile.php?msg=Account Deactivation Failed.");die();
}