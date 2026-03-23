<?php
include "./components/header.php";
include "./components/navbar-alt.php";
include_once "./auth/data-ceo.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./admin/<?php echo $breadcrumb; ?>">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">The CEO's Desk</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>CEO Desk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="team-details-about-info">
                <div class="row gy-40 gx-80 align-items-center">
                    <div class="col-lg-6 position-relative">
                        <div class="team-details-thumb">
                            <img src="./admin/<?php echo $ceoImage; ?>" alt="team image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-page-box">
                            <h3 class="mt-n3 fw-semibold mb-1"><?php echo $title; ?></h3>
                        </div>
                        <div class="mt-30">
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>