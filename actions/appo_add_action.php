<?php

include '../actions/dbConnection.php';

$pname = "";
$age = "";
$dname = "";
$position = "";
$date = "";
$time = "";

if (isset($_POST['pname'])) {
    $pname = $_POST['pname'];
}
if (isset($_POST['age'])) {
    $age = $_POST['age'];
}
if (isset($_POST['dname'])) {
    $dname = $_POST['dname'];
}
if (isset($_POST['position'])) {
    $position = $_POST['position'];
}
if (isset($_POST['date'])) {
    $date = $_POST['date'];
}
if (isset($_POST['time'])) {
    $time = $_POST['time'];
}

//validation 
if ($pname == '') {
    header("Location:../appo_add.php?msg=Patient Name not Found ! ");
    die();
}
if ($age == '') {
    header("Location:../appo_add.php?msg=Patient age  not Found ! ");
    die();
}
if ($dname == '') {
    header("Location:../appo_add.php?msg=Doctor Name not Found ! ");
    die();
}
if ($position == '') {
    header("Location:../appo_add.php?msg=Position not Found ! ");
    die();
}
if ($date == '') {
    header("Location:../appo_add.php?msg=Date not Found ! ");
    die();
}
if ($time == '') {
    header("Location:../appo_add.php?msg=Time not Found ! ");
    die();
}



$insertQuery = "INSERT INTO `appo`
(
`pname`,
`age`,
`dname`,
`position`,
`date`,
`time`
)
VALUES
(
'" . $pname . "',
'" . $age . "',
'" . $dname . "',
'" . $position . "',
'" . $date . "',
'" . $time . "')";


$result = $conn->query($insertQuery);
if ($result === TRUE) {
    header("Location: ../appo_add.php?msg= Save Successfully !");
    die();
} else {
    echo '<h2>Error ! ' . $conn->error . "<h2>";
    header("Location: ../appo_add.php?msg=Error : " . $conn->error);
    die();
}
