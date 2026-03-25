<?php
include "./components/header.php";
include "./components/navbar-alt.php";
include_once "./auth/data-cor.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./admin/<?php echo $breadcrumb_filePath; ?>">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title"><?php echo $title; ?></h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li><a href="services">Services</a></li>
                            <li><?php echo $title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single mb-40">
                        <div class="page-img mb-25">
                            <img src="./admin/<?php echo $hero_filePath; ?>" alt="Image">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title fw-semibold"><?php echo $title; ?></h2>
                            <div class="mb-30">
                                <?php echo $firstParagraph; ?>
                            </div>

                            <div class="row gy-40 align-items-center">
                                <?php foreach ($media_images as $imagePath): ?>
                                <div class="col-xl-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $imagePath; ?>" alt="Service Image">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <h4 class="fw-semibold mb-10 mt-30">Provide service</h4>
                            <div class="row gy-40">
                                <div class="col-sm-6 col-xl-6">
                                    <div class="process-card3 py-5 text-start">
                                        <h2 class="box-title">Experienced</h2>
                                        <p class="box-text">Awa Engineering has a well-developed personnel profile consisting of highly qualified experienced management team.</p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-6">
                                    <div class="process-card3 py-5 text-start">
                                        <h2 class="box-title">Professional Service</h2>
                                        <p class="box-text">we pride ourselves to always provide our services with every degree of professionalism.</p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-6">
                                    <div class="process-card3 py-5 text-start">
                                        <h2 class="box-title">Public Projects</h2>
                                        <p class="box-text">Our experience in executing public’s projects cannot be over emphasized.</p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-6">
                                    <div class="process-card3 py-5 text-start">
                                        <h2 class="box-title">Superior Quality</h2>
                                        <p class="box-text">In Awa Engineering; Quality Control (QC)/ Quality Assurance (QA) is an integral part of all our project implementation process.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-30">
                                <?php echo $secondParagraph; ?>
                            </div>

                            <div class="row gx-40 gy-40 align-items-center mt-30">
                                <?php foreach ($media_two_images as $image_two_Path): ?>
                                <div class="col-lg-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $image_two_Path; ?>" alt="Image" style="object-fit: cover; height: 300px; width: 100%;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-30">
                                <?php echo $thirdParagraph; ?>
                            </div>

                            <div class="row gx-40 gy-40 align-items-center mt-30">
                                <?php foreach ($media_three_images as $image_three_Path): ?>
                                <div class="col-lg-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $image_three_Path; ?>" alt="Image" style="object-fit: cover; height: 300px; width: 100%;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-30">
                                <?php echo $fourthParagraph; ?>
                            </div>

                            <div class="row gx-40 gy-40 align-items-center mt-30">
                                <?php foreach ($media_four_images as $image_four_Path): ?>
                                <div class="col-lg-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $image_four_Path; ?>" alt="Image" style="object-fit: cover; height: 300px; width: 100%;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-30">
                                <?php echo $fifthParagraph; ?>
                            </div>

                            <div class="row gx-40 gy-40 align-items-center mt-30">
                                <?php foreach ($media_five_images as $image_five_Path): ?>
                                <div class="col-lg-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $image_five_Path; ?>" alt="Image" style="object-fit: cover; height: 300px; width: 100%;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-30">
                                <?php echo $sixthParagraph; ?>
                            </div>

                            <div class="row gx-40 gy-40 align-items-center mt-30">
                                <?php foreach ($media_six_images as $image_six_Path): ?>
                                <div class="col-lg-6">
                                    <div class="page-img">
                                        <img src="./admin/<?php echo $image_six_Path; ?>" alt="Image" style="object-fit: cover; height: 300px; width: 100%;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "./components/services-navbar.php"; ?>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>