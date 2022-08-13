<?php
include('./config/constants.php');
$uid = $_SESSION['uid'];
?>
<html>

<head>
    <title> bhOjaN User Profile</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body class=>
    <!-- menu section ends -->
    <div class="main-contain">
        <div class="wrapper">
            <div class="menu">
                <h1> Profile of <?php echo $_SESSION['username']; ?> </h1> <br>
                <ul>
                    <li>
                        <a href="index.php"> Home</a>
                    </li>
                    <li>

                        <a href="logout.php"> Logout</a>
                    </li>
                </ul>
            </div>
            <br>
            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                    <!-- <th>Actions</th> -->
                </tr>
                <?php
              
                //get all the orders from database
               $sql = "SELECT * FROM tbl_order WHERE uid=$uid";

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
                        $food = $row['food'];
                        $price = $row['price'];
                        $qty = $row['qty'];
                        $total = $row['total'];
                        $order_date = $row['order_date'];
                        $status = $row['status'];
                        $customer_name = $row['customer_name'];
                        $customer_contact = $row['customer_contact'];
                        $customer_address = $row['customer_address'];
                ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $food; ?></td>
                            <td><?php echo $price; ?></td>
                            <td><?php echo $qty; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $order_date; ?></td>

                            <td><?php echo $customer_name; ?></td>
                            <td><?php echo $customer_contact; ?></td>
                            <!-- <td><?php echo $customer_email; ?></td> -->
                            <td><?php echo $customer_address; ?></td>
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
                            <!-- <td>
                                <a href="<?php echo SITEURL ?>admin/update-order.php?id= <?php echo $id ?>" class="btn-secondary"> Update Order </a>
                                <a href="<?php echo SITEURL ?>admin/delete-order.php?id= <?php echo $id ?>" class="btn-danger"> Delete Order </a>

                            </td> -->
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


    <?php include('./admin/partials/footer.php') ?>