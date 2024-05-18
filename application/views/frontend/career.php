
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
                        <h1 class="text-center">Career</h1>
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
                        <!-- <div class="heading_s1">
                            <h4>Create your new account</h4>
                        </div> -->
                        <form method="post">
                            <div class="form-group input-group">
                                <div class="input-group-addon btn btn-light">
                                     <i class="fa-solid fa-user"></i>
                                </div>
                                <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-addon btn btn-light">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-addon btn btn-light">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                             <input type="password" required="" class="form-control" name="password" placeholder="Your Password" id="myInput">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <span class="input-group-addon" id="d1" >
                                        <i class="fa fa-eye-slash" onclick="myFunction()"  aria-hidden="true"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-addon btn btn-light">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                             <input type="password" required="" class="form-control" name="password" placeholder="Confirm Password" id="myInput1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <span class="input-group-addon" id="d1" >
                                        <i class="fa fa-eye-slash" onclick="Function()"  aria-hidden="true"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block" name="register">Submit</button>
                            </div>
                        </form>

                        <!-- <div class="different_login">
                            <span> or</span>
                        </div>
                        <ul class="btn-login list_none text-center">
                            <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul>
                        <div class="form-note text-center">Already have an account? <a href="login.html">Login Here!</a></div> -->
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

<?php include('front_layouts/footer.php')?>