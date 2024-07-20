<?php include('front_layouts/header.php') ?>

<!-- <style>
    @media only screen and (max-width: 575px) {
    .section, .newsletter_small, .animation {
        padding: 1px;
        margin-top: -11px;
    }
}
</style> -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?= base_url(); ?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
                    <h1 class="text-center">VISION & MISSION</h1>
                </div>
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol> -->
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- Start Vision  -->

<div class="section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="heading_s1">
                    <center>
                        <h1 class="sub_heading">Our Vision</h1>
                    </center>
                </div>
                <?php
                foreach ($vission as $key) { ?>
                    <div class="about_section pl-lg-3">
                        <p style="text-align: justify;"><?= $key->title ?></p>
                    </div>
                <?php } ?>
            </div>

            <div class="col-lg-12 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="heading_s1">
                    <center>
                        <h1 class="sub_heading">Our Mission</h1>
                    </center>
                </div>
                <?php
                foreach ($mission as $key) { ?>
                    <div class="about_section pl-lg-3">
                        <p style="text-align: justify;"><?= $key->title ?></p>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<!-- START SECTION TESTIMONIAL -->
<div class="section bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                	<h2 class="sub_heading">Our Students Say!</h2>
                </div>
                <!-- <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
            </div>
        </div>
        <div class="row justify-content-center">
       
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
        		<div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "991":{"items": "3"}}'>
                <?php
                    foreach ($test as $key)
                    {?>	
                    <div class="testimonial_box">
       					<div class="testimonial_desc">
                           <div class="author_info">
                                <div class="author_name">
                                    <h6><?=$key->name; ?></h6>
                                    <span><?=$key->designation;?></span> 
                                </div>
                            </div>
                            <div class="testimonial_desc">
                                <p><?=$key->comment;?></p>
                            </div>
                        </div>
        			</div>
                    <?php } ?>
        		</div>
        	</div>
          
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL -->

<?php include('front_layouts/footer.php') ?>