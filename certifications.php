<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar-alt.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/cert-breadcrumb.jpg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Certifications</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Certifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row gy-40">
                <?php

                    $select_query = "SELECT * FROM certificate";

                    $result = mysqli_query($conn, $select_query);

                    // Check for query errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $certificateID = $row['certificateID'];
                            $title = $row['title'];
                            $filePath = $row['filePath'];
                        
                ?>
                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2 cert-card">
                        <div class="img-shine cert-img">
                            <img src="./admin/<?php echo $filePath; ?>" alt="<?php echo $title; ?>">
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                    else {
                        echo
                        "<div class='text-center mt-4'>
                        <img src='./assets/img/empty.png' width='220'>
                        <p class='lead mt-3'>No Certifications Yet!</p>
                        </div>";
                    }
                ?>

            </div>
        </div>
    </section>


<?php include "./components/footer.php"; ?>