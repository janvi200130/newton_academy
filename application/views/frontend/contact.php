
<?php include('front_layouts/header.php')?>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1 class="text-center">Contact Us</h1>
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
 
<!-- START CONTACT -->
<div class="section pb_70">
    <div class="container">
        <center> <h6><b>HEAD OFFICE :- RAIPUR</b></h6></center><br>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="contact_text">
                        <span>Address</span>
                        <p>MIG D-19, Shailendra Nagar, Near Jain Computer Raipur (C.G.)- 492001</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1" style="height:202px;">
                    <div class="contact_icon">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p> 0771 4053074</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-email"></i>
                    </div>
                    <div class="contact_text"  style="height:93px;">
                        <span>Email Address</span>
                        <a href="mailto:info@sitename.com">newtonacademy.headoffice@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <center> <h6><b>BRANCH OFFICE:- BILASPUR</b></h6></center><br>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="contact_text">
                        <span>Address</span>
                        <p>1st Floor, Surya Steel Complex, Shiv Talkies Chowk Beside Hotel Anand Bilaspur(C.G.) - 495001</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="contact_text">
                        <span>Phone</span>
                        <p> 07752 434832</p>
                        <p>  +91 8602156983, +91 7879504582</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="contact_wrap contact_style1">
                    <div class="contact_icon" >
                        <i class="ti-email"></i>
                    </div>
                    <div class="contact_text"  style="height:101px;">
                        <span>Email Address</span>
                        <a href="mailto:info@sitename.com">newtonacademy.bilaspur@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT -->

<!-- START CONTACT -->
<div class="section">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-12 col-md-9">
            <?php
                if ($this->session->flashdata('contact_success')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?= $this->session->flashdata('contact_success') ?></strong>
                    </div>
                    <?php 
                    unset($_SESSION['contact_success']);
                } ?>
            	<div class="heading_s1 text-center">
                	<h2>Get In touch</h2>
                </div>
                <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p> -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
            	<div class="field_form">
                    <form onsubmit="return myfun()">
                        <div class="row">
                            <div class="form-group col-md-6">
                            	<label>Name<span class="required">*</span></label>
                                <input required="" placeholder="Enter Name" class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Email<span class="required">*</span></label>
                                <input required="" placeholder="Enter Email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Phone<span class="required">*</span></label>
                                <input required="" id="mobilenumber" placeholder="Enter Phone No" class="form-control" name="phone" type="text" value="">
                                <span id="messages" style="color:yellow;"></span>
                            </div>
                            <div class="form-group col-md-6">
                            	<label>Subject</label>
                                <input required="" placeholder="Enter Subject" class="form-control" name="subject" type="text">
                            </div>
                            <div class="form-group col-md-12">
                            	<label>Message<span class="required">*</span></label>
                                <textarea required="" placeholder="Enter Message"  class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default btn-lg btn-block" name="submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT -->

<!-- START SECTION MAP -->
<div class="section p-0">
	<div class="container p-0">
    	<div class="row no-gutters">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="map">
                    <blockquote>
                	     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3697.370141386372!2d82.15900582404272!3d22.07367695107402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a280b22a93f91bf%3A0xa54d8e6459fe9b25!2sSurya%20Steel!5e0!3m2!1sen!2sin!4v1715247630545!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </blockquote>
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION MAP -->
        <br><br>
<script>
        function myfun(){
            var a = document.getElementById("mobilenumber").value;
            if(a==""){
                document.getElementById("messages").innerHTML="** Please fill Mobile number";
                return false;
            }
            if(isNaN(a)){
                document.getElementById("messages").innerHTML="** Enter only numeric value";
                return false;
            }
            if(a.length<10){
                document.getElementById("messages").innerHTML="** Mobilenumber must be 10 digit";
                return false;
            }
            if(a.length>10){
                document.getElementById("messages").innerHTML="** Mobilenumber must be 10 digit";
                return false;
            }
        }
    </script>

<?php include('front_layouts/footer.php')?>