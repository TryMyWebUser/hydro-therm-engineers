<?php
    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user')) {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $gallery = Operations::getGallery($conn);
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
                        <div class="card card-body py-3">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="d-sm-flex align-items-center justify-space-between">
                                        <h4 class="mb-4 mb-sm-0 card-title">View Galley</h4>
                                        <nav aria-label="breadcrumb" class="ms-auto">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item d-flex align-items-center">
                                                    <a class="text-muted text-decoration-none d-flex" href="index.php">
                                                        <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item" aria-current="page">
                                                    <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                                        Galler View
                                                    </span>
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12">
                                <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                                    <h4 class="mb-0 fs-5">Gallery Cards</h4>
                                </div>
                            </div>

                            <?php
                                if (!empty($gallery)) {
                                    foreach ($gallery as $img) {
                                        
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="<?= $img['img']; ?>" alt="Card image" />
                                    <div class="card-body">
                                        <a href="deleteGallery.php?delete_id=<?= $img['id']; ?>">
                                            <button type="button" class="btn btn-square btn-outline-danger ms-1 p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M13.5 6.5V7h5v-.5a2.5 2.5 0 0 0-5 0m-2 .5v-.5a4.5 4.5 0 1 1 9 0V7H28a1 1 0 1 1 0 2h-1.508L24.6 25.568A5 5 0 0 1 19.63 30h-7.26a5 5 0 0 1-4.97-4.432L5.508 9H4a1 1 0 0 1 0-2zM9.388 25.34a3 3 0 0 0 2.98 2.66h7.263a3 3 0 0 0 2.98-2.66L24.48 9H7.521zM13 12.5a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0v-10a1 1 0 0 1 1-1m7 1a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0z"/></svg>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <?php
                                    }
                                } else {
                                    echo "<p>Gallery Image Not Found</p>";
                                }
                            ?>

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