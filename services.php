<?php
include "libs/load.php";
include("header.php");
?> 

    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative services-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Services</span>
                        <h1 class="title">
                        Services
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="services.php">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
     
    <!-- rts service area start -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12 pr--25">

                    <div class="row g-24">
                        <?php
                            $category = Operations::getCategory();
                            if (!empty($category)) {
                                foreach ($category as $cate) {
                                    if ($cate['page'] === 'ser') {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="product-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="<?= ($cate['category'] === 'service' || $cate['category'] === 'services') ? 'services.php' : 'single-product.php?data=' . $cate['category'] ?>">
                                        <img src="assets/<?= $cate['img'] ?>" alt="product image">
                                    </a>
                                </div>
                                <div class="inner">
                                    <a href="<?= ($cate['category'] === 'service' || $cate['category'] === 'services') ? 'services.php' : 'single-product.php?data=' . $cate['category'] ?>">
                                        <h5 class="title my-0"><?= $cate['category'] ?></h5>
                                    </a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        <?php } } } else { echo "<p>Service Not Found</p>"; } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

<?php
include("footer.php");
?> 