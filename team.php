<?php 
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar-alt.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/cert-breadcrumb.jpg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Team</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container z-index-common">
            <div class="row gy-30">
                <?php

                    $select_query = "SELECT * FROM team";

                    $result = mysqli_query($conn, $select_query);

                    // Check for query errors
                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $teamID = $row['teamID'];
                            $fullName = $row['fullName'];
                            $designation = $row['designation'];
                            $filePath = $row['filePath'];
                        
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="th-team team-card style4">
                        <div class="img-wrap">
                            <div class="team-img">
                                <img src="./admin/<?php echo $filePath; ?>" alt="Team" style="height: 480px;">
                            </div>
                        </div>
                        <div class="team-card-content d-flex justify-content-center">
                            <div class="media-left text-center">
                                <h3 class="box-title"><?php echo $fullName; ?></h3>
                                <span class="team-desig"><?php echo $designation; ?></span>
                            </div>
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
                        <p class='lead mt-3'>No team portraits yet!</p>
                        </div>";
                    }
                ?>
            
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>