<?php

include '../actions/dbConnection.php';

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
$username = "";
$password = "";
$reenterpassword = "";

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
    header("Location:../doctor_register.php?msg=Full Name not Found ! ");
    die();
}
if ($gender == '') {
    header("Location:../doctor_register.php?msg=Gender not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../doctor_register.php?msg=E-mail not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../doctor_register.php?msg=Phone Number not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../doctor_register.php?msg=Address not Found ! ");
    die();
}
if ($district == '') {
    header("Location:../doctor_register.php?msg=District not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../doctor_register.php?msg=City not Found ! ");
    die();
}
if ($hospital == '') {
    header("Location:../doctor_register.php?msg=Hospital not Found ! ");
    die();
}
if ($position == '') {
    header("Location:../doctor_register.php?msg=Position not Found ! ");
    die();
}
if ($edu_quali == '') {
    header("Location:../doctor_register.php?msg=Educational Qualification not Found ! ");
    die();
}
if ($pro_quali == '') {
    header("Location:../doctor_register.php?msg=Professional Qualification not Found ! ");
    die();
}
if ($work_expe == '') {
    header("Location:../doctor_register.php?msg=Work Experience not Found ! ");
    die();
}
if ($username == '') {
    header("Location:../doctor_register.php?msg=User Name not Found ! ");
    die();
}
if ($password == '') {
    header("Location:../doctor_register.php?msg=Password not Found ! ");
    die();
}
if ($reenterpassword == '') {
    header("Location:../doctor_register.php?msg=Re-enter password not Found ! ");
    die();
}
if ($password != $reenterpassword) {
    header("Location:../doctor_register.php?msg=Password Re-enter Incorrect ! ");
    die();
}


$insertQuery = "INSERT INTO `doctor`
(
`full_name`,
`gender`,
`e_mail`,
`phone_number`,
`address`,
`district`,
`city`,
`hospital`,
`position`,
`edu_quali`,
`pro_quali`,
`work_expe`,
`username`,
`password`,
`re_enter_password`,
`user_type`,
`is_active`)
VALUES
(
'" . $fullname . "',
'" . $gender . "',
'" . $email . "',
'" . $phonenumber . "',
'" . $address . "',
'" . $district . "',
'" . $city . "',
'" . $hospital . "',
'" . $position . "',
'" . $edu_quali . "',
'" . $pro_quali . "',
'" . $work_expe . "',
'" . $username . "',
'" . $password . "',
'" . $reenterpassword . "',
'3',
'1')";


$result = $conn->query($insertQuery);
if ($result === TRUE) {
    header("Location: ../doctor_login.php?msg= Registered Successfully !");
    die();
} else {
    echo '<h2>Error ! ' . $conn->error . "<h2>";
    header("Location: ../doctor_register.php?msg=Error : " . $conn->error);
    die();
}
