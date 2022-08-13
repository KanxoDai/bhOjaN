<?php
//authorization - access control
//check whether the user is login or not
if(!isset($_SESSION['username'])) //if user session is not set
{
//user is not login
//redirect to login page with message
$_SESSION['no-login-message'] = "<div class='error'>Please Login To Access User Panel </div>";
//redirect to login page
header('location:'.SITEURL.'login.php');
}
?>