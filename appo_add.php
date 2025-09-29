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
        <link type="text/css" rel="stylesheet" href="appo_add.css"/>
    </head>

        <body class="b">
        <!--header include-->
        <?php
        include './header.php';
        ?>
        <div class="signupbox">
            <h1 class="hs">New Appointment</h1>
            <hr>
            <!--create form-->
            <form class="form" method="post" action="actions/appo_add_action.php">

                <p>Patient Name</p>
                <input type="text" name="pname" value="" placeholder="Enter Patient Name">
                <p>Patient Age</p>
                <input type="text" name="age" value="" placeholder="Enter Patient Age">
                <p>Doctor Name</p>
                <input type="text" name="dname" value="" placeholder="Enter Doctor Name">
                <p>Position</p>
                <input type="text" name="position" value="" placeholder="Enter Position">
                <p>Date</p>
                <input type="text" name="date" value="" placeholder="Enter Date">
                <p>Time</p>
                <input type="text" name="time" value="" placeholder="Enter Time">
 <br><br>
                <input type="submit" name="Register" value ="Add Appointment">

                <br><br>
                <button type="button" class="cancel">Cancel</button>

            </form>
        </div>
        <!--include footer-->
        <?php
        include './footer.php';
        ?>
    </body>
</html>
