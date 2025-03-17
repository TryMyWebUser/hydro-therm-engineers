<?php
include "libs/load.php";
include("header.php");
?> 

    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative gallery-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Gallery</span>
                        <h1 class="title">
                        Gallery
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="index.php">home</a>
                            <a class="current" href="gallery.php">Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
     
    
    <!-- rts projects area start -->
    <div class="rts-projects-area-inner rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">

                            <div class="row g-24">
                                <?php
                                $conn = Database::getConnect();
                                    $gallery = Operations::getGallery($conn);
                                    if (!empty($gallery)) {
                                        foreach ($gallery as $img) {
                                ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="single-project-card-inner">
                                        <a href="#0" class="thumbnail">
                                            <img src="assets/<?= $img['img']; ?>" alt="Gallery Image Not Found">
                                        </a>
                                    </div>
                                </div>
                                <?php } } else { echo "<p>Gallery Image Not Found!</p>"; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts projects areaend -->

<?php
include("footer.php");
?>