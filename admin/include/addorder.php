<?php
$username = $_POST['username'];
$iten_name = $_POST['item_name'];
$order_type = $_POST['order_type'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

include_once('./db.php');

$sql = "INSERT INTO `orders`(`id`, `username`, `item_name`, `order_type`, `quantity`,`status`) VALUES ('','$username','$item_name','$order_type','$quantity','$status')";
$result = mysqli_query($con, $sql);
if($result){
    echo "SUcessfully inserted into items";
    header('location:../pages/order.php');
}