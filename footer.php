<style>
    
.footer{
    padding: 0;
    margin-top: 100px;
    background: #131E29;
}

.divider-line{
    width: 1px;
    height: 143px;
    opacity: 0.3;
    background: #FFF;
    padding: 0;
    margin-right: 10%;
}

.row{
    display: flex;
    flex-wrap: nowrap;
}

</style>

 <!-- Footer Section Start -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget about-footer">
                            <div class="f-logo mb-4">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/header-logo-dark.png" alt="Logo"></a>
                            </div>
                            <p>ProactiveCareNow is a DocGo Publication.</p>
                            <p>© 2024 DocGo, Inc. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="divider-line"></div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget about-footer">
                            <p>Privacy Policy  |  Terms of Service  |  DocGo</p>
                            <p>Care provided by Mobile Medical Healthcare, P.C. and affiliated practices.</p>
                        </div>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-nasdaq-img.png" alt="video"  />
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/certified-img.png" alt="picture"  />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!--
Javascript
========================================================-->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
    <script src="js/google-map.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/custom.js"></script>
    <?php wp_footer(); ?>
</body>

</html>