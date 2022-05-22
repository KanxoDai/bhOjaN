    <!-- Contact Start -->
    <section class="p-5 text-strong" style="background-color:#111;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md text-light " id="section5">
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
    <section class="p-1 bg-warning">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-dark ">
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

    <!-- Footer Start -->
    <footer class="bg-info imggaa">
        <div class="container text-center footer-section">
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6 ">
                    <h6>
                        <a class="nav-link" href="#section3">Nav Bar</a>
                        <span class="text-white">
                            Home <br>
                            Category<br>
                            Foods<br>
                            About<br>
                            Contact
                        </span>
                    </h6>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>
                        <a class="nav-link" href="#section3">Category</a>
                        <span class="text-white">
                            Home <br>
                            Category<br>
                            Foods<br>
                            About<br>
                            Contact
                        </span>
                    </h6>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>
                        <a class="nav-link" href="#section3">Foods</a>
                        <span class="text-white">
                            Home <br>
                            Category<br>
                            Foods<br>
                            About<br>
                            Contact
                        </span>
                    </h6>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>
                        <a class="nav-link" href="#section3">About</a>
                        <span class="text-white">
                            Home <br>
                            Category<br>
                            Foods<br>
                            About<br>
                            Contact
                        </span>
                    </h6>
                </div>
            </div>
        </div>
        <br>
    </footer>
    <!-- Footer Ends -->

    <!-- Copy right start -->
    <section class="p-1 bg-dark imgga">
        <div class="container text-dark text-center">
            <span class="h1 lead fw-bold text-white ">
                &copy; bhOjaN <?php echo date("Y"); ?>
                Created By <a href="#" class="text-dark">Amit Ghimire</a>
            </span>
        </div>
    </section>
    <!-- Copy right Ends -->

    </body>

    </html>