
<?php include('front_layouts/header.php')?>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1 class="text-center">About Us</h1>
                </div>
               
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
 
<!-- Start About Us -->

<div class="section">
    <div class="container">
        <div class="row align-items-center">
                <?php 
                    foreach($about as $key){
                    ?>
            <div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	 <!-- <div class="heading_s1"> 
            	<center><h1 class="sub_heading">About Us</h1></center>
                </div>
                 -->
                <div class="about_section pl-lg-3">
              		<p style="text-align: justify;"><?= $key->content;?></p>
              	</div>
                </div>
                <div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="about_img"> 
                        <img class="image img-fluid" alt="Responsive image" src="<?=base_url();?>assets/admin_assets/uploads/about/<?php echo $key->about_image ?>" alt="">
                    </div>
                </div>
                <?php } ?>
		</div>   
    </div>
</div>
<!-- End About Us -->

<?php include('front_layouts/footer.php')?>