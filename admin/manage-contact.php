<?php
include('partials/menu.php');
?>


<!-- menu section ends -->

<!-- main contain section starts -->
<div class="main-contain">
    <div class="wrapper">
        <h1>Manage Contact</h1>

        <br /> <br />
        <?php

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete']; //Displaying session message
            unset($_SESSION['delete']); //Removing session message
        }

        ?>
        <br /> <br />

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>

            <?php
            //Query to get all admin
            $sql = "SELECT * FROm tbl_contact";
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
                        $first_name = $rows['first_name'];
                        $last_name = $rows['last_name'];
                        $email = $rows['email'];
                        $mobile = $rows['mobile'];
                        $message = $rows['message'];

                        //display the values in our table
            ?>

                        <tr>
                            <td> <?php echo $sn++; ?></td>
                            <td> <?php echo $first_name; ?></td>
                            <td><?php echo $last_name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $mobile; ?></td>
                            <td><?php echo $message; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/delete-contact.php?id=<?php echo $id; ?>" class="btn-danger"> Delete Contact </a>
                            </td>
                        </tr>
            <?php

                    }
                } else {
                    echo "<div class='error'> Contact Not Available </div>";
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