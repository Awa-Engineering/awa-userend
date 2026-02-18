<?php
include "./components/header.php";
include "./components/navbar-alt.php";
require_once "./auth/queries.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['new_quote_btn'])) {

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        $recaptchaSecret = '6LfAHGAsAAAAAMWgbXTJSKOz5YST3KeWfLEOVI3l';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$remoteip}");
        $responseData = json_decode($verify);

        if ($responseData->success) {
            // Verified successfully
            // echo "Success!";
        } else {
            // Failed verification
            echo "reCAPTCHA failed. Please try again.";
        }

    } else {
        echo "Please complete the reCAPTCHA.";
    }
}

?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/faq-breacrumb.jpeg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Request Quote</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Request Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space contact-area-5 z-index-common">
        <div class="container">
            <div class="row gx-60 gy-60 justify-content-end">
                <div class="col-lg-8 mx-auto">
                    <div class="appointment-wrap contact-wrap6">
                        <form id="quoteForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="row">
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="firstName" required placeholder="First Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="lastName" required placeholder="Last Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="email" class="form-control" name="email" required placeholder="Email Address*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="tel" class="form-control" name="phone" required placeholder="Phone Number*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="company" required placeholder="Company Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <select name="service" required class="form-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select Service Type</option>
                                        <option value="Environmental Engineering">Environmental Engineering</option>
                                        <option value="Waste Management">Waste Management</option>
                                        <option value="Environmental Studies">Environmental Studies</option>
                                        <option value="Fumigation and Pest-Odor Control">Fumigation and Pest-Odor Control</option>
                                        <option value="Procurement Services">Procurement Services</option>
                                        <option value="Corrosion Control">Corrosion Control</option>
                                        <option value="Environmental Management System (EMS)">Environmental Management System (EMS)</option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>

                                <div class="col-12 form-group style-border2 style-radius">
                                    <textarea placeholder="Tell us about your project" required name="description" class="form-control"></textarea>
                                </div>
                                <div class="col-12 mb-20">
                                    <div class="g-recaptcha" data-sitekey="6LfAHGAsAAAAAPKpHPLI12ant7SZ5_dn1zAI6lc1"></div>
                                </div>
                                <div class="col-12 form-btn">
                                    <button class="th-btn style4" type="submit" name="new_quote_btn">Submit Message 
                                        <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>