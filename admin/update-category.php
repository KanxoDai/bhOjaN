<?php
include('partials/menu.php');
?>
<div class="main-contain">
    <div class="wrapper">
        <h1> Update Categoty</h1>

        <br /> <br />

        <?php

        //check whether the is is set or not
        if (isset($_GET['id'])) {
            //Get the id and all other details
            //echo "Getting the data";
            $id = $_GET['id'];
            //create sql query to get all other detail
            $sql = "SELECT * FROM tbl_category WHERE id=$id";

            //execute the query
            $res = mysqli_query($conn, $sql);

            //count the rows to check whether the id is valid or not
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                //get all the data
                $row = mysqli_fetch_assoc($res);
                $title = $row['title'];
                $current_image = $row['image_name'];
                $featured = $row['featured'];
                $active = $row['active'];
            } else {
                //redirect to manage category with session message
                $_SESSION['no-category-found'] = "<div class='error'> Category Not Found</div>";
                //redirecting
                header('location:' . SITEURL . 'admin/manage-category.php');
            }
        } else {
            //redirect to manage category
            header('location:' . SITEURL . '/admin/manage-category.php');
        }

        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td> <input type="text" name="title" value="<?php echo $title; ?>"></td>
                </tr>
                <tr>
                    <td>Current Image:</td>
                    <td>
                        <?php
                        if ($current_image != "") {
                            //display the image
                        ?>
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $current_image; ?>" width="100px">
                        <?php
                        } else {
                            //display message
                            echo "<div class='error'>Image Not Added</div>";
                        }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>New Image:</td>
                    <td> <input type="file" name="image"> </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td> <input <?php if ($featured == "Yes") {
                                    echo "checked";
                                } ?> type="radio" name="featured" value="Yes"> Yes
                        <input <?php if ($featured == "No") {
                                    echo "checked";
                                } ?> type="radio" name="featured" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td> <input <?php if ($active == "Yes") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="Yes"> Yes
                        <input <?php if ($active == "No") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            //echo "clicked";
            //1.get all the values from our form
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $current_image = mysqli_real_escape_string($conn, $_POST['current_image']);
            $featured = mysqli_real_escape_string($conn, $_POST['featured']);
            $active = mysqli_real_escape_string($conn, $_POST['active']);

            //2.updating new image if selected
            //check whether image is selected or not
            if (isset($_FILES['image']['name'])) {
                //get the image detail
                $image_name = $_FILES['image']['name'];

                //check whether image is available or not
                if ($image_name != "") {
                    //image available
                    //A.upload the new image 

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
                        header('location:' . SITEURL . 'admin/manage-category.php');
                        //stop the process
                        die();
                    }

                    //B.remove the current image if available
                    if ($current_image != "") {
                        $remove_path = "../images/category/" . $current_image;
                        $remove = unlink($remove_path);

                        //check whether the image is remove or not
                        //if failed to remove display message and stop the process
                        if ($remove == false) {
                            //failed to remove image
                            $_SESSION['failed-remove'] = "<div class='error'> Failed to remove current image </div>";
                            header('location:' . SITEURL . 'admin/manage-category.php');
                            die(); //stop the process
                        }
                    }
                } else {
                    $image_name = $current_image;
                }
            } else {
                $image_name = $current_image;
            }

            //3.update the database
            $sql1 = "UPDATE tbl_category SET
                title = '$title',
                image_name ='$image_name',
                featured = '$featured',
                active = '$active'
                WHERE id =$id
                ";
            //execute the query
            $res1 = mysqli_query($conn, $sql1);
            //4.redirect to manage category with message
            //check whether executed or not
            if ($res1 == TRUE) {
                //category update
                $_SESSION['update'] = "<div class='success'>Category Updated Successfully </div>";
                //redirecting
                header('location:' . SITEURL . 'admin/manage-category.php');
            } else {
                //failed to update category
                $_SESSION['update'] = ">div class='error'>Failed To Update Category</div>";
                //redirecting
                header('location:' . SITEURL . 'admin/manage-category.php');
            }
        }

        ?>

    </div>
</div>

<?php
include('partials/footer.php');
?>