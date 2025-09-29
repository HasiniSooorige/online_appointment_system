<!DOCTYPE html>
<?php

if (session_id() == '') {
    session_start();
}
//include database
include './actions/dbConnection.php';
//create variables
$is_login = "";
$idpatient = "";
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
if (isset($_SESSION['id_patient'])) {
    $idpatient = $_SESSION['id_patient'];
}
//validation
//if ($is_login != true) {
//    header("Location:admin_login.php?msg= Please Login Again!");
//    die();
//}
//search query
$getProfileData = "select * from patient where id_patient = '" . $idpatient . "'";

$result = $conn->query($getProfileData);
//create variables
$fullname = "";
$birthday = "";
$age = "";
$gender = "";
$phonenumber = "";
$email = "";
$address = "";
$city = "";
$reg_date = "";
$blood_grp = "";
$chronic = "";
$allergy = "";
$username = "";
$password = "";

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $fullname = $row['full_name'];
        $birthday = $row['birthday'];
        $age = $row['age'];
         $gender = $row['gender'];
        $phonenumber = $row['phone_number'];
         $email = $row['e_mail'];
        $address = $row['address'];
        $city = $row['city'];
        $reg_date = $row['reg_date'];
        $blood_grp = $row['blood_grp'];
        $chronic = $row['chronic'];
        $allergy = $row['allergy'];
        $username = $row['username'];
        $password = $row["password"];
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="patient_profile.css"/>
    </head>
    <body class="bb">
        <!--include header-->
        <?php
        include './header.php';
        ?>

        <hr class="hr1">
        <!--get message-->
        <?php
        if (isset($_GET['msg'])) {
            ?>
        <p  style="color: #b988da; Font-size: 20px; border-color: #d89fff;
                border-style: groove; border-radius: 20px; margin: 10px;" align="center"><?php echo $_GET['msg']; ?></p>
            <hr class="hr1">
            <?php
        }
        ?>
            <!--create div-->
        <div align="center" class="probox">
            <h2 align="center" class="hp">Profile</h2>
<!--add image-->
<img src="images/User.png" width="200" height="250" />
<!--create div-->
<form method="post" action="actions/admin_pro_update.php" >
                <table border="0" width="100%">

                    <tr>
                        <td class="td1">Register Number : </td>
                        <td class="td2"><?php echo $idpatient; ?></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Full Name : </td>
                        <td><input type="text" name="full_name" value="<?php echo $fullname; ?>"></td>
                    </tr>
                   
                    <tr>
                        <td class="td1">Birthday : </td>
                        <td><input type="text" name="birthday" value="<?php echo $birthday; ?>"></td>
                    </tr>
                  
                    <tr>
                        <td class="td1">Age : </td>
                        <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Gender : </td>
                        <td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
                    </tr>
                    
                     <tr>
                        <td class="td1">Contact Number : </td>
                        <td><input type="text" name="phone_number" value="<?php echo $phonenumber; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">E-mail : </td>
                        <td><input type="text" name="e_mail" value="<?php echo $email; ?>"></td>
                    </tr>
               
                    <tr>
                        <td class="td1">Address : </td>
                        <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
                    </tr>
                   
                    <tr>
                        <td class="td1">City : </td>
                        <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Register Date : </td>
                        <td><input type="text" name="reg_date" value="<?php echo $reg_date; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Blood Group : </td>
                        <td><input type="text" name="blood_grp" value="<?php echo $blood_grp; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">chronic : </td>
                        <td><input type="text" name="chronic" value="<?php echo $chronic; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Allergy : </td>
                        <td><input type="text" name="allergy" value="<?php echo $allergy; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">User Name : </td>
                        <td class="td2"><?php echo $username; ?></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">Password : </td>
                        <td><input type="Password" name="password" value="<?php echo $password; ?>"></td>
                    </tr>
                   
                    <tr>
                        <td>
                            <input align="left" type="submit" value="Update" />
                        </td>
                        <td><a href="actions/patient_pro_deactivate.php">Deactivate Account</a></td>

                    </tr>
                </table>
            </form>
        </div>
<!--include footer-->
        <?php
        include './footer.php';
        ?>
    </body>
</html>
