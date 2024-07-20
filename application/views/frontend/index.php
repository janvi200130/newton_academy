
<?php include('front_layouts/header.php')?>

    <style>
        .h3, h3 {
                font-size: 36px;
            }
        @media only screen and (max-width: 480px) {
            .image{
                height: 355px;
            }
        }
        @media only screen and (max-width: 767px) {
            .h3, h3 {
                font-size: 36px;
            }
        }
    </style>

<!-- START SECTION BANNER -->
<div class="banner_section staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-ride="carousel">
        <div class="carousel-inner">
            <?php 
                foreach($slider as $key=>$value){ ?>
            <div class="carousel-item <?= ($key==0)?'active':'' ?> background_bg overlay_bg_60" data-img-src="<?=base_url();?>assets/admin_assets/uploads/slider/<?php echo $value->slider_image ?>">
                <div class="banner_slide_content">
                    <!-- STRART CONTAINER -->
                    <div class="container"> 
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                                <div class="banner_content text_white">
                                    <h2>
                                        <?php echo $value->title?>
                                    </h2>
                             	    <p class="staggered-animation" data-animation="fadeInUp" data-animation-delay="0.4s"><?= $value->heading ?></p>
                            		<!-- <a class="btn btn-default staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Get Started</a> 
                            	 	<a class="btn btn-white staggered-animation" href="#" data-animation="fadeInUp" data-animation-delay="0.6s">Learn More</a>  -->
                                 </div>  
                                
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER--> 
                </div>
            </div>
            <?php } ?>
        </div>
    	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a> 
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a> 
    </div>
</div>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT -->
<div class="section">
    <div class="container">
        <div class="row align-items-center">
                <?php 
                    foreach($about as $key){
                    ?>
            <div class="col-lg-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	 <div class="heading_s1"> 
            	<center><h1 class="sub_heading">About Us</h1></center>
                </div>
                
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
<!-- END SECTION ABOUT -->

<!-- START SECTION APPLY COURSE-->
<!-- <div class="section background_bg bg_blue" data-img-src="../assets/frontend_assets/images/pattern_bg1.png">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 heading_apply_form heading_light">
					<h3>Enquiry now</h3>
                </div>
                <p class="text-white leads">"Unlock your potential and embark on a journey of discovery with Newton Academy. Join our vibrant community of students who dare to dream, strive for excellence, and embrace the pursuit of knowledge. Together, let's ignite your passion for learning and pave the way to a future filled with endless possibilities. Register now and take the first step towards realizing your aspirations at Newton Academy."</p>
               <center> 
                    <a href="<?= base_url('contact')?>" class="btn btn-tran-light">Contact Us</a>
               </center> -->
                <!-- <a href="#" class="btn btn-tran-border">Already Apply</a> -->
            <!-- </div>
            <div class="col-xl-7 col-lg-7">
                <div class="bg-white apply_form radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
					<div class="heading_s1">
						<h3>Apply Online Courses</h3>
					</div>
                	<form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="mobile" placeholder="Enter Your Phone Number">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control" placeholder="Enter Your Description" style="height:50px;"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <textarea name="note" id="note" class="form-control" placeholder="Enter Your Note" style="height:50px;"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <textarea name="address" id="address" class="form-control" placeholder="Enter Your Address" style="height:50px;"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="date" required="" class="form-control" name="date" placeholder="Enter Date">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="assigned" placeholder="Assigned">
                                </div>
                            </div>
                 
                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <select name="reference" id="reference" class="form-control">
                                        <option value="">Reference</option>
                                        <option value="1">Reference1</option>
                                        <option value="2">Reference2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <select name="source" id="source" class="form-control">
                                        <option value="">source</option>
                                        <option value="1">source1</option>
                                        <option value="2">source2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <select type="text" name="student_class" class="form-control" id="student_class">
                                        <option  value="">Select Classes</option>
                                        <option value="5th class">5th class</option>
                                        <option value="6th class">6th class</option>
                                        <option value="7th class">7th class</option>
                                        <option value="8th class">8th class</option>
                                        <option value="9th class">9th class</option>
                                        <option value="10th class">10th class</option>
                                        <option value="11th class">11th class</option>
                                        <option value="12th class">12th class</option>
                                        <option value="JEE class">JEE class</option>
                                        <option value="NEET class">NEET class</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="child" placeholder="Number Of Child">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-default btn-block" name="submit">Submit Now</button>
                        </div>

					</form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- END SECTION APPLY COURSE --> 

<!-- START SECTION COURSES-->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                  <h2 class="sub_heading">Our Courses</h2>
                </div>
            	<p class="text-center leads">Newton Academy course today and embark on a transformative educational experience that will propel you toward success.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course.jpg" alt="course_img1"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course1.jpg" alt="course_img2"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course2.jpg" alt="course_img3"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course3.jpg" alt="course_img4"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course_img5.jpg" alt="course_img5"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="courses_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="courses_img"> 
                    	<a href="#"><img src="<?=base_url()?>/assets/frontend_assets/images/course4.jpg" alt="course_img6"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <center> 
            <a href="</?= base_url('courses')?>" class="btn btn-warning">View More</a>
        </center> -->
    </div>
</div>
<!-- END SECTION COURSES--> 

<!-- START SECTION COUNTER -->
<div class="section background_bg counter_wrap bg_blue fixed_bg" data-img-src="assets/frontend_assets/images/pattern_bg1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-book"></i>
                	<h3 class="counter_text"><span class="counter" data-from="0" data-to="280" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Courses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
            	<div class="box_counter counter_white text-center"> <i class="flaticon-student"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="1350" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                	<p>Students</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-teacher"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="200" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Qualified Staff</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                <div class="box_counter counter_white text-center"> <i class="flaticon-trophy"></i>
                    <h3 class="counter_text"><span class="counter" data-from="0" data-to="150" data-speed="1500" data-refresh-interval="5"></span>+</h3>
                    <p>Awards win</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION COUNTER --> 


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



<?php include('front_layouts/footer.php')?>