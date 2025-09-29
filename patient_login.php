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
        <link type="text/css" rel="stylesheet" href="patient_login.css"/>
        
    </head>
    <body>
        <!--include header-->
<?php
        include './header.php';
        ?>
        <!--create div & login form-->
        <div class="b">
            </br></br></br></br></br></br></br></br></br></br></br>

                      <div class="loginbox" >
                          <h1 class="hw">WELCOME ! ! !</h1>
                          <img src="images/User.png" class="user">
                 
            <br/>
            <h2 class="hL">Login</h2>
            
            <form class="form" method="post" action="actions/patient_login_action.php">
                <p>Username</p>
                <input type="text" name="username" value="" placeholder="Enter Username Here">
                <p>Password</p>
                <input type="Password" name="password" value="" placeholder ="Please Enter Password" maxlength="8">
                 </br> </br></br>
                <input type="submit" name="Login" value ="Login">
                </br> </br>
                <a href="patient_register.php" style="color:dodgerblue">Register</a>
                <button type="button" class="cancel">Cancel</button>
            </form>
            </div>   
        </div>
        <!--include footer-->
<?php
        include './footer.php';
        ?>
    </body>
</html>

