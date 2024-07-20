<!-- START FOOTER -->
<footer class="bg_dark footer_dark">
    <div class="footer_top" style="padding: 11px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-3 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="index.html"><img src="<?= base_url(); ?>assets/frontend_assets/images/logo.jpg" alt="logo" style="height: 70px; width: 70px;"></a>
                        </div>
                        <p style="text-align: justify;">Newton Academy was created by the vision and toil to be the most premier coaching institute for IIT JEE Main, JEE Advanced, NEET and Foundation preparations.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="widget">
                        <h4 class="widget_title">Useful Links</h4>
                        <ul class="widget_links">
                            <li><a href="courses">Our Courses</a></li>
                            <li><a href="mission">Our Mission</a>
                            <li><a href="career">Career</a>
                            <li><a href="facility">Our Facility</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="widget">
                        <?php
                        foreach ($address1 as $key) { ?>
                            <h4 class="widget_title">Address-1</h4>
                            <ul class="contact_info contact_info_light">
                                <p>OFFICE NAME:- <?= $key->office_name; ?></p>
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p><?= $key->address; ?></p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a class="m1" href="mailto:newtonacademy.headoffice@gmail.com"><?= $key->email; ?></a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p><?= $key->mobile_no; ?></p>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="widget">
                        <?php
                        foreach ($address2 as $key) { ?>
                            <h4 class="widget_title">Address-2</h4>
                            <ul class="contact_info contact_info_light">
                                <p>BRANCH OFFICE:-  <?= $key->office_name; ?></p>
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p class="text-center"><?= $key->address; ?></p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a class="m1" href="mailto:info@sitename.com"><?= $key->email; ?></a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p><?= $key->mobile_no; ?></p>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="bottom_footer border-top-tran">
                <div class="row">
                    <div class="col-md-12">
                        © developed by:- &nbsp;<a target="_blank" href="https://raysitworld.com/" class="fw_400 line_height_24"> <span class="text"> RAYS IT & DESIGN WORLD PVT. LTD.</span>
                    </div>
                    <!-- <div class="col-md-6">
                                <ul class="list_none footer_link text-center text-md-right">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                </ul>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="<?= base_url(); ?>assets/frontend_assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/jquery.countdown.min.js"></script>
<!-- jquery.countTo js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/jquery.countTo.js"></script>
<!-- imagesloaded js -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/isotope.min.js"></script>
<!-- jquery.appear js  -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/jquery.appear.js"></script>
<!-- jquery.dd.min js -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/slick.min.js"></script>
<!-- scripts js -->
<script src="<?= base_url(); ?>assets/frontend_assets/js/scripts.js"></script>

</body>

</html>