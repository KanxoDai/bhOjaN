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
    <title> Category </title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Shortcut Logo -->
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <!-- Navbar Start -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top imgga">
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
                            <a href="./dashboard.php" class="nav-link">
                                <i class="bi bi-house"> </i> Home
                            </a>
                        </li>
                        <li class="nav-item nav-item dropdown px-3 ms-auto mb-2 mb-lg-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"> </i> <?php echo $_SESSION['username']; ?>!
                            </a>
                            <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <a class="dropdown-item" href="../include/logout.php">
                                    <i class="bi bi-box-arrow-left btn btn-lg btn-outline-danger btn-block"> Logout </i> </a>
                            </div>
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

    <!-- Category Start -->
    <div id="section2" class="container-fluid text-strong text-center text-primary justify-content-center" style="background-color:#fff;">
        <br /> <br /> <br>
        <h1 class="text-dark text-strong">Explore Foods</h1>
        <br />
        <div class="row p-3">
            <div class="col-lg">
                <div class="thumbnail">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded border border-dark" style="width:80%">
                    <div class="caption">
                        <p>
                        <h5>MoMo </h5>
                        </p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg">
                <div class="thumbnail">
                    <img src="../images/pizza.jpg" alt="MOMO" class="figure-img img-fluid rounded border border-dark" style="width:80%">
                    <div class="caption">
                        <p>
                        <h5>Pizza </h5>
                        </p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg">
                <div class="thumbnail">
                    <img src="../images/burger.jpg" alt="MOMO" class="figure-img img-fluid rounded border border-dark" style="width:80%">
                    <div class="caption">
                        <p>
                        <h5>Burger </h5>
                        </p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!-- Category Ends -->


    <?php
    include("../include/footer.php");
    ?>