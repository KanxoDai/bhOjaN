<?php
include('partials/menu.php');
?>


<!-- menu section ends -->

<!-- main contain section starts -->
<div class="main-contain">
    <div class="wrapper">
        <h1>Manage User</h1>

        <br /> <br />
        <?php
        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete']; //Displaying session message
            unset($_SESSION['delete']); //Removing session message
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update']; //Displaying session message
            unset($_SESSION['update']); //Removing session message
        }

        ?>
        <br /> <br />

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>User Name</th>
                <th>Full Name</th>
                <th>Gmail</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>

            <?php
            //Query to get all admin
            $sql = "SELECT * FROm tbl_user";
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
                        $username = $rows['username'];
                        $fullname = $rows['fullname'];
                        $gmail = $rows['email'];
                        $phone = $rows['phone'];
                        $password = $rows['password'];

                        //display the values in our table
            ?>
                        <tr>
                            <td> <?php echo $sn++; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $gmail; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $password; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-user.php?id=<?php echo $id; ?>" class="btn-secondary"> Update User </a>
                                <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-danger"> Delete User </a>
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