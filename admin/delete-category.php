<?php
//include constant.php file here
include('../config/constants.php');

//echo "Delete page";
//check whether the id and image_name value is set or not
if (isset($_GET['id']) and isset($_GET['image_name'])) {
    //get the value and delete
    //echo "Get value and deleted";
    //1. get the id of admin to be deleted
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    //remove the physical image file if available
    if ($image_name != "") {
        //image is available so remove it
        $path = "../images/category/" . $image_name;

        //remove the image
        $remove = unlink($path);

        //if fail to remove image then add an error message and stop the process
        if ($remove == FALSE) {

            //set the session message
            $_SESSION['remove'] = "<div class='error'> Failed to remove category image </div>";
            //reidect to manage category page
            header('location:'.SITEURL.'admin/manage-category.php');
            //stop the process
            die();
        }
    }


    //delete data from database
    //sql query to delete data from database
    $sql="DELETE FROM tbl_category WHERE id=$id";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //check whether the data is delete from database or not
    if($res==TRUE)
    {
        $_SESSION['delete'] = "<div class='success'> Category Deleted Successfully </div>";
        //reidect to manage category page
        header('location:'.SITEURL.'admin/manage-category.php');
    }
    else{
        $_SESSION['delete'] = "<div class='error'> Failed to delete category </div>";
        //reidect to manage category page
        header('location:'.SITEURL.'admin/manage-category.php');
    }
    //redirect to manage category page with message





} else {
    //redirect to manage category page
    header('location:' . SITEURL . 'admin/manage-category.php');
}
