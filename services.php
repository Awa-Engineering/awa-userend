<?php
include "./components/header.php";
include "./components/navbar-alt.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/cert-breadcrumb.jpg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra2-bottom mb-40">
        <div class="container">
            <div class="row gy-4">
                <?php
                    require_once "./config/db.php";

                    $serviceLinks = [
                        1 => "environmental-engineering",
                        2 => "waste-management",
                        3 => "environmental-studies",
                        4 => "fumigation-pest-odor-control",
                        5 => "procurement-services",
                        6 => "corrosion-control"
                    ];

                    $select_query = "SELECT 
                        services.serviceID,
                        services.title,
                        services.firstParagraph,
                        hero.filePath AS hero_filePath
                    FROM services
                    LEFT JOIN hero ON hero.serviceID = services.serviceID";

                    $result = mysqli_query($conn, $select_query);

                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $serviceID = $row['serviceID'];
                            $link = isset($serviceLinks[$serviceID]) 
                                ? $serviceLinks[$serviceID] 
                                : "#"; // fallback
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="property-card6">
                                <div class="property-card-thumb img-shine">
                                    <img 
                                        src="./admin/<?php echo $row['hero_filePath']; ?>" 
                                        alt="<?php echo htmlspecialchars($row['title']); ?>"
                                    >
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title">
                                        <a href="<?php echo $link; ?>">
                                            <?php echo $row['title']; ?>
                                        </a>
                                    </h4>
                                    <p class="property-card-text">
                                        <?php 
                                            echo strlen($row['firstParagraph']) > 115 
                                            ? substr($row['firstParagraph'], 0, 115) . '...' 
                                            : $row['firstParagraph']; 
                                        ?>
                                    </p>
                                    <div class="property-btn-wrap">
                                        <div class="btn-wrap">
                                            <a href="<?php echo $link; ?>" class="th-btn style-border8 th-btn-icon">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    } else {
                        echo "
                        <div class='text-center mt-4'>
                            <img src='./assets/img/empty.png' width='220'>
                            <p class='lead mt-3'>No Services Yet!</p>
                        </div>";
                    }
                ?>
                
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>