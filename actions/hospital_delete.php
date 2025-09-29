<?php
include './dbConnection.php';

$deleteUserId = "";
if(isset($_GET['id'])){$deleteUserId=$_GET['id']; }

//validate

if ($deleteUserId == '') {
    header("Location:../hospital_manage.php?msg=Register ID not Found ! ");
    die();
}

//delete

$delQuery = "delete from hospital where id_hospital = ' ".$deleteUserId."'";
$result = $conn->query($delQuery);

if($result===TRUE){  
    header("Location: ../hospital_manage.php?msg=Hospital Delete Success !");die();
}else{
    header("Location: ../hospital_manage.php?msg=Hospital Delete Error:".mysqli_error($conn));die();
}

