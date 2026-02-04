    <footer class="footer-wrapper footer-layout3 bg-white">
        <div class="container th-container2">
            <div class="widget-area bg-themedark">
                <div class="footer-container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <div class="th-widget-about">
                                    <div class="about-logo">
                                        <a href="./">
                                            <img src="./assets/img/awa-logo-light.svg" width="200" alt="Logo">
                                        </a>
                                    </div>
                                    <p class="about-text">Delivering professional engineering and environmental services across the oil & gas value chain.</p>
                                    <div class="th-social style5">
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://www.youtube.com/" target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Get In Touch</h3>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                                        <div class="details">
                                            <p>62B, Circular Road, Elekahia Housing Estate.</p>
                                        </div>
                                    </div>
                                    <div class="info-box_text align-items-center mb-4">
                                        <div class="icon">
                                            <img src="assets/img/icon/phone.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="tel:+2347034131160" class="info-box_link">+234 703 4131 160</a></p>
                                        </div>
                                    </div>
                                    <div class="info-box_text align-items-center">
                                        <div class="icon">
                                            <img src="assets/img/icon/envelope.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="mailto:info@awaengineeringng.com" class="info-box_link">info@awaengineeringng.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Quick Link</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="./">Home</a></li>
                                        <li><a href="faq">FAQ's</a></li>
                                        <li><a href="services">Services</a></li>
                                        <li><a href="projects">Projects</a></li>
                                        <li><a href="terms">Terms of use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">The Company</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="about">About us</a></li>
                                        <li><a href="team">Team</a></li>
                                        <li><a href="certifications">Certifications</a></li>
                                        <li><a href="ceo">The CEO's desk</a></li>
                                        <li><a href="contact">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area" data-bg-src="./assets/img/fotter-bg.svg">
            <div class="container th-container2">
                <div class="copyright-wrap bg-white">
                    <div class="footer-container">
                        <div class="row gy-2 align-items-center justify-content-center">
                            <div class="col-12 text-center">
                                <p class="copyright-text"><i class="fal fa-copyright"></i> <script>document.write(new Date().getFullYear());</script> AWA, All rights reserved. Built By <a href="https://www.webify.com.ng" target="_blank">Webify</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      document.getElementById("contactForm").addEventListener("submit", function(e) {
        // Get the response token
        var response = grecaptcha.getResponse();

        // Check if the user has completed the reCAPTCHA
        if (response.length === 0) {
          e.preventDefault(); // Stop form submission
          alert("Please verify you are not a robot.");
          return false;
        }
      });
    </script>

</body>

</html>