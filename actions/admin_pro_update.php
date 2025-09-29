<?php
session_start();
include './dbConnection.php';
$is_login = "";
$idadmin = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_admin'])){$idadmin = $_SESSION['id_admin'];}
if($is_login!=true){header("Location:admin_login.php?msg= Please Login Again!");die();}

$firstname = "";
$lastname = "";
$email = "";
$phonenumber = "";
$address = "";
$city = "";
$password = "";

if (isset($_POST['first_name'])) {
    $firstname = $_POST['first_name'];
}
if (isset($_POST['last_name'])) {
    $lastname = $_POST['last_name'];
}
if (isset($_POST['e_mail'])) {
    $email = $_POST['e_mail'];
}
if (isset($_POST['phone_number'])) {
    $phonenumber = $_POST['phone_number'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}


//validation 
if ($firstname == '') {
    header("Location:../admin_profile.php?msg=First Name not Found ! ");
    die();
}
if ($lastname == '') {
    header("Location:../admin_profile.php?msg=Last Name not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../admin_profile.php?msg=Email not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../admin_profile.php?msg=Phone Number not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../admin_profile.php?msg=Address not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../admin_profile.php?msg=City not Found ! ");
    die();
}

if ($password == '') {
    header("Location:../admin_profile.php?msg=password not Found ! ");
    die();
}



$updateProfile = "Update admin set first_name = '".$firstname."' , last_name = '".$lastname."' ,e_mail='".$email."', phone_number= '".$phonenumber."', address='".$address."',  city = '".$city."'  where id_admin= '".$idadmin."' ";

$result = $conn->query($updateProfile);
if($result===TRUE){
    header("Location:../admin_profile.php?msg=Update Success !"); 
           $_SESSION['name'] =$name;
           die();
} else {
    header("Location:../admin_profile.php?msg=Update Failed !");die(); 
}