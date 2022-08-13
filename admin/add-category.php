<?php
include('partials/menu.php');
?>

<div class="main-contain">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br /> <br />

        <?php
        if (isset($_SESSION['add'])) //checking whterher the session is set or not
        {
            echo $_SESSION['add']; //Display the session message
            unset($_SESSION['add']); //remove session message
        }

        if (isset($_SESSION['upload'])) //checking whterher the session is set or not
        {
            echo $_SESSION['upload']; //Display the session message
            unset($_SESSION['upload']); //remove session message
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td> <input type="text" name="title" placeholder="Category Title"> </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td> <input type="file" name="image"> </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td> <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td> <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php
include('partials/footer.php');
?>

<?php

//process the value from form and ave it in Database
//1.check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
    //echo'Button Clicked';

    //1.Get data from form
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    //for radio input, we need to check whether the button is selected or not
    if (isset($_POST['featured'])) {
        //get the value from form
        $featured = $_POST['featured'];
    } else {
        //set the default value
        $featured = "No";
    }
    if (isset($_POST['active'])) {
        //get the value from form
        $active = $_POST['active'];
    } else {
        //set the default value
        $active = "No";
    }
    //check whether the image is selected or not and set the value for image name accordingly
    //print_r($_FILES['image']); //print_r is used to display the value of array because eco cannot print 
    //die(); //break the code here

    if (isset($_FILES['image']['name'])) {
        //upload the image
        //to upload image ue need image name and source path and destination path
        $image_name = $_FILES['image']['name'];

        //upload image only if image is selected
        if ($image_name != "") {

            //auto rename our image
            //get the extension of our image (.jpg, .png, .gif etc) e.g "food1.jpg
            $ext = end(explode('.', $image_name));

            //rename the image 
            $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext; //e.g Food_Category_834.jpg


            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = "../images/category/" . $image_name;

            //finally upload image
            $upload = move_uploaded_file($source_path, $destination_path);

            //check whether the image is uploaded or not
            //and if the image is not uploaded then we will stop the process and redirect with error message
            if ($upload == false) {
                //set message
                $_SESSION['upload'] = "<div class='error'>Failed To Upload Image </div>";
                //redirect to add category page
                header('location:' . SITEURL . 'admin/add-category.php');
                //stop the process
                die();
            }
        }
    } else {
        //dont upload image and set the image name value as blank
        $image_name = "";
    }

    //2. SQL Query to save the data into database
    $sql = "INSERT INTO tbl_category SET 
          title='$title',
          image_name='$image_name', 
          featured='$featured',
           active='$active'";

    //3. Execute Query and save data in Database
    $res = mysqli_query($conn, $sql);

    //4. check whether the {query is executed} data is inserted or not and display appropriate message
    if ($res == TRUE) {
        //create a session variable to display message if true
        $_SESSION['add'] = "<div class='success'>Category Added Successfully</div>";
        //redirect page to category page
        header("location:" . SITEURL . 'admin/manage-category.php');
    } else {
        //create a session variable to display message if false
        $_SESSION['add'] = "<div class='error'>Failed tO Add Category</div>";
        //redirect page to category page
        header("location:" . SITEURL . 'admin/add-category.php');
    }
}
?>