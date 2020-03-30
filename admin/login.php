<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChabadFoodFund</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-yellow p-4 fixed-top">
        <a class="h2 font-weight-bold text-uppercase text-white text-decoration-none" href="../index#" id="nav-title">Chabad<span class="text-dark">FoodFund</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container-fluid login mt-5 pt-5">
        <form class="form-signin" action="../php/login.php" method="POST">
            <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal mt-5">Login</h1>
            </div>

            <div class="form-label-group">
            <input type="text" id="email_address" class="form-control" name="email_address" placeholder="Email" required autofocus>
            <label for="email_address">Email</label>
            </div>

            <div class="form-label-group">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
            <label for="password">Password</label>
            </div>

            <div class="justify-content-end d-flex mb-3">
            <label>
                <a href="#">Forgot Password?</a>
            </label>
            </div>
            <button class="btn btn-lg btn-warning btn-block font-weight-bold" type="submit">Sign in</button>

            <?php
            if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == false) {
                    ?>
                    <br>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Invalid,</strong> username or password!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php
                    }
                }
            ?>
        </form>     
    </div>

    <div class="container-fluid bg-yellow p-5" id="contact">
        <div class="text-center text-dark p-3">
              <h6 class="font-weight-400">Chabad Food Fund is a non for profit 501(c) (3) federally tax exempt charitable organization.</h6>
              <h6 class="font-weight-400">(Tax ID: 88-8888888)</h6>
              <h6 class="font-weight-400">Make Tax Deductible Donations Payable to: </h6>
              <h6 class="font-weight-400">CHABAD FOOD FUND 9500 NW 38th street coral springs, FL 33065</h6>
              <h6 class="font-weight-400">213-465-8288 <br />Chabadfoodfund@gmail.com</h6>
        </div>
    </div>
    <div class="container-fluid bg-darkyellow">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                <p class="text-gray font-weight-light text-center my-auto small">&copy; Copyright 2019. Chabad Food Fund | Developed by Kirshy Media Inc.</p>
            </div>
        </div>
    </div>
    <script src="../bootstrap/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/popper.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>