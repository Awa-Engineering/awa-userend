<?php
include "./components/header.php";
include "./components/navbar-alt.php";
include_once "./auth/data-about.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./admin/<?php echo $breadcrumb; ?>">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space-top bg-smoke3" id="about-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="title-area">
                        <h2 class="sec-title"><?php echo $quoteTitle; ?></h2>
                        <p class="sec-text"><?php echo $quote; ?></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="contact" class="th-btn style4 btn-sm th-btn-icon">Talk to us</a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="img-box1">
                        <div class="img1 img-shine"
                            data-mask-src="assets/img/shape/about-1-mask.png"
                            style="height:350px;width:100%;overflow:hidden;">
                            <img src="./admin/<?php echo $sectionOneImage; ?>"
                                alt="about"
                                style="height:100%;width:100%;object-fit:cover;display:block;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="img-box1">
                        <div class="img1 img-shine"
                            data-mask-src="assets/img/shape/about-1-mask.png"
                            style="height:350px;width:100%;overflow:hidden;">
                            <img src="./admin/<?php echo $sectionTwoImage; ?>"
                                alt="About"
                                style="height:100%;width:100%;object-fit:cover;display:block;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-60">
                <div class="row gy-40 flex-row-reverse align-items-center">
                    <div class="col-xl-3 text-xl-end">
                        <div class="about-tag">
                            <div class="about-experience-tag">
                                <span class="circle-title-anime text-title">Engineering Energy <i class="fas fa-star"></i> Environmental</span>
                            </div>
                            <div class="about-tag-thumb">
                                <img src="./assets/img/about_circle.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="about-wrap1">
                            <p class="about-text text-title"><?php echo $sectionOneTitle ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="service-area-1 overflow-hidden space-bottom bg-smoke3 pt-20">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-6 col-md-6">
                    <div class="service-card">
                        <div class="box-content">
                            <?php echo $sectionOneText ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-card">
                        <div class="box-content">
                            <?php echo $sectionTwoText ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space bg-black2 position-relative" id="process-area2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-white"><?php echo $sectionTwoTitle; ?></h2>
                        <p class="sec-text text-white"><?php echo $sectionFourSubTitle; ?></p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraOneTitle ?></h3>
                            <?php echo $extraOneText; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraTwoTitle ?></h3>
                            <?php echo $extraTwoText; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraThreeTitle ?></h3>
                            <?php echo $extraThreeText; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraFourTitle ?></h3>
                            <?php echo $extraFourText; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraFiveTitle ?></h3>
                            <?php echo $extraFiveText; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="process-card2">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $extraSixTitle ?></h3>
                            <?php echo $extraSixText; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="bg-white">
        <div class="container">
            <div class="video-area-1-1 space-bottom position-relative" data-sec-pos="top-half" data-pos-for="#process-area2">
                <div class="video-wrap1 style2 overflow-hidden">
                    <div class="video-box1">
                        <img src="./admin/<?php echo $sectionFourImage ?>" alt="img">
                    </div>
                    <div class="video-wrap-details bg-smoke3">
                        <div class="title-area mb-45">
                            <h2 class="sec-title"><?php echo $sectionThreeSubTextTwo; ?></h2>
                            <p class="sec-text"><?php echo $sectionThreeText; ?></p>
                        </div>
                        <div class="title-area mb-45">
                            <h2 class="sec-title"><?php echo $sectionThreeSubTextOne; ?></h2>
                            <p class="sec-text"><?php echo $sectionFourText; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>