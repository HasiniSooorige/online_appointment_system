<?php
include './dbConnection.php';

$deleteUserId = "";
if(isset($_GET['id'])){$deleteUserId=$_GET['id']; }

//validate

if ($deleteUserId == '') {
    header("Location:../appo_manage.php?msg=Appointment ID not Found ! ");
    die();
}

//delete

$delQuery = "delete from appo where id_appo = ' ".$deleteUserId."'";
$result = $conn->query($delQuery);

if($result===TRUE){  
    header("Location: ../appo_manage.php?msg=Appointment Delete Success !");die();
}else{
    header("Location: ../appo_manage.php?msg=Appointment Delete Error:".mysqli_error($conn));die();
}

