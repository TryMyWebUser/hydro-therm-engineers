<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include "temp/head.php" ?>
        
    </head>

    <body class="link-sidebar">
        <!-- Preloader -->
        <div class="preloader">
            <!-- <img src="assets/icons/favicon.png" alt="loader" class="lds-ripple img-fluid" /> -->
            <h4 class="lds-ripple img-fluid">Hydro Therm Engineers</h4>
        </div>
        <div id="main-wrapper">
            <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100 my-5 my-xl-0">
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <div class="card mb-0 bg-body auth-login m-auto w-100">

                                <div class="card-body">
                                    <a href="index.php" class="text-nowrap logo-img d-block mb-4 w-100">
                                        <img src="assets/icons/favicon.png" class="dark-logo" alt="Logo-Dark" />
                                    </a>
                                    <h2 class="lh-base mb-4">Admin Log In</h2>
    
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email or Username</label>
                                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter your Username" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Login</button>
                                    </form>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
        
        <?php include "temp/footer.php"; ?>
    
    </body>
</html>