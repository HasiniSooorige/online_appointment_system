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
        <link type="text/css" rel="stylesheet" href="hospital_add.css"/>
    </head>

        <body class="b">
        <!--header include-->
        <?php
        include './header.php';
        ?>
        <div class="signupbox">
            <h1 class="hs">Add New Hospital</h1>
            <hr>
            <!--create form-->
            <form class="form" method="post" action="actions/hospital_add_action.php">

                <p>Hospital Name</p>
                <input type="text" name="name" value="" placeholder="Enter Hospital Name">
                <p>Hospital Type</p>
                <input type="text" name="type" value="" placeholder="Enter Hospital Type">
                <p>City</p>
                <input type="text" name="city" value="" placeholder="Enter City">
                <p>District</p>
                <input type="text" name="district" value="" placeholder="Enter District">
 <br><br>
                <input type="submit" name="Register" value ="Save">

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
