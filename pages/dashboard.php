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
    <title> User_dashboard </title>

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
                            <a href="#" class="nav-link">
                                <i class="bi bi-house"> </i> Home
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section2" class="nav-link">
                                <i class="bi bi-diagram-3-fill"> </i> Categories
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section3" class="nav-link">
                                <i class="bi bi-basket"> </i> Foods
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section4" class="nav-link">
                                <i class="bi bi-info-circle"> </i> About
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section5" class="nav-link">
                                <i class="bi bi-telephone"> </i> Contact
                            </a>
                        </li>
                        <li class="nav-item ms-auto mb-2 mb-lg-0 nav-item dropdown">
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
    <br /> <br />

    <!-- Home Start-->
    <div id="" class="container-fluid text-center justify-content-center img p-5">
        <br>
        <h1 class="p-5 text-primary text-strong">
            Welcome To MyOnlineMeal
            &nbsp;&nbsp;
        </h1>
        <p class="text-primary text-strong">
            BEAST ONLINE FOOD ORDERING PLATFORM
            &nbsp;&nbsp;
        </p>
        <p class="text-primary text-strong">
            La migliore piattaforma online per ordinare cibo. visita una volta e goditi la giornata
            &nbsp;&nbsp;
        </p>
        <p class="text-primary text-strong">
            visita una volta e goditi la giornata
            &nbsp;&nbsp;
        </p>
        <h1>
            <div class="container">
                <a class="nav-link" href="./food.php">
                    <input class="btn btn-lg btn-outline-danger btn-block" type="submit" value=" Order Here">
                </a>
            </div>
        </h1>
        <br /> <br /> <br />
        <br /> <br /> <br />
        <br /> <br>
    </div>
    <!-- Home Ends -->

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
            <a class="text-center text-strong nav-link text-dark" href="./category.php"> See All Category </a>
        </div>
        <br>
    </div>
    <!-- Category Ends -->

    <!-- Food Start -->
    <div id="section3" class="container-fluid text-strong text-center text-primary justify-content-center" style="background-color:#111;">
        <br /> <br /><br>
        <h1 class="text-light text-strong">Food Menu</h1>
        <div class="row">
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <div class="col-lg w-10 m-5 h-25 p-1" style="background-color:#454545;">
                <div class="container">
                    <img src="../images/momo.jpg" alt="MOMO" class="figure-img img-fluid rounded-circle w-25">
                    <span class="text-strong text-light"><br>
                        price: RS.100<br>
                        Name:Momo <br>
                        fhdsjfhjdhfjk</span>
                    <br>
                    <br>
                    <a href="./order.php" class="btn btn-lg btn-outline-danger btn-block p-1"> Add To Cart </a>
                </div>
            </div>
            <a class="text-center text-strong text-light nav-link" href="./food.php"> See All Foods </a>
            <br> <br>
        </div>
    </div>
    <!-- Food Ends -->

    <!-- About Start -->
    <div id="section4" class="container-fluid text-center justify-content-center text-primary text-strong" style="background-color:#fff;">
        <br /> <br /> <br>
        <h1 class="text-dark text-strong"> About Us </h1>
        <div class="row p-3 text-dark">
            Retail food delivery is a courier service in which a restaurant, store, or independent food-delivery company
            delivers food to a customer.An order is typically made either through a restaurant or grocer's websiteor
            mobile app, or through a food ordering company. The delivered items can include entrees, sides, drinks,
            desserts, or grocery items and are typicallydelivered in boxes or bags.
        </div>
        <div class="row">
            <div class="col-lg">
                <p></p>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="./order.php">
                                <img src="../images/biryani.jpg" class="figure-img img-fluid rounded-circle w-50 h-50 border border-dark" alt="choumin"> </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="./order.php">
                                <img src="../images/biryani.jpg" class="figure-img img-fluid rounded-circle w-50 h-50 border border-dark" alt="momo"> </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="./order.php">
                                <img src="../images/biryani.jpg" class="figure-img img-fluid rounded-circle w-50 h-50 border border-dark" alt="biryani"> </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="./order.php">
                                <img src="../images/biryani.jpg" class="figure-img img-fluid rounded-circle w-50 h-50 border border-dark" alt="biryani"> </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Forth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="./order.php">
                                <img src="../images/biryani.jpg" class="figure-img img-fluid rounded-circle w-50 h-50 border border-dark" alt="biryani"> </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fifth slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- About Ends -->
    </div>
    <!-- About Ends -->

    <?php
    include("../include/footer.php");
    ?>