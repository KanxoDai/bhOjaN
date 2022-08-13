<?php
//include constants.php for SUTEURL
include('./config/constants.php');
//1. destroy the session and redirect to login page
session_destroy(); // unset $_SESSION['user']

//2.redirect to login page
header('location:'.SITEURL. 'login.php')
?>