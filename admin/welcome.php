<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include 'temp/head.php'; ?>

    </head>

    <body class="link-sidebar">
        <!-- Toast -->
        <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body hstack align-items-start gap-6">
                <i class="ti ti-alert-circle fs-6"></i>
                <div>
                    <h5 class="text-white fs-3 mb-1">Welcome to Admin</h5>
                    <h6 class="text-white fs-2 mb-0">Hydro Therm Engineers</h6>
                </div>
                <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close">X</button>
            </div>
        </div>
        <!-- Preloader -->
        <div class="preloader">
            <!-- <img src="assets/icons/favicon.png" alt="loader" class="lds-ripple img-fluid" /> -->
            <h4 class="lds-ripple img-fluid">Hydro Therm Engineers</h4>
        </div>
        <div id="main-wrapper">
            <!-- Sidebar Start -->
            <?php include "temp/sideheader.php"; ?>
            <!--  Sidebar End -->
            <div class="page-wrapper">
                <!--  Header Start -->
                <?php include "temp/header.php"; ?>
                <!--  Header End -->

                <div class="body-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- -------------------------------------------- -->
                                <!-- Welcome Card -->
                                <!-- -------------------------------------------- -->
                                <div class="card text-bg-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="d-flex flex-column h-100">
                                                    <div class="hstack gap-3">
                                                        <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                                                            <iconify-icon icon="solar:course-up-outline" class="fs-7 text-muted"></iconify-icon>
                                                        </span>
                                                        <h5 class="text-white fs-6 mb-0 text-nowrap">
                                                            Welcome Back <br />
                                                            Admin
                                                        </h5>
                                                    </div>
                                                    <!-- <div class="mt-4 mt-sm-auto">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="opacity-75">Budget</span>
                                                                <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                                                    $98,450
                                                                </h4>
                                                            </div>
                                                            <div class="col-6 border-start border-light" style="--bs-border-opacity: 0.15;">
                                                                <span class="opacity-75">Expense</span>
                                                                <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                                                    $2,440
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-5 text-center text-md-end">
                                                <img src="assets/images/welcome-bg.png" alt="welcome" class="img-fluid mb-n7 mt-2" width="180" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php include "temp/colors.php"; ?>

            </div>

        </div>

        <div class="dark-transparent sidebartoggler"></div>
        
        <?php include "temp/footer.php"; ?>

    </body>
</html>
