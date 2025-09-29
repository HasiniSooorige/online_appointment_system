<?php
session_start();
include './dbConnection.php';
$is_login = "";
$iddoctor = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_doctor'])){$iddoctor = $_SESSION['id_doctor'];}
if($is_login!=true){header("Location:doctor_login.php?msg= Please Login Again!");die();}

$fullname = "";
$gender = "";
$email = "";
$phonenumber = "";
$address = "";
$district="";
$city = "";
$hospital = "";
$position = "";
$edu_quali = "";
$pro_quali = "";
$work_expe = "";

if (isset($_POST['full_name'])) {
    $fullname = $_POST['full_name'];
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
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
if (isset($_POST['district'])) {
    $district = $_POST['district'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['hospital'])) {
    $hospital = $_POST['hospital'];
}
if (isset($_POST['position'])) {
    $position = $_POST['position'];
}
if (isset($_POST['edu_quali'])) {
    $edu_quali = $_POST['edu_quali'];
}
if (isset($_POST['pro_quali'])) {
    $pro_quali = $_POST['pro_quali'];
}
if (isset($_POST['work_expe'])) {
    $work_expe = $_POST['work_expe'];
}



//validation 
if ($fullname == '') {
    header("Location:../doctor_manage.php?msg=Full Name not Found ! ");
    die();
}
if ($gender == '') {
    header("Location:../doctor_manage.php?msg=Gender not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../doctor_manage.php?msg=E-mail not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../doctor_manage.php?msg=Phone Number not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../doctor_manage.php?msg=Address not Found ! ");
    die();
}
if ($district == '') {
    header("Location:../doctor_manage.php?msg=District not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../doctor_manage.php?msg=City not Found ! ");
    die();
}
if ($hospital == '') {
    header("Location:../doctor_manage.php?msg=Hospital not Found ! ");
    die();
}
if ($position == '') {
    header("Location:../doctor_manage.php?msg=Position not Found ! ");
    die();
}
if ($edu_quali == '') {
    header("Location:../doctor_manage.php?msg=Educational Qualification not Found ! ");
    die();
}
if ($pro_quali == '') {
    header("Location:../doctor_manage.php?msg=Professional Qualification not Found ! ");
    die();
}
if ($work_expe == '') {
    header("Location:../doctor_manage.php?msg=Work Experience not Found ! ");
    die();
}



$updateProfile = "Update doctor set "
        . "full_name = '".$fullname."' , "
        . "gender = '".$gender."' ,"
        . "e_mail='".$email."', "
        . "phone_number= '".$phonenumber."', "
        . "address='".$address."',  "
        . "district = '".$district."' ,  "
        . "city = '".$city."' ,  "
        . "hospital = '".$hospital."' ,  "
        . "position = '".$position."' ,  "
        . "edu_quali = '".$edu_quali."' ,  "
        . "pro_quali = '".$pro_quali."' ,  "
        . "work_expe = '".$work_expe."' ,  "
        . "where id_doctor= '".$iddoctor."' ";

$result = $conn->query($updateProfile);
if($result===TRUE){
    header("Location:../doctor_profile.php?msg=Update Success !"); 
           $_SESSION['name'] =$name;
           die();
} else {
    header("Location:../doctor_profile.php?msg=Update Failed !");die(); 
}