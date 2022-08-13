<?php
include('partials/menu.php');
?>
<div class="main-contain">
    <div class="wrapper">
        <h1>Add Food</h1>

        <br /> <br />
        <?php
        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if (isset($_SESSION['add'])) //checking whterher the session is set or not
        {
            echo $_SESSION['add']; //Display the session message
            unset($_SESSION['add']); //remove session message
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td> <input type="text" name="title" placeholder="Title Of Food"> </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td> <textarea name="description" cols="20" rows="5" placeholder="Enter the description here"></textarea></td>
                </tr>
                <td>Price:</td>
                <td> <input type="number" name="price" placeholder="Enter the price"></td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td> <input type="file" name="image"> </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category">
                            <?php
                            //create php code to display categories from database
                            //1.create sql to get all active categories from database
                            $sql = "SELECT * FROM tbl_category WHERE active='yes'";
                            //executing query
                            $res = mysqli_query($conn, $sql);
                            //count rows to check whether wee have categories or not
                            $count = mysqli_num_rows($res);
                            //if count is greater than 0, we have categories else we don'n have categories
                            if ($count > 0) {
                                //we have categories
                                while ($row = mysqli_fetch_assoc($res)) {
                                    //get the details of category 
                                    $id = $row['id'];
                                    $title = $row['title'];
                            ?>
                                    <option value="<?php echo $id; ?>"> <?php echo $title; ?> </option>
                                <?php
                                }
                            } else {
                                //we dont have category
                                ?>
                                <option value="0"> No Category Found </option>
                            <?php
                            }
                            //2.display on dropdoun
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>
                <tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        //check whether the button is clicked or not
        if (isset($_POST['submit'])) {
            //add food to database
            // echo "button clicked";

            //1. get the data from form
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);
            $category = mysqli_real_escape_string($conn, $_POST['category']);

            //check whether radio button for featured and active is checked or not
            if (isset($_POST['featured'])) {
                $featured = $_POST['featured'];
            } else {
                $featured = "No";
            }

            if (isset($_POST['active'])) {
                $active = $_POST['active'];
            } else {
                $active = "No";
            }


            //2. upload the image if selected
            //check whether the select image is clicked or not and upload the image only if image is selected
            if (isset($_FILES['image']['name'])) {
                //get the details of the selected image
                $image_name = $_FILES['image']['name'];

                //check whether the image is selected or not and upload image only if selected
                if ($image_name != "") {
                    //image is selected
                    //A. rename the image
                    //get the extension of the selected image(jpg, png gif etc.) "Amit-Ghimire.jpg" 
                    $ext = end(explode('.', $image_name));

                    //create new name for image
                    $image_name = "Food-Name-" . rand(0000, 9999) . "." . $ext; //new image may be "Food-Name-657.jpg"

                    //B. upload the image
                    //get the source path and destination path

                    //source path is the current location of the image
                    $src = $_FILES['image']['tmp_name'];

                    //destination path for the image to be uploaded
                    $dst = "../images/food/" . $image_name;

                    //finally upload the food image
                    $upload = move_uploaded_file($src, $dst);

                    //check whether image uploaded or not
                    if ($upload == false) {
                        //failed to upload image
                        //redirect to add-food page with error message
                        $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                        header('location:' . SITEURL . 'admin/add-food.php');
                        //stop the process
                        die();
                    }
                }
            } else {
                $image_name = ""; //setting default value as blank
            }

            //3. insert into database
            //create a sql query to save or add food
            //for numerical we do not need to pass value inside quotes'' but for string it is compulsary to add quotes''
            $sql2 = "INSERT INTO tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    catagory_id = $category,
                    featured = '$featured',
                    active = '$active'
            ";
            //execute the query
            $res1 = mysqli_query($conn, $sql2);
            //check whether data inserted or not
            //4. redirect with message to manage food page
            if ($res1 == true) {
                //data inserted successfully
                $_SESSION['add'] = "<div class ='success'> Food Added Successfully</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            } else {
                //failed to insert data
                $_SESSION['add'] = "<div class ='error'> Failed To Add food</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            }
        }
        ?>
    </div>
</div>

<?php
include('partials/footer.php');
?>