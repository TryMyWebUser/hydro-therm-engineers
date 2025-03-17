<?php include "libs/load.php"; include 'header.php'; ?>

        <!-- rts banner area strart -->
        <div class="rts-banner-area rts-section-gap rts-breadcrumb-area pd-bread  position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-area-inner">
                            <span class="water-text">Product</span>
                            <h1 class="title">
                                Product
                            </h1>
                            <div class="nav-area-navigation">
                                <a href="index.php">home</a>
                                <a class="current" href="products.php">Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts banner area end -->

        <main class="ms-main rts-section-gapTop rts-section-gapBottom">
            <div class="container">
                <div id="primary" class="content-area single-product" dir="ltr">
                    <div class="site-main">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div id="product-470"
                            class="ms-single-product product type-product post-470 status-publish first instock product_cat-run product_tag-life product_tag-move product_tag-sport product_tag-trainers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <div class="row align-items-center">
                                <?php
                                    $pro = Operations::getSingleProduct();
                                    if (!empty($pro)) {
                                ?>
                                <div class="col-md-5 offset-lg-1">
                                    <div class="product-single-main-wrapper-single-left">
                                        <div class="banner-horizental">
                                            <div class="swiper swiper-container-h12 mb--30">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="slider-inner">
                                                            <img src="assets/<?= $pro['img']; ?>" alt="Image Not Found">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="ms-single-product__content" data-sal="slide-up" data-sal-delay="350"
                                        data-sal-duration="900">
                                        <h2 class="ms-single-product_title" style="color: #000;"><?= $pro['title']; ?></h2>
                                        <div class="woocommerce-product-details__short-description">
                                            <p>
                                                <?= $pro['dec']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } else { echo "<p>Product or Service Not Found</p>"; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php include "footer.php"; ?>