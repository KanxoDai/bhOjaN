<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Admin_registration</title>

    <!-- Shortcut Logo -->
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- Own Css -->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="img">

    <!-- Database -->
    <?php
    require('../include/db.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT INTO `admin`(`id`, `username`, `email`, `password`) VALUES ('','$username','$email','$password')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='./registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <br>
        <br>

        <!-- Form Start -->
        <form class="form" action="" method="post">
            <h1 class="login-title">Admin Register Into bhOjaN</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <input type="text" class="form-control login-input" name="email" placeholder="Email Adress" required>
            <input type="password" class="form-control login-input" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link">Already have an account? <a href="../index.php">Login here</a></p>
        </form>
        <!-- Form Ends -->

    <?php
    }
    ?>

</body>
</html>