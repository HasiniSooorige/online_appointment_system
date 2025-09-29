<!DOCTYPE html>
<?php

if (session_id() == '') {
    session_start();
}
//include database
include './actions/dbConnection.php';
//create variables
$is_login = "";
$idadmin = "";
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
if (isset($_SESSION['id_admin'])) {
    $idadmin = $_SESSION['id_admin'];
}
//validation
if ($is_login != true) {
    header("Location:admin_login.php?msg= Please Login Again!");
    die();
}
//search query
$getProfileData = "select * from admin where id_admin = '" . $idadmin . "'";

$result = $conn->query($getProfileData);
//create variables
$firstname = "";
$lastname = "";
$email = "";
$phonenumber = "";
$address = "";
$city = "";
$username = "";
$password = "";

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $email = $row['e_mail'];
        $phonenumber = $row['phone_number'];
        $address = $row['address'];
        $city = $row['city'];
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
        <link type="text/css" rel="stylesheet" href="admin_profile.css"/>
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
                        <td class="td2"><?php echo $idadmin; ?></td>
                    </tr>
                    
                    <tr>
                        <td class="td1">First Name : </td>
                        <td><input type="text" name="first_name" value="<?php echo $firstname; ?>"></td>
                    </tr>
                   
                    <tr>
                        <td class="td1">Last Name : </td>
                        <td><input type="text" name="last_name" value="<?php echo $lastname; ?>"></td>
                    </tr>
                  
                    <tr>
                        <td class="td1">E-mail : </td>
                        <td><input type="text" name="e_mail" value="<?php echo $email; ?>"></td>
                    </tr>
                
                    <tr>
                        <td class="td1">Contact Number : </td>
                        <td><input type="text" name="phone_number" value="<?php echo $phonenumber; ?>"></td>
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
                        <td><a href="actions/admin_pro_deactivate.php">Deactivate Account</a></td>

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
