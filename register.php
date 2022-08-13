<?php include('./config/constants.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>

    <!-- Own CSS -->
    <link rel="stylesheet" href="./css/admin.css" />
</head>

<body class="img">
    <!-- Database -->
    <?php

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $fullname   = stripslashes($_REQUEST['fullname']);
        $fullname   = mysqli_real_escape_string($conn, $fullname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($conn, $phone);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query    = "INSERT into `tbl_user` (username, fullname, password, email, phone)
                     VALUES ('$username', '$fullname','" . md5($password) . "', '$email', '$phone')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            //create a session variable to display  message
            $_SESSION['add'] = "<div class='success'>User Added Successfully</div>";
            //redirect page to manage admin
            header("location:" . SITEURL . 'login.php');
        } else {
            //Failed to inserted
            //echo"Failed to insert data";
            //create a session variable to display  message
            $_SESSION['add'] = "<div class='error'>Failed tO Add User</div>";
            //redirect page to add admin
            header("location:" . SITEURL . 'register.php');
        }
    } else {
    ?>
        <br>
        <!-- Form Start -->
        <form class="form" action="" method="post">
            <h1 class="login-title">Register Into bhOjaN</h1>
            <br>
            <input type="text" class="login-input" name="username" placeholder="Username" pattern="[a-z]{1,15}" title="Username should only contain lowercase letters. e.g. john" maxlength="10" required />
            <input type="text" class="login-input" name="fullname" placeholder="Fullname" maxlength="20" required />
            <input type="text" class="form-control login-input" name="email" placeholder="Email Adress" id="email" pattern="^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$" title="Enter your valid gmail id" required />
            <input type="tel" class="form-control login-input" name="phone" placeholder="Phone Number" id="phone" pattern="^[9]\d{9,9}$" title="Phone number starts with 9 and remaing 9 digit with 0-9" maxlength="10" required />
            <input type="password" class="form-control login-input" name="password" id="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
            <input type="submit" name="submit" value="Register" class="login-button"> <br>
            <p class="link">Already have an account? <a href="./login.php">Login here</a></p>
        </form>
        <!-- Form Ends -->

    <?php
    }
    ?>

</body>

</html>