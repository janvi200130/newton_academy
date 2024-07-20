
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
            		<h1 class="text-center">Login Form</h1>
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

<!-- STAT SECTION LOGIN --> 
<div class="section">
	<div class="container">
    	<div class="row justify-content-center">
            <div class="col-md-6">
                <div class="padding_eight_all login_wrap">	
                    <div class="heading_s1">
                        <h4>Welcome to your account</h4>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                        </div>
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-block" name="login">Log in</button>
                        </div>
						<a href="user/dashboard">User Dashboard</a>
                    </form>
                    <div class="form-note text-center">Don't Have an Account? <a href="<?=base_url('registration')?>">Register now</a></div>
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

<?php include('front_layouts/footer.php')?>
