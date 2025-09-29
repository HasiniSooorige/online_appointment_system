<?php
session_start();
include './dbConnection.php';
$is_login = "";
$idpatient = "";
if(isset($_SESSION['is_login'])){$is_login = $_SESSION['is_login'];}
if(isset($_SESSION['id_patient'])){$idpatient = $_SESSION['id_patient'];}
if($is_login!=true){header("Location:patient_login.php?msg= Please Login Again!");die();}

$fullname = "";
$birthday = "";
$age = "";
$gender = "";
$phonenumber = "";
$email = "";
$address = "";
$city = "";
$reg_date = "";
$blood_grp = "";
$chronic = "";
$allergy = "";

if (isset($_POST['full_name'])) {
    $fullname = $_POST['full_name'];
}
if (isset($_POST['birthday'])) {
    $birthday = $_POST['birthday'];
}
if (isset($_POST['age'])) {
    $age = $_POST['age'];
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}
if (isset($_POST['phone_number'])) {
    $phonenumber = $_POST['phone_number'];
}
if (isset($_POST['e_mail'])) {
    $email = $_POST['e_mail'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['reg_date'])) {
    $reg_date = $_POST['reg_date'];
}
if (isset($_POST['blood_grp'])) {
    $blood_grp = $_POST['blood_grp'];
}
if (isset($_POST['chronic'])) {
    $chronic = $_POST['chronic'];
}
if (isset($_POST['allergy'])) {
    $allergy = $_POST['allergy'];
}

//validation 
if ($fullname == '') {
    header("Location:../patient_profile.php?msg=Full Name not Found ! ");
    die();
}
if ($birthday == '') {
    header("Location:..patient_profile.php?msg=Birthday not Found ! ");
    die();
}
if ($age == '') {
    header("Location:../patient_profile.php?msg=Age not Found ! ");
    die();
}
if ($gender == '') {
    header("Location:../patient_profile.php?msg=Gender not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../patient_profile.php?msg=Phone Number not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../patient_profile.php?msg=E-mail not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../patient_profile.php?msg=Address not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../patient_profile.php?msg=City not Found ! ");
    die();
}
if ($reg_date == '') {
    header("Location:../patient_profile.php?msg=Register Date not Found ! ");
    die();
}
if ($blood_grp == '') {
    header("Location:../patient_profile.php?msg=Blood Group not Found ! ");
    die();
}
if ($chronic == '') {
    header("Location:../patient_profile.php?msg=Chronic illness not Found ! ");
    die();
}
if ($allergy == '') {
    header("Location:../patient_profile.php?msg=Allergy not Found ! ");
    die();
}


$updateProfile = "Update patient set "
        . "full_name = '".$fullname."' , "
        . "birthday = '".$birthday."' , "
        . "age = '".$age."' , "
        . "gender = '".$gender."' ,"
        . "phone_number= '".$phonenumber."', "
        . "e_mail='".$email."', "
        . "address='".$address."',  "
        . "city = '".$city."' ,  "
        . "reg_date = '".$reg_date."' ,  "
        . "blood_grp = '".$blood_grp."' ,  "
        . "chronic = '".$chronic."' ,  "
        . "allergy = '".$allergy."' ,  "
        . "where id_patient= '".$idpatient."' ";


$result = $conn->query($updateProfile);
if($result===TRUE){
    header("Location:../patient_profile.php?msg=Update Success !"); 
           $_SESSION['name'] =$name;
           die();
} else {
    header("Location:../patient_profile.php?msg=Update Failed !");die(); 
}