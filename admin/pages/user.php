<?php
//include auth_session.php file on all user panel pages

/* Database */
include("../include/auth_session.php");
include_once('../include/db.php');
$sql = 'SELECT * FROM users';
$result   = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Items </title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Shortcut Logo -->
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <!-- NAvbar Start -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-1 imgga fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <span class="text-primary h1 logo">
                    bhOjaN
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlink">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <div class="container collapse navbar-collapse justify-content-center" id="navlink">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3 ms-auto mb-2 mb-lg-0">
                            <a href="#section1" class="nav-link">
                                <i class="bi bi-people-fill"> </i> Users
                            </a>
                        </li>
                        <li class="nav-item ms-auto mb-2 mb-lg-0">
                            <a href="#" class="nav-link">
                                <i class="bi bi-person-circle"> </i> <?php echo $_SESSION['username']; ?>!
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./dashboard.php" class="nav-link">
                                <i class="bi bi-house"> </i> GoToHome
                            </a>
                        </li>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Ends-->

    <br>
    <br>
    <br>

    <!-- Body -->
    <!-- Table Start -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">phone</th>
                <th scope="col">create_datetime</th>
            </tr>
        <tbody>
            <?php
            $sn = 1;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                        <tr>
                        <td>
                            ' . $sn . '
                        </td>
                        <td>
                            ' . $row['username'] . '
                        </td>
                        <td>
                            ' . $row['email'] . '
                        </td>
                        <td>
                            ' . $row['password'] . '
                        </td>
                        <td>
                        ' . $row['phone'] . '
                    </td>
                    <td>
                    ' . $row['create_datetime'] . '
                </td>
                    </tr>
                        ';
                    $sn = $sn + 1;
                }
            }
            ?>
        </tbody>
        </thead>
    </table>
    <!-- Table Ends -->

    <br>
    <hr>
    <br>

    <section class="p-3 text-center">
        <div class="container border border-warning">
            <div class="text-center container p-3 lead">
                <!-- Form Start -->
                <form class="form-signin" method="post" action="../include/addItem.php">
                    <br>
                    <label for="name" class="sr-only">User Name</label>
                    <input type="text" name="username" class="form-control mb-3" placeholder="User name" required autofocus><br>
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="text" name="email" class="form-control mb-3" placeholder="Email" required>
                    <label for="type" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required><br>
                    <label for="inputEmail" class="sr-only">Phone</label>
                    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone" required>
                    <label for="inputEmail" class="sr-only">Create_datetime</label>
                    <input type="text" name="creaate_datetime" class="form-control mb-3" placeholder="Phone" required>
                    <button class="btn btn-lg btn-outline-warning btn-block" name="submit" type="submit">Add</button>
                </form>
                <!-- Form Ends -->

            </div>
        </div>
    </section>

    <!-- Copy right start -->
    <section class="p-1 bg-dark imgga">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-white ">
                All right reserve &copy; bhOjaN <?php echo date("Y"); ?>
            </span>
        </div>
    </section>
    <!-- Copy right Ends -->

</body>

</html>