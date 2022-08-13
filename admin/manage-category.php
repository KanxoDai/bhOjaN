<?php
include('partials/menu.php');
?>

<div class="main-contain">
    <div class="wrapper">
        <h1> Manage Category</h1>

        <br /> <br />



        <?php
        if (isset($_SESSION['add'])) //checking whterher the session is set or not
        {
            echo $_SESSION['add']; //Display the session message
            unset($_SESSION['add']); //remove session message
        }

        if (isset($_SESSION['remove'])) //checking whterher the session is set or not
        {
            echo $_SESSION['remove']; //Display the session message
            unset($_SESSION['remove']); //remove session message
        }

        if (isset($_SESSION['delete'])) //checking whterher the session is set or not
        {
            echo $_SESSION['delete']; //Display the session message
            unset($_SESSION['delete']); //remove session message
        }

        if (isset($_SESSION['no-category-found'])) //checking whterher the session is set or not
        {
            echo $_SESSION['no-category-found']; //Display the session message
            unset($_SESSION['no-category-found']); //remove session message
        }

        if (isset($_SESSION['update'])) //checking whterher the session is set or not
        {
            echo $_SESSION['update']; //Display the session message
            unset($_SESSION['update']); //remove session message
        }

        if (isset($_SESSION['upload'])) //checking whterher the session is set or not
        {
            echo $_SESSION['upload']; //Display the session message
            unset($_SESSION['upload']); //remove session message
        }

        if (isset($_SESSION['failed-remove'])) //checking whterher the session is set or not
        {
            echo $_SESSION['failed-remove']; //Display the session message
            unset($_SESSION['failed-remove']); //remove session message
        }

        ?>


        <br /> <br />

        <!-- button to add amnin -->
        <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary"> Add Category </a>
        <br /> <br /> <br />

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php
            //query to get all category from database
            $sql = "SELECT *FROM tbl_category";

            //execute query
            $res = mysqli_query($conn, $sql);

            //count rows
            $count = mysqli_num_rows($res);

            //create serial number variable and assign value as 1
            $sn = 1;

            //check whether we have data in database or not
            if ($count > 0) {
                //we have data in database
                //get the data and display
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];

            ?>

                    <tr>
                        <td> <?php echo $sn++; ?></td>
                        <td><?php echo $title; ?></td>

                        <td>

                            <?php
                            //check whether name is available or not
                            if ($image_name != "") {
                                //display the image
                            ?>
                                <!-- <img src="<?php echo SITEURL; ?> images/category/<?php echo $image_name; ?>" width="100px"> -->
                                <img src="http://localhost/bhOjaN/images/category/<?php echo $image_name; ?>" width="100px">
                            <?php

                            } else {
                                //display the message
                                echo "<div class='error'>Image Not Added </div>";
                            }

                            ?>
                        </td>

                        <td><?php echo $featured; ?></td>
                        <td><?php echo $active; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary"> Update Category </a>
                            <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&&image_name=<?php echo $image_name; ?>" class="btn-danger"> Delete Category </a>
                        </td>
                    </tr>

                <?php
                }
            } else {
                //we do not have data in database
                //we'll display the message inside table
                ?>

                <tr>
                    <td colspan="6">
                        <div class="error">No Category Added</div>
                    </td>
                </tr>

            <?php

            }

            ?>
        </table>
    </div>
</div>
<?php
include('partials/footer.php');
?>