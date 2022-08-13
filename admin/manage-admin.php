<?php
include('partials/menu.php');
?>


<!-- menu section ends -->

<!-- main contain section starts -->
<div class="main-contain">
    <div class="wrapper">
        <h1>Manage Admin</h1>

        <br /> <br />
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add']; //Displaying session message
            unset($_SESSION['add']); //Removing session message
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete']; //Displaying session message
            unset($_SESSION['delete']); //Removing session message
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update']; //Displaying session message
            unset($_SESSION['update']); //Removing session message
        }

        if (isset($_SESSION['user-not-found'])) {
            echo $_SESSION['user-not-found']; //Displaying session message
            unset($_SESSION['user-not-found']); //Removing session message
        }

        if (isset($_SESSION['pwd-not-match'])) {
            echo $_SESSION['pwd-not-match']; //Displaying session message
            unset($_SESSION['pwd-not-match']); //Removing session message
        }

        if (isset($_SESSION['change-pwd'])) {
            echo $_SESSION['change-pwd']; //Displaying session message
            unset($_SESSION['change-pwd']); //Removing session message
        }



        ?>
        <br /> <br />

        <!-- button to add amnin -->
        <a href="add-admin.php" class="btn-primary"> Add Admin </a>
        <br /> <br /> <br />

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Actions</th>
            </tr>

            <?php
            //Query to get all admin
            $sql = "SELECT * FROm tbl_admin";
            //Execute query
            $res = mysqli_query($conn, $sql);

            //checking whether the query is executed or not
            if ($res == TRUE) {
                //count rows to check whether we have data in database or not
                $count = mysqli_num_rows($res); //function to get all the rows in database
                $sn = 1; //create a variable and assign a value
                //check the num of rows
                if ($count > 0) {
                    //we have data on database
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //using while loop to get all the data from database
                        //and all loop will run as long as we have data in database

                        //get individual data
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];

                        //display the values in our table
            ?>

                        <tr>
                            <td> <?php echo $sn++; ?></td>
                            <td> <?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary"> Update Admin </a>
                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger"> Delete Admin </a>
                            </td>
                        </tr>
            <?php

                    }
                } else {
                    //we don not have data to database
                }
            }

            ?>
        </table>
    </div>

</div>
<!-- main contain section ends -->

<?php
include('partials/footer.php');
?>