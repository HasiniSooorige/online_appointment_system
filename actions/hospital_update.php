<?php

include './dbConnection.php';
$idhospital = "";
$name = "";
$type = "";
$city = "";
$district = "";

if (isset($_POST['id_hospital'])) {
    $idhospital = $_POST['id_hospital'];
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['type'])) {
    $type = $_POST['type'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['district'])) {
    $district = $_POST['district'];
}


//validation 
if ($idhospital == '') {
    header("Location:../hospital_manage.php?msg=Hospital ID not Found ! ");
    die();
}
if ($name == '') {
    header("Location:../hospital_manage.php?msg=Hospital Name not Found ! ");
    die();
}
if ($type == '') {
    header("Location:../hospital_manage.php?msg=Hospital Type  not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../hospital_manage.php?msg=City not Found ! ");
    die();
}
if ($district == '') {
    header("Location:../hospital_manage.php?msg=District not Found ! ");
    die();
}


$Query = "Update hospital set name = '".$name."' , type = '".$type."' ,city='".$city."', district= '".$district."' where id_hospital= '".$idhospital."' ";



$result = $conn->query($Query);

if ($result === TRUE) {
    header("Location: ../hospital_manage.php?msg=Hospital update Success !");
    die();
} else {
    header("Location: ../hospital_manage.php?msg=Hospital update Error:" . mysqli_error($conn));
    die();
}