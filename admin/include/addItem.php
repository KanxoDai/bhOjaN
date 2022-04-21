<?php
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];

include_once('./db.php');

$sql = "INSERT INTO  items (name, price, type) values ('{$name}', {$price}, '{$type}');";
$result = mysqli_query($con, $sql);
if($result){
    echo "SUcessfully inserted into items";
    header('location:../pages/item.php');
}