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

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- BOOTSTRAP JS -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- SHORTCUT LOGO -->
    <link rel="shortcut icon" href="../images/logo.png">

    <link rel="stylesheet" href="../css/main.css" />
</head>

<!-- NAVBAR PART STARTS FROM HERE -->

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top">
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
                                <i class="bi bi-house"> </i> Home
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section2" class="nav-link">
                                <i class="bi bi-list-task"> </i> Service
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section3" class="nav-link">
                                <i class="bi bi-info-lg"> </i>About
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#section4" class="nav-link">
                                <i class="bi bi-telephone"> </i> Contact
                            </a>
                        </li>
                        <li class="nav-item ms-auto mb-2 mb-lg-0">
                            <a href="#" class="nav-link">
                                <i class="bi bi-person-circle"> </i> <?php echo $_SESSION['username']; ?>!
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../include/logout.php" class="nav-link">
                            <i class="bi bi-box-arrow-left"> </i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- NAVBAR PART ENDS FROM HERE -->

    <!-- BODY PART START FROM HERE -->
    <!-- HOME PART START FROM HERE-->
    <div id="section1" class="container-fluid text-center justify-content-center img p-5">
        <br>
        <h1 class="p-5 text-primary">
            Welcome To MyOnlineMeal
            &nbsp;&nbsp;
        </h1>
        <p class="text-primary">
            BEAST ONLINE FOOD ORDERING PLATFORM
            &nbsp;&nbsp;
        </p>
        <p class="text-primary">
            La migliore piattaforma online per ordinare cibo. visita una volta e goditi la giornata
            &nbsp;&nbsp;
        </p>
        <p class="text-primary">
            visita una volta e goditi la giornata
            &nbsp;&nbsp;
        </p>
        <h1>
            <div class="container">
                <a class="nav-link" href="./order.php">
                    <input class="btn btn-lg btn-outline-danger btn-block" type="submit" value=" Order Here">
                </a>
            </div>
        </h1>
    </div>
    <!-- HOME PART ENDS HERE -->

    <!-- SERVICE PART START FROM HERE -->
    <div id="section2" class="container-fluid text-strong bg-primary text-center text-light justify-content-center">
        <marquee behavior="alternate" scrollamount="12">
            <h1>Our-Services</h1>
        </marquee>
        <h1>
            <div class="row bg-white p-3">
                <div class="col-lg h-100 border border-danger rounded">
                    <a class="nav-link text-primary bg-warning p-1">
                        Todays Menu
                    </a>
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
                                    <img src="../images/choumin.jpg" class="d-block w-100" alt="choumin"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/momo.jpg" class="d-block w-100" alt="momo"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Forth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Fifth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
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

                <div class="col-lg h-100 border border-danger rounded">
                    <a class="nav-link text-primary bg-warning p-1">
                        Popular
                    </a>
                    <p>
                    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="./order.php">
                                    <img src="../images/choumin.jpg" class="d-block w-100" alt="choumin"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/momo.jpg" class="d-block w-100" alt="momo"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--  <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Forth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Fifth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg h-100 border border-danger rounded">
                    <a class="nav-link text-primary bg-warning p-1">
                        Suggestion
                    </a>
                    <p>
                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="./order.php">
                                    <img src="../images/choumin.jpg" class="d-block w-100" alt="choumin"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/momo.jpg" class="d-block w-100" alt="momo"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--  <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Forth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="./order.php">
                                    <img src="../images/biryani.jpg" class="d-block w-100" alt="biryani"> </a>
                                <div class="carousel-caption d-none d-md-block">
                                    <!--<h5>Fifth slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p> -->
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg h-100 border border-danger rounded">
                    <a class="nav-link text-primary bg-warning p-1">
                        Food Ordering
                    </a>
                    <p>
                    <h4 class="bg-secondary">
                        You can order food by directly calling us or you can send message to us.
                        you will receice your food 30 minutes latter of your ordering. <br>
                        Thank You. Have a nice day.
                    </h4>
                    </p>
                </div>
            </div>
        </h1>
    </div>
    <!-- SERVICE PART ENDS HERE -->

    <!-- ADOUT PART START FROM HERE-->
    <div id="section3" class="container-fluid text-center justify-content-center bg-primary text-light text-strong">
        <marquee behavior="alternate" scrollamount="12">
            <h1> About Us </h1>
        </marquee>
        <div class="row bg-secondary p-5 text-white">
            Retail food delivery is a courier service in which a restaurant, store, or independent food-delivery company
            delivers food to a customer.An order is typically made either through a restaurant or grocer's websiteor
            mobile app, or through a food ordering company. The delivered items can include entrees, sides, drinks,
            desserts, or grocery items and are typicallydelivered in boxes or bags. The delivery person will normally
            drive a car, but in bigger cities where homes and restaurants are closer together, they may use bikes or
            motorized scooters. Recently, autonomous vehicles have also been used to complete deliveries.Customers can,
            depending on the delivery company, choose to pay online or in person, with cash or card. A flat rate delivery
            fee is often charged with what the customer has bought. Sometimes no delivery fees are charged depending
            upon the situation.Tips are often customary for food delivery service. Contactless delivery may also be an
            option. Other aspects of food delivery include catering and wholesale food service deliveries to restaurants,
            cafeterias, health care facilities, and caterers by foodservice distributors.
        </div>
    </div>
    <!-- ABOUT PART ENDS HERE -->

    <!-- CONTACT PART START FROM HERE-->
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

                <!-- MAP PART START FROM HERE  -->
                <div class="col-md text-light ">
                    <iframe class="h-100 w-100 my-0 mx-0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3572.3040646729582!2d87.2755849!3d26.445926!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1643798027732!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- MAP PART ENDS HERE  -->
            </div>
        </div>
    </section>
    <!-- CONTACT PART ENDS HERE -->

    <!-- DATE PART START FROM HERE-->
    <section class="p-1 bg-warning">
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
    <!-- DATR PART ENDS FROM HERE -->

    <!-- COPY RIGHT STARTS FROM HERE-->
    <section class="p-1 bg-dark">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-white ">
                All right reserve &copy; bhOjaN <?php echo date("Y"); ?>
            </span>
        </div>
    </section>
    <!-- END OF COPY RIGHT PART -->

</body>

</html>