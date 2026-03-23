<?php
require_once "./config/db.php";
include "./components/header.php";
include "./components/navbar-alt.php";
?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/faq-breacrumb.jpeg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">FAQ's</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Faq</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xl-4">
                    <div class="title-area"><span class="sub-title2">Have a Questions?</span>
                        <h2 class="sec-title">Frequently Asked Question</h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area">
                        <p class="sec-text">Find answers to commonly asked questions about Awa Engineering Company Limited, our services, partnerships, and project delivery approach. If you need further clarification, our team is always ready to assist.</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-12">
                    <div class="accordion-2 accordion" id="faqAccordion">
                        <?php

                            $select_query = "SELECT * FROM faq";

                            $result = mysqli_query($conn, $select_query);

                            // Check for query errors
                            if (!$result) {
                                die("Query failed: " . mysqli_error($conn));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $faqID = $row['faqID'];
                                    $question = $row['question'];
                                    $answer = $row['answer'];
                                
                        ?>
                        <div class="accordion-card style2">
                            <div class="accordion-header" id="collapse-item-<?php echo $faqID; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faqID; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $faqID; ?>"><?php echo $question; ?></button>
                            </div>
                            <div id="collapse-<?php echo $faqID; ?>" class="accordion-collapse collapse" aria-labelledby="collapse-item-<?php echo $faqID; ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text"><?php echo $answer; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include "./components/footer.php"; ?>