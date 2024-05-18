
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
<div class="section background_bg bg_blue" data-img-src="../assets/frontend_assets/images/pattern_bg1.png">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 heading_apply_form heading_light">
					<h3>Enquiry now</h3>
                </div>
                <p class="text-white leads">"Unlock your potential and embark on a journey of discovery with Newton Academy. Join our vibrant community of students who dare to dream, strive for excellence, and embrace the pursuit of knowledge. Together, let's ignite your passion for learning and pave the way to a future filled with endless possibilities. Register now and take the first step towards realizing your aspirations at Newton Academy."</p>
               <center> 
                    <a href="<?= base_url('contact')?>" class="btn btn-tran-light">Contact Us</a>
               </center>
                <!-- <a href="#" class="btn btn-tran-border">Already Apply</a> -->
            </div>
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
</div>
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
        <center> 
            <a href="<?= base_url('courses')?>" class="btn btn-warning">View More</a>
        </center>
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

<!-- START SECTION EVENTS-->
<!-- <div class="section pb_70">
	<div class="container">
        <div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2 class="sub_heading">Upcoming events</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        	</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="event_img"> 
                    	<img src="../assets/frontend_assets/images/event_img1.jpg" alt="event_img1">
                        <div class="event_dt radius_all_5">
                        	<h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                        	<li><i class="ti-time"></i><span>09:00 AM</span></li>
                        	<li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="event_img"> 
                        <img src="../assets/frontend_assets/images/event_img2.jpg" alt="event_img2">
                        <div class="event_dt radius_all_5">
                            <h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                            <li><i class="ti-time"></i><span>09:00 AM</span></li>
                            <li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="event_img"> 
                    	<img src="../assets/frontend_assets/images/event_img3.jpg" alt="event_img3">
                        <div class="event_dt radius_all_5">
                        	<h5><span>May, 16</span> 2020 </h5>
                        </div>
                    </div>
                    <div class="event_info">
                        <h5 class="event_title"><a href="#">New Sessions For Graphics Design Interface</a></h5>
                        <ul class="event_meta">
                            <li><i class="ti-time"></i><span>09:00 AM</span></li>
                            <li><i class="ti-location-pin"></i><span>New York City</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div> -->
<!-- END SECTION EVENTS--> 

<!-- START SECTION VIDEO -->
<!-- <div class="section background_bg overlay_bg_70 fixed_bg" data-img-src="assets/images/video_bg.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-md-10">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup">
                    	<span class="ripple"><i class="ion-play"></i></span>
                    </a>
                    <div class="video_text animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <span class="text_default">Watch Our Latest Video</span>
                        <h2>Let's Take a Small Tour From Video Tutorial For Our Campus</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- END SECTION VIDEO -->

<!-- START SECTION TEAM -->
<!-- <div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                  <h2 class="sub_heading">Our Team Members</h2>
                </div>
            	<p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
        <div class="row justify-content-center">
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="team_box team_style2 radius_all_10">
					<div class="team_img"> 
                    	<img src="../assets/images/team_img1.jpg" alt="team_img1">
                        <ul class="social_icons social_white">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
                          	<li><a href="#"><i class="ion-social-twitter"></i></a></li>
                          	<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                          	<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
					</div>
                  	<div class="team_content">
                        <div class="team_title">
							<h5>Anders Stone</h5>
							<span>Professor</span> 
                        </div>
                    </div>
                </div>
            </div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="team_box team_style2 radius_all_10">
                    <div class="team_img"> 
                        <img src="../assets/frontend_assets/images/team_img2.jpg" alt="team_img2">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                	</div>
                    <div class="team_content">
                        <div class="team_title">
                            <h5>Laura Martin</h5>
                            <span>Accounting</span> 
                        </div>
                    </div>
                </div>
          	</div>
          	<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
            			<img src="../assets/frontend_assets/images/team_img3.jpg" alt="team_img3">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
                    <div class="team_title">
                        <h5>Adam Smith</h5>
                        <span>Ceo & Architer</span> 
                    </div>
				</div>
			</div>
          </div>
			<div class="col-lg-3 col-sm-6 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            	<div class="team_box team_style2 radius_all_10">
            		<div class="team_img"> 
                    	<img src="../assets/frontend_assets/images/team_img4.jpg" alt="team_img4">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
            		</div>
            		<div class="team_content">
            			<div class="team_title">
            				<h5>Bruce Flores</h5>
            				<span>Accounting</span> 
            			</div>
            		</div>
            	</div>
          	</div>
        </div>
	</div>
</div> -->
<!-- END SECTION TEAM --> 

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
        			<div class="testimonial_box">
        				<!-- <div class="author_info">
        					<div class="author_img">
                            	<img src="../assets/frontend_assets/images/testi_user1.jpg" alt="user"> 
                            </div>
        					<div class="author_name">
        						<h6>Richard Clark</h6>
        						<span>CEO HR Group</span> 
                            </div>
        				</div> -->
       					<div class="testimonial_desc">
        					<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
        				</div>
        			</div>
                    <div class="testimonial_box">
                        <!-- <div class="author_info">
                            <div class="author_img"> 
                                <img src="../assets/frontend_assets/images/testi_user2.jpg" alt="user"> 
                            </div>
                            <div class="author_name">
                                <h6>Daisy Lana</h6>
                                <span>Designer</span> 
                            </div>
                        </div> -->
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <!-- <div class="author_info">
                            <div class="author_img"> 
                                <img src="../assets/frontend_assets/images/testi_user3.jpg" alt="user"> 
                            </div>
                            <div class="author_name">
                                <h6>Alden Smith</h6>
                                <span>Designer</span> 
                            </div>
                        </div> -->
                    <div class="testimonial_desc">
                    	<p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                    </div>
        			</div>
                    <div class="testimonial_box">
                        <!-- <div class="author_info">
                            <div class="author_img"> 
                                <img src="../assets/frontend_assets/images/testi_user4.jpg" alt="user"> 
                            </div>
                            <div class="author_name">
                                <h6>John Becker</h6>
                                <span>Designer</span> 
                            </div>
                        </div> -->
                        <div class="testimonial_desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem laudantium, quaeillo inventore sed veritatis architecto beatae vitae dicta sunt explicabo eiusmod tempor labore which pain can some pleasure.</p>
                        </div>
                    </div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL --> 

<!-- START SECTION BLOG -->
<!-- <div class="section pb_70">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
    			<div class="heading_s1 text-center">
    				<h2 class="sub_heading">Latest News</h2>
    			</div>
    			<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
    		</div>
    	</div>
    	<div class="row justify-content-center">
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="../assets/frontend_assets/images/blog_small_img1.jpg" alt="blog_small_img1"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>May, 02</span> 2020</h5> 
                        </div>	
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
                            <h5 class="blog_title"><a href="#">The Master Of Human Happiness</a></h5>
                            <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                    	</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="../assets/frontend_assets/images/blog_small_img2.jpg" alt="blog_small_img2"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>Jan, 02</span> 2020</h5> 
                        </div>
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
    						<h5 class="blog_title"><a href="#">I Must Explain To This Mistaken</a></h5>
    						<p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-lg-4 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    			<div class="blog_post blog_style1 box_shadow1">
    				<div class="blog_img"> 
                    	<a href="#"> <img src="../assets/frontend_assets/images/blog_small_img3.jpg" alt="blog_small_img3"> </a> 
                        <div class="post_date radius_all_5">
                        	<h5><span>Aug, 02</span> 2020</h5> 
                        </div>
                    </div>
    				<div class="blog_content">
    					<div class="blog_text">
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-user"></i> <span>By Admin</span></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <span>2 Comment</span></a></li>
                            </ul>
                            <h5 class="blog_title"><a href="#">There Anyone Who Loves Hims</a></h5>
                            <p>Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this generator on the Internet.</p>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div> -->
<!-- END SECTION BLOG --> 

<?php include('front_layouts/footer.php')?>