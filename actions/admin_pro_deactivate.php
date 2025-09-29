<?php
session_start();
include './dbConnection.php';

$is_login = "";
$idadmin = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_admin'])){$idadmin = $_SESSION['id_admin'];}

if($is_login!=true){header("Location:admin_login.php?msg= Please Login Again!");die();}

$query = "update admin set is_active = '0' where id_admin = '".$idadmin."' ";
$result = $conn->query($query);

if($result===TRUE){
    header("Location: ./admin_logout.php");die();
}else{
    header("Location: ../admin_profile.php?msg=Account Deactivation Failed.");die();
}