<?php
include "./components/header.php";
include "./components/navbar-alt.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/faq-breacrumb.jpeg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Projects</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row gy-40 mb-40">

                <?php
                    $select_query = "SELECT 
                                        p.projectID,
                                        p.title,
                                        p.filePath AS heroImage,
                                        p.client,
                                        p.projectDate,
                                        p.projectCategoryID,
                                        p.location,
                                        p.description,
                                        c.categoryID,
                                        c.title AS categoryTitle
                                    FROM projects p
                                    JOIN project_categories c ON c.categoryID = p.projectCategoryID;";

                    $result = mysqli_query($conn, $select_query);

                    if (!$result) {
                        die("Query failed: " . mysqli_error($conn));
                    }

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $categoryTitle = $row['categoryTitle'];
                            $className = strtolower(str_replace(' ', '', $categoryTitle));
                ?>
                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./admin/<?php echo $row['heroImage']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="project-details?id=<?php echo $row['projectID']; ?>"><?php echo $row['title']; ?></a>
                                </h4>
                                <p class="property-card-subtitle"><?php echo $categoryTitle; ?></p>
                            </div>
                            <div class="btn-wrap">
                                <a href="project-details?id=<?php echo $row['projectID']; ?>" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
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
                        <p class='lead mt-3'>No Projects Yet!</p>
                        </div>";
                    }
                ?>

                <!-- <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project2.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="j-g-gas-oil-field">J+G gas and oil field</a>
                                </h4>
                                <p class="property-card-subtitle">Post Impact Assessment study (PIA)</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="j-g-gas-oil-field" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project3-1.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="phrc">Port Harcourt Refining Company Limited (PHRC)</a>
                                </h4>
                                <p class="property-card-subtitle">Environmental Impact Assessment (EIA)</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="phrc" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project4-1.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="aveon-offshore">Aveon Offshore</a>
                                </h4>
                                <p class="property-card-subtitle">Environmental Compliance monitoring</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="aveon-offshore" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project5.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="halliburton-energy-services">Halliburton Energy Services</a>
                                </h4>
                                <p class="property-card-subtitle">Environmental Compliance monitoring</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="halliburton-energy-services" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project6-2.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="ndpr">Niger Delta Petroleum Resources (NDPR)</a>
                                </h4>
                                <p class="property-card-subtitle">Domestic Waste Management</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="ndpr" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="property-card7 style2">
                        <div class="property-card-thumb img-shine">
                            <img src="./assets/img/project/project7-1.jpg" alt="img">
                        </div>
                        <div class="property-card-details">
                            <div class="media-left">
                                <h4 class="property-card-title">
                                    <a href="cameron-offshore">Cameron offshore hazardous waste evacuation</a>
                                </h4>
                                <p class="property-card-subtitle">Domestic Waste Management</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="cameron-offshore" class="icon-btn">
                                    <img src="assets/img/icon/arrow-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    
<?php include "./components/footer.php"; ?>