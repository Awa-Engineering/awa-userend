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
                        <form action="mail.php.html" method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="firstName" id="firstName" required placeholder="First Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="lastName" id="lastName" required placeholder="Last Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" required placeholder="Email Address*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="tel" class="form-control" name="phone" id="phone" required placeholder="Phone Number*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <input type="text" class="form-control" name="companyName" id="companyName" required placeholder="Company Name*">
                                </div>

                                <div class="form-group style-border2 style-radius col-lg-6">
                                    <select name="service" id="service" required class="form-select">
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
                                    <textarea placeholder="Tell us about your project" required name="decription" class="form-control"></textarea>
                                </div>
                                <div class="col-12 form-btn">
                                    <button class="th-btn style4">Submit Message 
                                        <span class="btn-icon"><img src="assets/img/icon/paper-plane.svg" alt="img"></span>
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

<?php include "./components/footer.php"; ?>