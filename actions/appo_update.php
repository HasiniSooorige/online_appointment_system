<?php

include './dbConnection.php';
$idappo = "";
$pname = "";
$age = "";
$dname = "";
$position = "";
$date = "";
$time = "";

if (isset($_POST['id_appo'])) {
    $idappo = $_POST['id_appo'];
}
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
if ($idappo == '') {
    header("Location:../appo_manage.php?msg=Appointment ID not Found ! ");
    die();
}
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



$Query = "Update appo set pname = '".$pname."' , age = '".$age."' ,dname='".$dname."', position= '".$position."', date= '".$date."', time= '".$time."' where id_appo= '".$idappo."' ";



$result = $conn->query($Query);

if ($result === TRUE) {
    header("Location: ../appo_manage.php?msg=Appointment update Success !");
    die();
} else {
    header("Location: ../appo_manage.php?msg=Appointment update Error:" . mysqli_error($conn));
    die();
}