<?php

//include constant.php file here
include('../config/constants.php');

//1. get the id of admin to be deleted
$id = $_GET['id'];

//2.create sql query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the query
$res = mysqli_query($conn, $sql);

//3.redirect to manage admin page with message(success/error)
//check whether the query ececuted is successfully or not
if ($res == TRUE) {
    //query ececuted successfully and admin deleted
    //echo "admin deleted";
    //create session variable to display message 
    $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully </div>";
    //redirect to manage admin page
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    //Failed to delete admin
    //echo "Failed to delete admin";
    $_SESSION['delete'] = "<div class='success'> Failed To Delete Admin. Try Again Later </div>";
    //redirect to manage admin page
    header('location:' . SITEURL . 'admin/manage-admin.php');
}
?>