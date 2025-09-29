<?php
include './dbConnection.php';

$deleteUserId = "";
if(isset($_GET['id'])){$deleteUserId=$_GET['id']; }

//validate

if ($deleteUserId == '') {
    header("Location:../admin_manage.php?msg=Register ID not Found ! ");
    die();
}

//delete

$delQuery = "delete from admin where id_admin = ' ".$deleteUserId."'";
$result = $conn->query($delQuery);

if($result===TRUE){  
    header("Location: ../admin_manage.php?msg=Admin Delete Success !");die();
}else{
    header("Location: ../admin_manage.php?msg=Admin Delete Error:".mysqli_error($conn));die();
}

