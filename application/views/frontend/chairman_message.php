
<?php include('front_layouts/header.php')?>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1 class="text-center">Chairman's-Message</h1>
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
                    foreach ($message as $key) 
                    {?>
                    <div class="about_section pl-lg-3">
                        <p style="text-align: justify;"><?=$key->c_message;?></p>

                        <!-- <p style="text-align: justify;">In this highly competitive world every student wants to become first in their stream. Achieving that can be far more difficult that one can imagine, without proper guidance. However, choosing a guide alone is not a child's play in today's world.</p>

                        <p style="text-align: justify;"> Students join a certain institute because of peer pressure, other’s recommendation or certain other factors. But are they sure that the institute which they are joining is the best? There are enough reasons for us at 'No Improvement- No Fees' to feel we are capable of giving the best impetus to them. With a nicely stocked library and very well trained staff and faculties, we will provide every learning mind with the best environment to grow. Our motto is not just another stunt to attract, but it's a resolution to serve the very cause of being an institution of knowledge.</p>

                        <p style="text-align: justify;">The faculty, which comprises of eminent, experienced and qualified professional teachers from different vocations, guides the students from the basic fundamentals of each topic to the ways of tactfully attempting the exam. Assignments and notes are provided to the students tosupplement the lectures. Finally, tests are given for a fair assessment of what has been taught.</p>

                        <p style="text-align: justify;"> A part from providing coaching for the subjects opted by the student, we also provide special guidance to the students for competitive exams like N.T.S.E., Olympiad etc. Experts are invited for academic guidance near the final exams. Career counselling is also done by guest speakers at the end of the session. Air conditioned classrooms, uninterrupted power supply, RO water & CCTV monitoring are some other privileges that we offer at our Institute.</p>	

                        <h4>According to Swami Vivekananda</h4>

                        <p style="text-align: justify;">What is education? Is it book learning? <b>No.</b></p>

                        <p style="text-align: justify;">Is it diverse knowledge? <b>Not even that.</b></p>

                        <p style="text-align: justify;">The training by which the current and expression of will are brought</p>

                        <p style="text-align: justify;">under control and become fruitful is called education.”</p> -->

                    <center><h4><b>Thank You</b></h4></center>
                        <br>
                        <h6 class="sub_heading">WITH REGARDS</h6>
                        <h4><b><?=$key->c_name;?></b></h4>
                        <h6 class="sub_heading">Chairman & Director</h6>
                        <p>(Newton Academy Group of Institution)</p>
                    </div>
                <?php } ?>
	        </div>
	    </div>
	</div>
</div> 

<!-- End Chairman Messages  -->

<?php include('front_layouts/footer.php')?>