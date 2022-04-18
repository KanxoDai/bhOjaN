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
    <title> Items </title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- BOOTSTRAP JS -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- SHORTCUT LOGO -->
    <link rel="shortcut icon" href="../images/logo.png">

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
                                <i class="bi bi-diagram-3-fill"> </i> Items
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
    <!-- End of navbar -->
    <br>
    <br>
    <br>
    <!-- body start from here -->
    <!-- table start here -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td> </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>