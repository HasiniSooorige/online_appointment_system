<?php

include '../actions/dbConnection.php';

$name = "";
$type = "";
$city = "";
$district = "";


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
if ($name == '') {
    header("Location:../hospital_add.php?msg=Hospital Name not Found ! ");
    die();
}
if ($type == '') {
    header("Location:../hospital_add.php?msg=Hospital Type  not Found ! ");
    die();
}
if ($city == '') {
    header("Location:../hospital_add.php?msg=City not Found ! ");
    die();
}
if ($district == '') {
    header("Location:../hospital_add.php?msg=District not Found ! ");
    die();
}



$insertQuery = "INSERT INTO `hospital`
(
`name`,
`type`,
`city`,
`district`
)
VALUES
(
'" . $name . "',
'" . $type . "',
'" . $city . "',
'" . $district . "')";


$result = $conn->query($insertQuery);
if ($result === TRUE) {
    header("Location: ../hospital_add.php?msg= Save Successfully !");
    die();
} else {
    echo '<h2>Error ! ' . $conn->error . "<h2>";
    header("Location: ../hospital_add.php?msg=Error : " . $conn->error);
    die();
}
