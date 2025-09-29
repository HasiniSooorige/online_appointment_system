<?php

include './dbConnection.php';

$firstname = "";
$lastname = "";
$email = "";
$phonenumber = "";
$address = "";
$city = "";
$username = "";
$password = "";
$reenterpassword = "";

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
if ($firstname == '') {
    header("Location:../admin_register.php?msg=First Name not Found ! ");
    die();
}
if ($lastname == '') {
    header("Location:../admin_register.php?msg=Last Name not Found ! ");
    die();
}
if ($email == '') {
    header("Location:../admin_register.php?msg=Email not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../admin_register.php?msg=Phone Number not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../admin_register.php?msg=Address not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../admin_register.php?msg=City not Found ! ");
    die();
}
if ($username == '') {
    header("Location:../admin_register.php?msg=User Name not Found ! ");
    die();
}
if ($password == '') {
    header("Location:../admin_register.php?msg=password not Found ! ");
    die();
}
if ($reenterpassword == '') {
    header("Location:../admin_register.php?msg=Re-enter password not Found ! ");
    die();
}
if ($password != $reenterpassword) {
    header("Location:../admin_register.php?msg=Password Re-enter Incorrect ! ");
    die();
}


$insertQuery = "INSERT INTO `admin`
(
`first_name`,
`last_name`,
`e_mail`,
`phone_number`,
`address`,
`city`,
`username`,
`password`,
`re_enter_password`,
`user_type`,
`is_active`)
VALUES
(
'" . $firstname . "',
'" . $lastname . "',
'" . $email . "',
'" . $phonenumber . "',
'" . $address . "',
'" . $city . "',
'" . $username . "',
'" . $password . "',
'" . $reenterpassword . "',
    '1',
'1')";


$result = $conn->query($insertQuery);
if ($result === TRUE) {
    header("Location: ../admin_login.php?msg= Registered Successfully !");
    die();
} else {
    echo '<h2>Error ! ' . $conn->error . "<h2>";
    header("Location: ../admin_register.php?msg=Error : " . $conn->error);
    die();
}
