<?php
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$item_name = $_POST['item_name'];
$quantity = $_POST['quantity'];   
$status = $_POST['status'];

include_once('./db.php');

$sql = "INSERT INTO `payment`(`id`, `username`, `phone`,`item_name`, `quantity`,`status`) VALUES ('','$username','$phone','$item_name','$quantity','$status')";
$result = mysqli_query($con, $sql);
if($result){
    echo "SUcessfully inserted into items";
    header('location:../pages/user.php');
}