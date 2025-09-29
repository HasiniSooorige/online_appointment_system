<?php
session_start();

session_destroy(); 

session_write_close();

header("Location: ../patient_login.php?msg=Logout Successfully !");

die();