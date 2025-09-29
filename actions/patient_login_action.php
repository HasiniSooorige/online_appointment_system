<?php
session_start();
include './dbConnection.php';

$username = "";
$password = "";

 if(isset($_POST['username'])){$username = $_POST['username'];}
 if(isset($_POST['password'])){$password = $_POST['password'];}
 
//validation
 if($username==''){header("Location:../patient_login.php?msg=Username not Found ! ");die();}
 if($password==''){header("Location:../patient_login.php?msg=Password not Found ! ");die();}
 
 $selectUser = "Select * from patient where username = '".$username."'  ";
 
$result = $conn->query($selectUser);

if ($result->num_rows > 0) { 
   if($row = $result->fetch_assoc()){
       if($row['is_active']!='1'){
            header("Location:../patient_login.php?msg=Inactive Admin !");die();
       }else if($password==$row['password']){
           //correct username and password
           //update session with params
           $_SESSION['user_id'] = $row['id_patient'];
           $_SESSION['username'] = $row['username'];
           $_SESSION['full_name'] = $row['full_name'];
           $_SESSION['gender'] = $row['gender'];
           $_SESSION['user_type'] = $row['user_type'];
           $_SESSION['is_login'] = true;
           
           

           header("Location:../index.php?msg=Welcome !!!");die();
     
       }else{
           //incorrect password
            header("Location:../patient_login.php?msg=Incorrect Password !");die();
       }
   }
} else {
 header("Location:../patient_login.php?msg=Invalid Admin !");die();
}