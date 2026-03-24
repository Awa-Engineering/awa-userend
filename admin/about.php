<?php
    $page = "About";
    include "./components/header.php";
    require_once "./auth/update.php";
    require_once "./auth/file.php";
?>

    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <?php
                                    
                        $select_query = "SELECT * FROM about LIMIT 1";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $aboutID = $row['aboutID'] ?? '';
                                $quoteTitle = $row['quoteTitle'] ?? '';
                                $quote = $row['quote'] ?? '';
                                $sectionOneTitle = $row['sectionOneTitle'] ?? '';
                                $sectionOneSubTitle = $row['sectionOneSubTitle'] ?? '';
                                $sectionOneText = $row['sectionOneText'] ?? '';
                                $sectionTwoTitle = $row['sectionTwoTitle'] ?? '';
                                $sectionTwoText = $row['sectionTwoText'] ?? '';
                                $sectionThreeText = $row['sectionThreeText'] ?? '';
                                $sectionThreeSubTextOne = $row['sectionThreeSubTextOne'] ?? '';
                                $sectionThreeSubTextTwo = $row['sectionThreeSubTextTwo'] ?? '';
                                $sectionThreeSubTextThree = $row['sectionThreeSubTextThree'] ?? '';
                                $sectionFourSubTitle = $row['sectionFourSubTitle'] ?? '';
                                $sectionFourText = $row['sectionFourText'] ?? '';
                                $extraOneTitle = $row['extraOneTitle'] ?? '';
                                $extraOneText = $row['extraOneText'] ?? '';
                                $extraTwoTitle = $row['extraTwoTitle'] ?? '';
                                $extraTwoText = $row['extraTwoText'] ?? '';
                                $extraThreeTitle = $row['extraThreeTitle'] ?? '';
                                $extraThreeText = $row['extraThreeText'] ?? '';
                                $extraFourTitle = $row['extraFourTitle'] ?? '';
                                $extraFourText = $row['extraFourText'] ?? '';
                                $extraFiveTitle = $row['extraFiveTitle'] ?? '';
                                $extraFiveText = $row['extraFiveText'] ?? '';
                                $extraSixTitle = $row['extraSixTitle'] ?? '';
                                $extraSixText = $row['extraSixText'] ?? '';
                            }
                        }

                    ?>

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">About Awa</h3>
                            </div>
                            <!-- <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="services"  class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Breadcrumb Image</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="breadcrumb" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="about_breadcrumb_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <hr />

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Quote Section</h3>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Quote Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $quoteTitle; ?>" name="quoteTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Quote</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="quote" class="form-control"><?php echo $quote; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_about_quote_btn" class="btn btn-danger text-white">Update Quote <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <!-- Quote left image -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Quote Image(left)</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="sectionOneImage" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="about_sectionOne_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Quote right image -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Quote Image(right)</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="sectionTwoImage" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="about_sectionTwo_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <hr />

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Section One</h3>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $sectionOneTitle; ?>" name="sectionOneTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Text Left</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="sectionOneText" id="aboutSection1" class="form-control"><?php echo $sectionOneText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Text Right</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="sectionTwoText" id="aboutSection2" class="form-control"><?php echo $sectionTwoText; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_about_sectionOne_btn" class="btn btn-danger text-white">Update Section One <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <hr />

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Section Two</h3>
                            </div>
                        </div>
                    </div>

                    

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $sectionTwoTitle; ?>" name="sectionTwoTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Sub-title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $sectionFourSubTitle; ?>" name="sectionFourSubTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">First Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraOneTitle; ?>" name="extraOneTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">First Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraOneText" id="extraOneText" class="form-control"><?php echo $extraOneText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Second Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraTwoTitle; ?>" name="extraTwoTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Second Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraTwoText" id="extraTwoText" class="form-control"><?php echo $extraTwoText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Third Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraThreeTitle; ?>" name="extraThreeTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Third Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraThreeText" id="extraThreeText" class="form-control"><?php echo $extraThreeText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Fourth Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraFourTitle; ?>" name="extraFourTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Fourth Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraFourText" id="extraFourText" class="form-control"><?php echo $extraFourText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Fifth Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraFiveTitle; ?>" name="extraFiveTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Fifth Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraFiveText" id="extraFiveText" class="form-control"><?php echo $extraFiveText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Sixth Feature Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $extraSixTitle; ?>" name="extraSixTitle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Sixth Feature Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="extraSixText" id="extraSixText" class="form-control"><?php echo $extraSixText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_about_sectionTwo_btn" class="btn btn-danger text-white">Update Section Two <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <hr />

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Section Three</h3>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Three Image</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="sectionFourImage" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="about_sectionFour_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">About ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $aboutID; ?>" name="aboutID" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Our Mission Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $sectionThreeSubTextTwo; ?>" name="sectionThreeSubTextTwo" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Our Mission Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="sectionThreeText" class="form-control"><?php echo $sectionThreeText; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Our Vision Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $sectionThreeSubTextOne; ?>" name="sectionThreeSubTextOne" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Our Vision Text</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="sectionFourText" class="form-control"><?php echo $sectionFourText; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_about_sectionFour_btn" class="btn btn-danger text-white">Update Section Four <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>