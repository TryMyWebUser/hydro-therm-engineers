<?php
    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user')) {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $products = Operations::getProductChecker($conn);
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
                                        <h4 class="mb-4 mb-sm-0 card-title">View Card</h4>
                                        <nav aria-label="breadcrumb" class="ms-auto">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item d-flex align-items-center">
                                                    <a class="text-muted text-decoration-none d-flex" href="index.php">
                                                        <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item" aria-current="page">
                                                    <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                                        Card View
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
                                    <h4 class="mb-0 fs-5">Product Cards</h4>
                                </div>
                            </div>

                            <?php
                                if (!empty($products)) {
                                    foreach ($products as $pro) {
                                        $category = $pro['category'];
                                        $qry = "SELECT * FROM `category` WHERE `category` = '$category'";
                                        $result = $conn->query($qry);
                                        $row = $result ? $result->fetch_assoc() : null;
                                        if ($row && $row['page'] === 'pro') {
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="<?= $pro['img']; ?>" alt="Card image" />
                                    <div class="card-body">
                                        <h5 class="card-title">Category: <?= $pro['category']; ?></h5>
                                        <h4 class="card-title"><?= $pro['title']; ?></h4>
                                        <p class="card-text"><?= $pro['dec']; ?></p>
                                        <a href="editProduct.php?edit_id=<?= $pro['id']; ?>">
                                            <button type="button" class="btn btn-square btn-outline-info me-1 p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561L12 6.439m7.921 3.2l-5.26 5.262L11.56 18l-.16.161c-.578.577-.867.866-1.185 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876m0 0l1.094-3.281c.258-.775.387-1.162.56-1.526q.309-.647.749-1.211c.248-.318.537-.607 1.114-1.184L8.5 9.939"/></svg>
                                            </button>
                                        </a>
                                        <a href="deletePro.php?delete_id=<?= $pro['id']; ?>">
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
                                    }
                                } else {
                                    echo "<p>No Data Found</p>";
                                }
                            ?>

                            <div class="col-12">
                                <div class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center">
                                    <h4 class="mb-0 fs-5">Service Cards</h4>
                                </div>
                            </div>

                            <?php
                                if (!empty($products)) {
                                    foreach ($products as $pro) {
                                        $category = $pro['category'];
                                        $qry = "SELECT * FROM `category` WHERE `category` = '$category'";
                                        $result = $conn->query($qry);
                                        $row = $result ? $result->fetch_assoc() : null;
                                        if ($row && $row['page'] === 'ser') {
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="<?= $pro['img']; ?>" alt="Card image" />
                                    <div class="card-body">
                                        <h5 class="card-title">Category: <?= $pro['category']; ?></h5>
                                        <h4 class="card-title"><?= $pro['title']; ?></h4>
                                        <p class="card-text"><?= $pro['dec']; ?></p>
                                        <a href="editProduct.php?edit_id=<?= $pro['id']; ?>">
                                            <button type="button" class="btn btn-square btn-outline-info me-1 p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561L12 6.439m7.921 3.2l-5.26 5.262L11.56 18l-.16.161c-.578.577-.867.866-1.185 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876m0 0l1.094-3.281c.258-.775.387-1.162.56-1.526q.309-.647.749-1.211c.248-.318.537-.607 1.114-1.184L8.5 9.939"/></svg>
                                            </button>
                                        </a>
                                        <a href="deletePro.php?delete_id=<?= $pro['id']; ?>">
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
                                    }
                                } else {
                                    echo "<p>No Data Found</p>";
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