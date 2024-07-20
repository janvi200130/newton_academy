
<?php include('front_layouts/header.php')?>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1 class="text-center">Director's-Message</h1>
                </div>
               
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
 
<!-- Start Chairman Messages  -->

<div class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	 <div class="heading_s1"> 
            	    <h1 class="sub_heading">Dear Students,</h1>
                </div>
                <?php 
               foreach ($message as $key) {?>
                <div class="about_section pl-lg-3">
              		<p style="text-align: justify;"><?=$key->d_message;?></p>

              		<!-- <p style="text-align: justify;">At <b>NEWTON ACADEMY</b>, we strive to provide you the best. We have no competitors throughout India but we set extremely tough targets for ourselves because we compete with tough targets ofimpeccablequality, arduous level of honest delivery in classrooms and impeccable study materials. Inthis endeavor, <b>NEWTON ACADEMY</b> brought out extremely sought after books, test series and magazine. Studentsare today enlightened and focused. They know what they are up to. They need just a ray ofguidance. I feel I have accomplished the reason of my existence on this earth. Proud to be that faint ray of guidance, proud to be a reason of smile on certain lips, proud to be your teacher, Friend and guide.</p> -->

                   <center><h4><b>Thank You</b></h4></center>
                    <br>
                    <h6 class="sub_heading">WITH REGARDS</h6>
                    <h4><b><?=$key->d_name;?></b></h4>
                    <h6 class="sub_heading">Director</h6>
                    <p>(Newton Group)</p>
	            </div>
                <?php } ?>
	        </div>
	    </div>
	</div>
</div> 

<!-- End Chairman Messages  -->

<?php include('front_layouts/footer.php')?>