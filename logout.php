<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["userlevel"]);
unset($_SESSION['loggedin']);
session_destroy();
header("Location:login.php");
?>