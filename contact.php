<?php
include "./components/header.php";
include "./components/navbar-alt.php";
// require_once "./auth/queries.php";

    // $recaptchaSecret = '6LfAHGAsAAAAAMWgbXTJSKOz5YST3KeWfLEOVI3l';
    // $response = $_POST['g-recaptcha-response'];
    // $remoteip = $_SERVER['REMOTE_ADDR'];

    // $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$remoteip}");
    // $responseData = json_decode($verify);

    // if ($responseData->success) {
    //     // Verified successfully
    //     //echo "Success!";
    // } else {
    //     // Failed verification
    //     //echo "reCAPTCHA failed. Please try again.";
    // }
?>

    <div class="breadcumb-wrapper" data-bg-src="./assets/img/contact.jpg">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="./">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space" id="contact-sec">
        <div class="contact-bg-shape1-1 jump shape-mockup" data-bottom="30%" data-left="2%">
            <img src="assets/img/shape/section_shape_2_3.jpg.png" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-5">
                    <div class="title-area">
                        <h2 class="sec-title">Get in Touch</h2>
                        <p>We’re available to discuss your engineering and environmental service needs.</p>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white"><img src="assets/img/icon/location-dot.svg" alt="icon"></div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Location:</h6>
                            <p class="about-contact-details-text">62B, Circular Road, Elekahia Housing Estate,<br> Oginigba Link Road, Port Harcourt.</p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Phone:</h6>
                            <p class="about-contact-details-text">
                                <a href="tel:+2347034131160">+234 703 4131 160</a>
                            </p>
                        </div>
                    </div>
                    <div class="about-contact-grid">
                        <div class="about-contact-icon text-white">
                            <img src="assets/img/icon/envelope.svg" alt="icon">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Email:</h6>
                            <p class="about-contact-details-text">
                                <a href="mailto:info@awaengineeringng.com">info@awaengineeringng.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="location-map contact-sec-map">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8137829.581724592!2d-1.872842340684235!3d5.175894829932491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd7aa32593b1%3A0x6e6feaafa6233b34!2sAwa%20Engineering%20Company%20Nig%20Limited!5e0!3m2!1sen!2sng!4v1770182645928!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address">
                <div class="thumb">
                    <img src="./assets/img/awa-building.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">Address:</h4>
                    <p class="text">62B Circular Rd, Elekahia, Port Harcourt 500101, Rivers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="space contact-area-5 z-index-common" id="contact-sec">
        <div class="container">
            <div class="row gx-60 gy-60 justify-content-center">
                <div class="col-lg-8">
                    <div class="appointment-wrap contact-wrap6">
                        <h2 class="form-title fw-semibold mb-35">Let’s Work Together</h2>
                        <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="firstName" required="required" placeholder="First Name">
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="lastName" required="required" placeholder="Last Name">
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="email" class="form-control" name="email" required="required" placeholder="Email Address">
                                </div>
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="tel" class="form-control" name="phone" required="required" placeholder="Phone Number">
                                </div>
                                <div class="form-group style-border2 style-radius col-md-12">
                                    <input type="text" class="form-control" name="subject" required="required" placeholder="Subject"> 
                                </div>
                                <div class="col-12 form-group style-border2 style-radius">
                                    <textarea placeholder="Type Your Message" name="request" required="required" class="form-control"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="g-recaptcha" data-sitekey="6LfAHGAsAAAAAPKpHPLI12ant7SZ5_dn1zAI6lc1"></div>
                                </div>
                                <div class="col-12 form-btn">
                                    <button class="th-btn style4">Submit Message 
                                        <span class="btn-icon">
                                            <img src="assets/img/icon/paper-plane.svg" alt="img">
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include "./components/footer.php" ?>