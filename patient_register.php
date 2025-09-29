<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--link css file-->
        <link type="text/css" rel="stylesheet" href="patient_register.css"/>
    </head>

        <body class="b">
        <!--header include-->
        <?php
        include './header.php';
        ?>
        <div class="signupbox">
            <h1 class="hs">Register</h1>
            <h3 class="hc">Create Your Account</h3>
            <h4 class="he">Registration is easy! It takes a minute.</h4>
            <hr>
            <!--create form-->
            <form class="form" method="post" action="actions/patient_register_action.php">

                <p>Full Name</p>
                <input type="text" name="full_name" value="" placeholder="Enter Your Full Name">
                <p>Birthday</p>
                <input type="text" name="birthday" value="" placeholder="Enter Your Birthday">
                <p>Age</p>
                <input type="text" name="age" value="" placeholder="Enter Your Age">
                <p>Gender</p>
                <input type="text" name="gender" value="" placeholder="Enter Your Gender">
                <p>Contact Number</p>
                <input type="text" name="phone_number" value="" placeholder="07xxxxxxxx">
                <p>E-mail</p>
                <input type="text" name="e_mail" value="" placeholder="xxxxxxxxxx@gmail.com">
                <p>Address</p>
                <input type="text" name="address" value="" placeholder="Enter Your Address">
                <p>City</p>
                <input type="text" name="city" value="" placeholder="Enter Your City">
                 <p>Register Date</p>
                <input type="text" name="reg_date" value="" placeholder="DD/MM/YYYY">
                <p>Blood Group</p>
                <input type="text" name="blood_grp" value="" placeholder="Enter Your Blood Group">
                <p>Chronic Illness</p>
                <input type="text" name="chronic" value="" placeholder="If ou have Chronic Illness, Please Enter Here.">
                <p>Allergy</p>
                <input type="text" name="allergy" value="" placeholder="If ou have Allergies, Please Enter Here.">
                <p>User Name</p>
                <input type="text" name="username" value="" placeholder="Enter User Name">
                <p>Password</p>
                <input type="Password" name="password" value="" placeholder ="Enter the New Password" maxlength="8">
                <p>Re-enter Password</p>
                <input type="Password" name="re_enter_password" value="" placeholder ="Re-enter Your Password" maxlength="8">
                <h5>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</h5>
                <input type="submit" name="Register" value ="Register">

                <h6 class="ha">Already have an account?<a href="patient_login.php" style="color:dodgerblue">Login</a>.</h6>

                <button type="button" class="cancel">Cancel</button>

            </form>
        </div>
        <!--include footer-->
        <?php
        include './footer.php';
        ?>
    </body>
</html>
