<?php
//include auth_session.php file on all user panel pages
include("../include/auth_session.php");

/* Database */
include_once('../include/db.php');
$sql = 'SELECT * FROM orders';
$result = mysqli_query($con, $sql);
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
    <!-- Navbar Start -->
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
                                <i class="bi bi-bag-plus-fill"> </i> Orders
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- NAvbar Ends -->

    <br>
    <br>
    <br>

    <!-- Body -->
    <!--Table Start -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">username</th>
                <th scope="col">item_name</th>
                <th scope="col">order_type</th>
                <th scope="col">quantity</th>
                <th scope="col">status</th>
            </tr>
        </thead>
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
                            ' . $row['item_name'] . '
                        </td>
                        <td>
                            ' . $row['order_type'] . '
                        </td>
                        <td>
                        ' . $row['quantity'] . '
                    </td>
                    <td>
                    ' . $row['status'] . '
                </td>
                    </tr>
                        ';
                    $sn = $sn + 1;
                }
            }
            ?>
        </tbody>
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
                    <label for="item" class="sr-only">Item_Name</label>
                    <input type="text" name="item_name" class="form-control mb-3" placeholder="Item_Name" required>
                    <label for="type" class="sr-only">order_type</label>
                    <input type="text" name="order_type" class="form-control mb-3" placeholder="Order_type" required>
                    <label for="quantity" class="sr-only">Quantity</label>
                    <input type="text" name="quantity" class="form-control mb-3" placeholder="quantity" required>
                    <label for="status" class="sr-only">status</label>
                    <input type="text" name="status" class="form-control mb-3" placeholder="status" required>
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