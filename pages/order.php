<html>
    
<head>
    <title> Order </title>

    <!-- SHORTCUT LOGO -->
    <link rel="shortcut icon" href="../images/logo.png">
</head>

<body>

    <?php
    include_once('../include/navbar.php');
    ?>

    <br>
    <br>
    <br>

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