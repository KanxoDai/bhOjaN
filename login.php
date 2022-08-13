<?php include('./config/constants.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>User Login</title>

    <!-- Own CSS -->
    <link rel="stylesheet" href="./css/admin.css" />
</head>

<body class="img">
    <br>
    <br>
    <br>

    <!-- Form Start -->
    <form class="form" method="POST">
        <h1 class="login-title">
            <?php
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

            if (isset($_SESSION['no-login-message'])) {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            if (isset($_SESSION['add'])) //checking whterher the session is set or not
            {
                echo $_SESSION['add']; //Display the session message
                unset($_SESSION['add']); //remove session message
            }
            ?>
            </h1>


        <h1 class="login-title">User Login Into bhOjaN</h1>
        <input type="text" class="form-control login-input" name="username" placeholder="Username" autofocus="true" required />
        <input type="password" class="form-control login-input" name="password" placeholder="Password" required />
        <br>
        <br>
        <input type="submit" value="Login" name="submit" class="login-button" /> <br>
        <p class="link">Create an Account? <a href="./register.php">Register here</a></p>
    </form>
    <!-- Form Ends -->

</body>

</html>

<?Php
//check whteher the submit button is clicked or not
if (isset($_POST['submit'])) {
    //process for login
    //1. get the data from login form
    //$username = $_POST['username'];
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    //$password = md5($_POST['password']);
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);

    //2. sql to check whether the user with username and password exits or not
    $sql = "SELECT * FROM tbl_user WHERE username= '$username' AND password='$password'";

    //3. execute the query
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($res)){
        $_SESSION['uid'] = $row['id'];
    }

    //4. count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        //user available and login success
        $_SESSION['login'] = "<div class='success'> Login Successful<br> Grab Your Food From Here :) </div>";
        $_SESSION['username'] = $username; //check whether the user is login or not and logout with unset
        //redirect to home page or dash board
        header('location:' . SITEURL . 'index.php');
    } else {
        //user not available and login fail
        $_SESSION['login'] = "<div class='error'> Username Or Password Didnot Match </div>";
        //redirect to home page or dash board
        header('location:' . SITEURL . 'login.php');
    }
}


?>