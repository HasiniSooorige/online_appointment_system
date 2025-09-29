<!--session--> 

<?php
if (session_id() == '') {
    session_start();
}

$is_login = false;
//create variable
$user_type = "";
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}


if (isset($_SESSION['user_type'])) {
    $user_type = $_SESSION['user_type'];
}
?>
<!--link header file-->
<link href="header.css" rel="stylesheet" type="text/css"/>

<header class="header">
    <!--create div & table-->
    <div class="d1">
        <table border="0" class="t1">

            <tbody>
                <tr>
                    <td>
                        <img src="images/4.png" style="width: 200px; height: 200px;"/> 
                    </td>  

                    <td>
                        <!--headlines-->
                        <h1 align="center" class="h1">OPD Channeling</h1>

                        <!--create another div & dropdown list-->
                        <div class="menu">
                            <span class="active"><a href="index.php" class="a">Home</a></span>  
                            <!--admin header area-->
                            <?php if ($user_type == 1) {
                                ?>



                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Profile</button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="admin_profile.php">Manage Profile ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Admin</button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="admin_manage.php">Manage Administration ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Doctors</button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="doctor_manage.php">Manage Doctors ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Hospitals </button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="hospital_add.php">Add New Hospitals ></a></h4>

                                            <h4 class="hh" align="left"><a href="hospital_manage.php">Manage Hospitals ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a" >Patients </button>
                                        <div class="dropdown-content">

                                            <h4 class="hh" align="left"><a href="patient_manage.php">Manage Patients ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a" >Appointments </button>
                                        <div class="dropdown-content">

                                            <h4 class="hh" align="left"><a href="appo_manage.php">Manage Appointments ></a></h4>

                                        </div>
                                    </div> </span>

                            <?php }
                            ?>

                            <!--patient header area-->
                            <?php if ($user_type == 2) {
                                ?>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Profile</button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="patient_profile.php">Manage Profile ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a" >Appointments </button>
                                        <div class="dropdown-content">

                                            <h4 class="hh" align="left"><a href="appo_add.php">Add Appointments ></a></h4>
                                            <h4 class="hh" align="left"><a href="appo_manage.php">Manage Appointments ></a></h4>
                                            <h4 class="hh" align="left"><a href="appo_view.php">View Appointments ></a></h4>

                                        </div>
                                    </div> </span>


                            <?php }
                            ?>

                            <!--doctors header area-->
                            <?php if ($user_type == 3) {
                                ?>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a">Profile</button>
                                        <div class="dropdown-content">
                                            <h4 class="hh" align="left"><a href="doctor_profile.php">Manage Profile ></a></h4>

                                        </div>
                                    </div> </span>

                                <span class="active"><div class="dropdown">
                                        <button class="dropbtn a" >Appointments </button>
                                        <div class="dropdown-content">

                                            <h4 class="hh" align="left"><a href="appo_manage.php">Manage Appointments ></a></h4>
                                            <h4 class="hh" align="left"><a href="appo_view.php">View Appointments ></a></h4>

                                        </div>
                                    </div> </span>


                            <?php }
                            ?>

                            <span class="active"><a href="contact_us.php" class="a">Contact Us</a></span>  
                            <span class="active"><a href="about_us.php" class="a">About Us</a></span>  
                        </div>
                    </td>

                    <td align="center">
                        <div class="d2">
                            <img src="images/5.png" style="width: 250px; height :150px;"/>  
                        </div>
                        <!--login, sign up & logout options-->
                        <div  class="menu">
                            <?php
                            if ($is_login) {
                                ?>  

                                <div class="dropdown" style="margin-right: 70px;">
                                    <button class="dropbtn a" align="center">Logout </button>
                                    <div class="dropdown-content">
                                        <h4 class="hh" align="left">I am a Patient<a href="actions/patient_logout.php">Logout ></a></h4>
                                        <h4 class="hh" align="left">I am a Doctor<a href="actions/doctor_logout.php">Logout ></a></h4>
                                        <h4 class="hh" align="left">I am a Administrator<a href="actions/admin_logout.php">Logout ></a></h4>
                                    </div>
                                </div> 
                                <?php
                            } else {
                                ?>
                                </br> </br></br> </br>

                                <div class="dropdown" style="margin-right: 70px;">
                                    <button class="dropbtn a">Sign Up </button>
                                    <div class="dropdown-content">
                                        <h4 class="hh" align="left">I am a Patient<a href="patient_login.php">Login ></a></h4>
                                        <h4 class="hh" align="left">I am a Doctor<a href="doctor_login.php">Login ></a></h4>
                                        <h4 class="hh" align="left">I am a Administrator<a href="admin_login.php">Login ></a></h4>

                                    </div>
                                </div> 

                                <?php
                            }
                            ?>
                        </div>  
                    </td>
                </tr>



            </tbody>
        </table>



    </div>

</header>

<hr class="hr1">
<?php
if (isset($_GET['msg'])) {
    ?>
    <p  style="color: #990000; Font-size: 20px; border-color: #cc0000;
        border-style: groove; border-radius: 20px; margin: 10px;" align="center"><?php echo $_GET['msg']; ?></p>
    <hr class="hr1">
    <?php
}
?>