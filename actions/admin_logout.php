<?php
session_start();

session_destroy(); 

session_write_close();

header("Location: ../admin_login.php?msg=Logout Successfully !");

die();