<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>

    <!-- Shortcut Logo -->
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="img">
    <?php
    require('../include/db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE username='$username'
                     AND password='" . ($password) . "'";
        $result = mysqli_query($con, $query) or die('mysql_error()');
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:../pages/dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='../index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
    ?>

        <br>
        <br>
        <br>

        <!-- Form Start -->
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login Into bhOjaN</h1>
            <input type="text" class="form-control login-input" name="username" placeholder="Username" autofocus="true" required />
            <input type="password" class="form-control login-input" name="password" placeholder="Password" required />
            <center>
                <label class="text-dark">
                    <input class="text-dark" type="checkbox" value="remember-me" checked> Remember me
                </label>
            </center>
            <br>
            <br>
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link">Don't have an account? <a href="./registration.php">Registration Now</a></p>
        </form>
        <!-- Form Ends -->
        
    <?php
    }
    ?>

</body>
</html>