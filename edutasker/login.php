<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edutasker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/logo.png" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <form action="#" method="post">
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                        Edutasker
                    </span>
                    <form class="login100-form validate-form p-b-33 p-t-5">

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="username" placeholder="User name"
                                style="color: #ffafaf;">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="pass" placeholder="Password"
                                style="color: #ffafaf;">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>
                        <?php
                        extract($_POST);
                        if (isset($pass) && isset($username)) {
                            if ($pass == "admin" && $username == "admin") {
                                $_SESSION['cle'] = 1;
                                echo "<h1>Connexion reussie</h1>";
                                require ("fonctions.php");
                                redirection('dashboard.php');
                            } else {
                                echo "<center><h4 style='width: 250px;border-radius: 10px;color: white; margin-top: 50px;'>Echec de connexion</h4></center>";
                            }
                        }
                        ?>
                        <div class="container-login100-form-btn m-t-32">
                            <input type="submit" value="Login" class="login100-form-btn">
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>
    </form>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

</html>