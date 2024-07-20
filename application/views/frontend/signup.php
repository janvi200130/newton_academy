﻿
<?php include('front_layouts/header.php')?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/css-layout/1.1.1/css-layout.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">

<!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1 class="text-center">register Students</h1>
                    </div>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
<!-- END SECTION BREADCRUMB -->
 

<!-- STAT SECTION LOGIN --> 
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="padding_eight_all login_wrap">
                         <div class="heading_s1">
                            <h4>Create your account</h4>
                        </div>

                        <?php
                        if ($this->session->flashdata('register')) {
                            ?>
                            <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong><?= $this->session->flashdata('register') ?></strong>
                            </div>
                            <?php 
                            unset($_SESSION['register']);
                        } ?>

                        <form active="<?=base_url('registration')?>" method="post" enctype="multipart/form-data" onsubmit="return myfun() myfun1()">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="father_name" placeholder="Enter Your Father's Name">
                                    </div>
                                </div>
                    
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="mobile" id="mobilenumber" placeholder="Enter Your Mobile Number" value="">
                                    </div>
                                    <span id="messages" style="color:red;"></span>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" name="parent_mobile" id="mobilenumber" placeholder="Enter Your Parents Mobile Number" value="">
                                    </div>
                                    <span id="messages" style="color:red;"></span>
                                </div>
                                
                                <div class="col-sm-6 col-md-6">
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

                                <div class="col-sm-6 col-md-6"> 
                                    <div class="form-group">
                                        <select type="text" name="board" class="form-control" id="board">
                                            <option  value="">Select Board Exams</option>
                                            <option value="Cg Board">CG BOARD</option>
                                            <option value="CBSE">CBSE</option>
                                            <option value="ICSE">ICSE</option>
                                            <option value="NIOS">NIOS</option>
                                            <option value="UP Board">UP Board</option>
                                            <option value="Others Boards exam">Others Boards Exam</option>
                                        </select>
                                    </div>
                                </div>
                              

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                     <div class="form-group input-group">
                                        <input type="password" required="" class="form-control" name="password" placeholder="Your Password" id="myInput">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <span class="input-group-addon" id="d1" >
                                                    <i class="fa fa-eye-slash" onclick="myFunction()"  aria-hidden="true"></i>
                                                </span>
                                                </div>
                                            </div>
                                     </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" required="" class="form-control" name="dob" placeholder="Enter Your Date Of Birth">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <textarea name="address" id="address" class="form-control" placeholder="Enter Your Address" style="height:50px;"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="image" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block" name="submit">Register</button>
                            </div>
                        </form>
                        <div class="form-note text-center">Already have an account? <a href="<?=base_url('login')?>">Login Here!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END SECTION LOGIN -->

    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
    <script>
        function Function() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>

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

    <script>
         function myfun1(){
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