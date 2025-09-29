<!DOCTYPE html>
<?php
if (session_id() == '') {
    session_start();
}
//include database
include './actions/dbConnection.php';
//create variables
$is_login = "";
$iddoctor = "";
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
if (isset($_SESSION['id_doctor'])) {
    $iddoctor = $_SESSION['id_doctor'];
}
//validation
if ($is_login != true) {
    header("Location:admin_login.php?msg= Please Login Again!");
    die();
}
//search query
$getProfileData = "select * from doctor where id_doctor = '" . $iddoctor . "'";

$result = $conn->query($getProfileData);
//create variables
$fullname = "";
$gender = "";
$email = "";
$phonenumber = "";
$address = "";
$district = "";
$city = "";
$hospital = "";
$position = "";
$edu_quali = "";
$pro_quali = "";
$work_expe = "";
$username = "";
$password = "";

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $fullname = $row['full_name'];
        $gender = $row['gender'];
        $email = $row['e_mail'];
        $phonenumber = $row['phone_number'];
        $address = $row['address'];
        $district = ['district'];
        $city = $row['city'];
        $hospital = ['hospital'];
        $position = ['position'];
        $edu_quali = ['edu_quali'];
        $pro_quali = ['pro_quali'];
        $work_expe = ['work_expe'];
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
        <link type="text/css" rel="stylesheet" href="doctor_profile.css"/>
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
            <form method="post" action="actions/doctor_pro_update.php" >
                <table border="0" width="100%">

                    <tr>
                        <td class="td1">Register Number : </td>
                        <td class="td2"><?php echo $iddoctor; ?></td>
                    </tr>

                    <tr>
                        <td class="td1">Full Name : </td>
                        <td><input type="text" name="full_name" value="<?php echo $fullname; ?>"></td>
                    </tr>

                    <tr>
                        <td class="td1">Gender : </td>
                        <td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
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
                        <td class="td1">District : </td>
                        <td><input type="text" name="district" value="<?php echo $district; ?>"></td>
                    </tr>

                    <tr>
                        <td class="td1">City : </td>
                        <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
                    </tr>
                    <tr>
                        <td class="td1">Hospital : </td>
                        <td><input type="text" name="hosital" value="<?php echo $hospital; ?>"></td>
                    </tr>
                    <tr>
                        <td class="td1">Position : </td>
                        <td><input type="text" name="position" value="<?php echo $position; ?>"></td>
                    </tr>
                    <tr>
                        <td class="td1">Educational Qualification : </td>
                        <td><input type="text" name="edu_quali" value="<?php echo $edu_quali; ?>"></td>
                    </tr>
                    <tr>
                        <td class="td1">Professional Qualification : </td>
                        <td><input type="text" name="pro_quali" value="<?php echo $pro_quali; ?>"></td>
                    </tr>
                    <tr>
                        <td class="td1">Work Experience : </td>
                        <td><input type="text" name="work_expe" value="<?php echo $work_expe; ?>"></td>
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
                        <td><a href="actions/doctor_pro_deactivate.php" style="align-content: center;">Deactivate Account</a></td>

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
