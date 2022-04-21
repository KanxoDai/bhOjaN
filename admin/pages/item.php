<?php
//include auth_session.php file on all user panel pages
include("../include/auth_session.php");
include_once('../include/db.php');
$sql = 'SELECT * FROM items';
$result = mysqli_query($con, $sql);

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
                            <a href="./dashboard.php" class="nav-link">
                            <i class="bi bi-house"> </i> GoToHome
                            </a>
                        <li class="nav-item px-3">
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

            <?php
            $sn = 1;
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo '
                        <tr>
                        <td>
                            '.$sn.'
                        </td>
                        <td>
                            '.$row['name'].'
                        </td>
                        <td>
                            '.$row['price'].'
                        </td>
                        <td>
                            '.$row['type'].'
                        </td>
                    </tr>
                        ';
                        $sn = $sn + 1;

                    }
                }
            ?>
            
        </tbody>
    </table>
    <br>
    <hr>
    <br>
    <section class="p-3 text-center">
        <div class="container border border-warning">
            <div class="text-center container p-3 lead">
                <form class="form-signin" method="post" action="../include/addItem.php">
                    <br>
                    <label for="name" class="sr-only">Food Name</label>
                    <input type="text" name="name" class="form-control mb-3" placeholder="Food name" required autofocus><br>
                    <label for="inputEmail" class="sr-only">Price</label>
                    <input type="text" name="price" class="form-control mb-3" placeholder="Price of food" required>
                    <label for="type" class="sr-only">Type</label>
                    <input type="text" name="type" class="form-control mb-3" placeholder="Type" required><br>
                    <button class="btn btn-lg btn-outline-warning btn-block" name="submit" type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>