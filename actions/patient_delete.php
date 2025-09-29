<?php
include './dbConnection.php';

$deleteUserId = "";
if(isset($_GET['id'])){$deleteUserId=$_GET['id']; }

//validate

if ($deleteUserId == '') {
    header("Location:../patient_manage?msg=Register ID not Found ! ");
    die();
}

//delete

$delQuery = "delete from patient where id_patient = ' ".$deleteUserId."'";
$result = $conn->query($delQuery);

if($result===TRUE){  
    header("Location: ../patient_manage.php?msg=Patient Delete Success !");die();
}else{
    header("Location: ../patient_manage.php?msg=Patient Delete Error:".mysqli_error($conn));die();
}

