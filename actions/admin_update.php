<?php

include './dbConnection.php';
$idadmin = "";
$firstname = "";
$lastname = "";
$email = "";
$phonenumber = "";
$address = "";
$city = "";
$is_active = "";

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

if (isset($_POST['is_active'])) {
    $is_active = $_POST['is_active'];
}

if (isset($_POST['id_admin'])) {
    $idadmin = $_POST['id_admin'];
}


//validation 
if ($firstname == '') {
    header("Location:../admin_manage.php?msg=First Name not Found ! ");
    die();
}
if ($lastname == '') {
    header("Location:../admin_manage.php?msg=Last Name not Found ! ");
    die();
}
if ($email == '') {
    header("Location:..admin_manage.php?msg=Email not Found ! ");
    die();
}
if ($phonenumber == '') {
    header("Location:../admin_manage.php?msg=Phone Number not Found ! ");
    die();
}
if ($address == '') {
    header("Location:../admin_manage.php?msg=Address not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../admin_manage.php?msg=City not Found ! ");
    die();
}

if ($is_active == '') {
    header("Location:../admin_manage.php?msg=Status not Found ! ");
    die();
}

if ($idadmin == '') {
    header("Location:../admin_manage.php?msg=User ID not Found ! ");
    die();
}



$Query = "Update admin set first_name = '".$firstname."' , last_name = '".$lastname."' ,e_mail='".$email."', phone_number= '".$phonenumber."', address='".$address."',  city = '".$city."' ,  is_active='".$is_active."' where id_admin= '".$idadmin."' ";



$result = $conn->query($Query);

if ($result === TRUE) {
    header("Location: ../admin_manage.php?msg=Admin update Success !");
    die();
} else {
    header("Location: ../admin_manage.php?msg=Admin update Error:" . mysqli_error($conn));
    die();
}