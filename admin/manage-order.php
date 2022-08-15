<?php
include('partials/menu.php');
?>

<div class="main-contain">
    <div class="wrapper">
        <h1> Manage Order</h1>

        <br /> <br />

        <?php
        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        ?>
        <br> <br>

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>U.ID</th>
                <th>Food</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Contact</th>
                <!-- <th>Email</th> -->
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
            //get all the orders from database
            $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; //display the latest order at first

            //execute the query
            $res = mysqli_query($conn, $sql);

            //count the rows
            $count = mysqli_num_rows($res);

            $sn = 1; //create seraial number and set value as 1

            if ($count > 0) {
                //order available
                while ($row = mysqli_fetch_assoc($res)) {
                    //get all the order details
                    $id = $row['id'];
                    $uid  = $row['uid'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    /* $customer_email = $row['customer_email']; */
                    $customer_address = $row['customer_address'];
            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $uid; ?></td>
                        <td><?php echo $food; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $order_date; ?></td>

                        <td>
                            <?php
                            //ordered, on delivery, delivered, cancelled

                            if ($status == "Ordered") {
                                echo "<label>$status</label>";
                            } elseif ($status == "On Delivery") {
                                echo "<label style='color: orange;'>$status</label>";
                            } elseif ($status == "Delivered") {
                                echo "<label style='color: green;'>$status</label>";
                            } elseif ($status == "Cancelled") {
                                echo "<label style='color: red;'>$status</label>";
                            }


                            ?>
                        </td>

                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $customer_contact; ?></td>
                        <!-- <td><?php echo $customer_email; ?></td> -->
                        <td><?php echo $customer_address; ?></td>
                        <td>
                            <a href="<?php echo SITEURL ?>admin/update-order.php?id= <?php echo $id ?>" class="btn-secondary"> Update Order </a>
                            <a href="<?php echo SITEURL ?>admin/delete-order.php?id= <?php echo $id ?>" class="btn-danger"> Delete Order </a>

                        </td>
                    </tr>

            <?php
                }
            } else {
                //order not available
                echo "<div class='error'> Order Not Available </div>";
            }

            ?>

        </table>
    </div>
</div>

<?php
include('partials/footer.php');
?>