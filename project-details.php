<?php
include "./components/header.php";
include "./components/navbar-alt.php";
include_once "./auth/data-project.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./admin/<?php echo $heroImage; ?>">
        <div class="breadcumb-overlay" data-bg-src="assets/img/bg/breadcumb-bg-overlay.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title"><?php echo $title; ?></h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li><a href="projects">Projects</a></li>
                            <li><?php echo $title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="project-details-page space-top space-extra2-bottom">
        <div class="container">
            <div class="page-img" style="width:100%; height: 600px; overflow: hidden;">
                <img src="./admin/<?php echo $heroImage; ?>" alt="img" style="width:100%; height: 100%; object-fit: cover; display: block;">
            </div>

            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mt-30">
                        <p class="text-theme mb-0"><?php echo $categoryTitle; ?></p>
                        <h2 class="fw-semibold mb-3"><?php echo $title; ?></h2>
                        <?php echo $description; ?>

                        <div class="row gx-40 gy-40 align-items-center mt-20">
                            <?php foreach ($project_media_images as $img): ?>
                            <div class="col-lg-6">
                                <div class="page-img">
                                    <img src="./admin/<?php echo $img; ?>" alt="Service Image" style="object-fit: cover; height: 300px; width: 100%;">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <h3 class="widget_title">Project Information</h3>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <div class="box-icon"><i class="fas fa-user"></i></div>
                                        <div><span class="text">Client :</span> <strong class="title"><?php echo $client; ?></strong></div>
                                    </li>
                                    <li>
                                        <div class="box-icon"><i class="fas fa-layer-group"></i></div>
                                        <div><span class="text">Category :</span> <strong class="title"><?php echo $categoryTitle; ?></strong></div>
                                    </li>
                                    <li>
                                        <div class="box-icon"><i class="fas fa-calendar-days"></i></div>
                                        <div><span class="text">Date:</span> <strong class="title"><?= date('d M Y', strtotime($projectDate)) ?></strong></div>
                                    </li>
                                    <li>
                                        <div class="box-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div><span class="text">Location:</span> <strong class="title"><?php echo $location; ?></strong></div>
                                    </li>
                                    <li>
                                        <div class="box-icon"><i class="fas fa-info-circle"></i></div>
                                        <div><span class="text">Status:</span> <strong class="title"><?php echo $status; ?></strong></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>