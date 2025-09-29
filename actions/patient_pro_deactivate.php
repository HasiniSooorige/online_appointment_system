<?php
session_start();
include './dbConnection.php';

$is_login = "";
$idpatient = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_patient'])){$idpatient = $_SESSION['id_patient'];}

if($is_login!=true){header("Location:patient_login.php?msg= Please Login Again!");die();}

$query = "update patient set is_active = '0' where id_patient = '".$idpatient."' ";
$result = $conn->query($query);

if($result===TRUE){
    header("Location: ./patient_logout.php");die();
}else{
    header("Location: ../patienr_profile.php?msg=Account Deactivation Failed.");die();
}