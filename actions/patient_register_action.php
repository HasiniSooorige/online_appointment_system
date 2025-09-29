<?php

include '../actions/dbConnection.php';

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
$username = "";
$password = "";
$reenterpassword = "";

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
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['re_enter_password'])) {
    $reenterpassword = $_POST['re_enter_password'];
}

//validation 
if ($fullname == '') {
    header("Location:../patient_register.php?msg=Full Name not Found ! ");
    die();
}
if ($birthday == '') {
    header("Location:../patient_register.php?msg=Birthday not Found ! ");
    die();
}
if ($age == '') {
    header("Location:../patient_register.php?msg=Age not Found ! ");
    die();
}
if ($gender == '') {
    header("Location:../patient_register.php?msg=Gender not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../patient_register.php?msg=Phone Number not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../patient_register.php?msg=E-mail not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../patient_register.php?msg=Address not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../patient_register.php?msg=City not Found ! ");
    die();
}
if ($reg_date == '') {
    header("Location:../patient_register.php?msg=Register Date not Found ! ");
    die();
}
if ($blood_grp == '') {
    header("Location:../patient_register.php?msg=Blood Group not Found ! ");
    die();
}
if ($chronic == '') {
    header("Location:../patient_register.php?msg=Chronic illness not Found ! ");
    die();
}
if ($allergy == '') {
    header("Location:../patient_register.php?msg=Allergy not Found ! ");
    die();
}
if ($username == '') {
    header("Location:../patient_register.php?msg=User Name not Found ! ");
    die();
}
if ($password == '') {
    header("Location:../patient_register.php?msg=Password not Found ! ");
    die();
}
if ($reenterpassword == '') {
    header("Location:../patient_register.php?msg=Re-enter password not Found ! ");
    die();
}
if ($password != $reenterpassword) {
    header("Location:../patient_register.php?msg=Password Re-enter Incorrect ! ");
    die();
}


$insertQuery = "INSERT INTO `patient`
(
`full_name`,
`birthday`,
`age`,
`gender`,
`phone_number`,
`e_mail`,
`address`,
`city`,
`reg_date`,
`blood_grp`,
`chronic`,
`allergy`,
`username`,
`password`,
`re_enter_password`,
`user_type`,
`is_active`)
VALUES
(
'" . $fullname . "',
'" . $birthday . "',
'" . $age . "',
'" . $gender . "',
'" . $phonenumber . "',
'" . $email . "',
'" . $address . "',
'" . $city . "',
'" . $reg_date . "',
'" . $blood_grp . "',
'" . $chronic . "',
'" . $allergy . "',
'" . $username . "',
'" . $password . "',
'" . $reenterpassword . "',
'2',
'1')";


$result = $conn->query($insertQuery);
if ($result === TRUE) {
    header("Location: ../patient_login.php?msg= Registered Successfully !");
    die();
} else {
    echo '<h2>Error ! ' . $conn->error . "<h2>";
    header("Location: ../patient_register.php?msg=Error : " . $conn->error);
    die();
}
