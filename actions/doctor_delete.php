<?php
include './dbConnection.php';

$deleteUserId = "";
if(isset($_GET['id'])){$deleteUserId=$_GET['id']; }

//validate

if ($deleteUserId == '') {
    header("Location:../doctor_manage?msg=Register ID not Found ! ");
    die();
}

//delete

$delQuery = "delete from doctor where id_doctor = ' ".$deleteUserId."'";
$result = $conn->query($delQuery);

if($result===TRUE){  
    header("Location: ../doctor_manage.php?msg=Doctor Delete Success !");die();
}else{
    header("Location: ../doctor_manage.php?msg=Doctor Delete Error:".mysqli_error($conn));die();
}

