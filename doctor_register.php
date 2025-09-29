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
        <link type="text/css" rel="stylesheet" href="doctor_register.css"/>
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
            <form class="form" method="post" action="actions/doctor_register_action.php">

                <p>Full Name</p>
                <input type="text" name="full_name" value="" placeholder="Enter Your Full Name">
                <p>Gender</p>
                <input type="text" name="gender" value="" placeholder="Enter Your Gender">
                <p>E-mail</p>
                <input type="text" name="e_mail" value="" placeholder="xxxxxxxxxx@gmail.com">
                <p>Contact Number</p>
                <input type="text" name="phone_number" value="" placeholder="07xxxxxxxx">
                <p>Address</p>
                <input type="text" name="address" value="" placeholder="Enter Your Address">
                <p>District</p>
                <input type="text" name="district" value="" placeholder="Enter Your District">
                <p>City</p>
                <input type="text" name="city" value="" placeholder="Enter Your City">
                <p>Hospital</p>
                <input type="text" name="hospital" value="" placeholder="Enter Your hospital in service">
                <p>Position</p>
                <input type="text" name="position" value="" placeholder="Enter Your Position">
                <p>Educational Qualifications</p>
                <input type="text" name="edu_quali" value="" placeholder="Enter your Educational Qualification">
                <p>Professional Qualifications</p>
                <input type="text" name="pro_quali" value="" placeholder="Enter your Professional Qualifications">
                 <p>Work Experience</p>
                <input type="text" name="work_expe" value="" placeholder="Enter your Work Experience">
                <p>User Name</p>
                <input type="text" name="username" value="" placeholder="Enter User Name">
                <p>Password</p>
                <input type="Password" name="password" value="" placeholder ="Enter the New Password" maxlength="8">
                <p>Re-enter Password</p>
                <input type="Password" name="re_enter_password" value="" placeholder ="Re-enter Your Password" maxlength="8">
                <h5>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</h5>
                <input type="submit" name="Register" value ="Register">

                <h6 class="ha">Already have an account?<a href="doctor_login.php" style="color:dodgerblue">Login</a>.</h6>

                <button type="button" class="cancel">Cancel</button>

            </form>
        </div>
        <!--include footer-->
        <?php
        include './footer.php';
        ?>
    </body>
</html>
