<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$create_datetime = $_POST['create_datetime'];

include_once('./db.php');

$sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `phone`, `create_datetime`) VALUES ('','$username','$email','$password','$phone','$create_datetime')";
$result = mysqli_query($con, $sql);
if($result){
    echo "SUcessfully inserted into items";
    header('location:../pages/user.php');
}