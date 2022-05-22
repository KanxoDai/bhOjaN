<?php
//include auth_session.php file on all user panel pages
include("../include/auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin_dashboard </title>

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
                        <li class="nav-item mx-3 ms-auto mb-2 mb-lg-0">
                            <a href="#section1" class="nav-link">
                                <i class="bi bi-house"> </i> Home
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="./user.php" class="nav-link">
                                <i class="bi bi-people-fill"> </i>Users
                            </a>
                        </li>
                        <li class="nav-item  mx-3">
                            <a href="./item.php" class="nav-link">
                                <i class="bi bi-diagram-3-fill"> </i> Category
                            </a>
                        </li>
                        <li class="nav-item  mx-3">
                            <a href="./item.php" class="nav-link">
                            <i class="bi bi-basket"></i> Foods
                            </a>
                        </li>

                        <li class="nav-item mx-3">
                            <a href="./order.php" class="nav-link">
                                <i class="bi bi-bag-plus-fill"> </i>Orders
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="./payment.php" class="nav-link">
                                <i class="bi bi-wallet-fill"> </i>Payment
                            </a>
                        </li>
                        <li class="nav-item ms-auto mb-2 mb-lg-0">
                            <a href="#" class="nav-link">
                                <i class="bi bi-person-circle"> </i> <?php echo $_SESSION['username']; ?>!
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../include/logout.php" class="nav-link">
                                <i class="bi bi-box-arrow-left"></i> </i> logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Ends -->

    <br>
    <br>
    <br>

    <!-- Video -->
    <center>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VRJgmKBR9KQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </center>
    <!-- Video Ends -->

    <!-- Contact Start -->
    <section class="bg-success p-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md text-light " id="section4">
                    <h2 class="mb-4">
                        Contact Info
                    </h2>
                    <i class="bi bi-geo-alt h1 text-info">&nbsp;&nbsp;</i>
                    <span class="lead mb-2">Biratnagar, Province 1, Nepal</span><br>
                    <i class="bi bi-envelope h1 text-info">&nbsp;&nbsp;</i>
                    <span class="lead mb-2">info@bhOjaN.com</span><br>
                    <i class="bi bi-telephone h1 text-info">&nbsp;&nbsp;</i>
                    <span class="lead mb-2">+977-9807072190</span>
                </div>

                <!-- Map Start -->
                <div class="col-md text-light ">
                    <iframe class="h-100 w-100 my-0 mx-0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3572.3040646729582!2d87.2755849!3d26.445926!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1643798027732!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- Map Ends -->

            </div>
        </div>
    </section>
    <!-- Contact Ends -->

    <!-- Date Start -->
    <section class="p-2 bg-warning">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-dark">
                <?php $year = date("F");
                $month = date("jS");
                $day = date("Y");
                echo $year . " " . $month . " " . $day;
                ?>
                <?php $year = date("l");
                echo $year;
                ?>
            </span>
        </div>
    </section>
    <!-- Date Ends -->

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