<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $conn = Database::getConnect();
    $cate = Operations::getCate($conn);

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['page']) && isset($_POST['category']))
        {
            $getID = $_GET['edit_id'] ?? "";
            $page = $_POST['page'] ?? "";
            $img = $_FILES['img'] ?? "";
            $cate = $_POST['category'] ?? "";
            $error = User::updateCategory($getID, $page, $img, $cate, $conn);
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
                                        <h4 class="mb-4 mb-sm-0 card-title">Edit Card Form</h4>
                                        <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                        <nav aria-label="breadcrumb" class="ms-auto">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item d-flex align-items-center">
                                                    <a class="text-muted text-decoration-none d-flex" href="index.php">
                                                        <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item" aria-current="page">
                                                    <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                                        Card Edit
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
                                <div class="card card-body">
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">Page Select</label>
                                            <select class="form-select" id="inlineFormCustomSelect" name="page">
                                                <option value="<?= $cate['page']; ?>">Choose The Page...</option>
                                                <option value="pro">Product Page</option>
                                                <option value="ser">Service Page</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image Upload</label><br>
                                            <img src="<?= $cate['img']; ?>" class="mb-2" style="width: 6rem; box-shadow: 0 0 0 2px; border-radius: 5px;" alt="Image Not Found"><br>
                                            <input type="file" name="img" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Title" name="category" value="<?= $cate['category']; ?>">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" name="submit" class="btn btn-primary hstack gap-6">
                                                        <i class="ti ti-send fs-4"></i>
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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