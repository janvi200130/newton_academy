
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Templatemanja" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Educone Is Online Courses HTML5 Template.">
<meta name="keywords" content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

<!-- SITE TITLE -->
<title>NEWTON ACADEMY</title>
<!-- Favicon Icon -->
<link rel="icon" href="<?=base_url();?>assets/frontend_assets/images/logo.jpg">
<!-- Animation CSS -->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="../../css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="../../css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/all.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/ionicons.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/themify-icons.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/linearicons.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/flaticon.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/style.css">
<link rel="stylesheet" href="<?=base_url();?>assets/frontend_assets/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="<?=base_url();?>assets/frontend_assets/color/theme-yellow.css">
<style>
    /* .demo_switcher{
        display: none !important;
    } */
    .ion-gear-b:before {
        display: none !important;
    }
    .bg-dark{
        display: none !important;
    }
</style>
</head>

<body>

<!-- LOADER -->
<!-- <div id="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div> -->
<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top dark_skin main_menu_uppercase header_with_topbar" style="margin-top: -2px;">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="container">
            <div class="row align-items-center" style="margin-top: -24px;">     
                <div class="col-md-6">
                    <ul class="contact_detail text-center text-lg-left">
                    	<li><i class="ti-mobile"></i><span>+91 8602156983, +91 7879504582</span></li>
                    	<li><i class="ti-email"></i><span>newtonacademy.bilaspur@gmail.com</span></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                        <!-- <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul> -->
                        <!-- <ul class="header_list border_list">
                            <li><a href="#" class="nav_btn"><i class="ti-user"></i> Login</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"  style="margin-top:15px;"> 
        	<a class="navbar-brand" href="<?= base_url('')?>"> 
                <!-- <h2><b>NEWTON ACADEMY</b></h2> -->
            	<img class="logo_dark" src="<?=base_url();?>assets/frontend_assets/images/logo.jpg" alt="logo" style="margin-top: -13px; width: 63px; height: 53px;"> 
                <!-- <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo">  -->
            </a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> <span class="ion-android-menu"></span> </button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
					<li class="navbar">
                        <a class="nav-link active" href="<?= base_url('/')?>">Home</a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">About Us</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('director-message')?>">Director's Messages</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('chairman-message')?>">Chairman's Message</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('mission')?>">Mission & Vission</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('facility')?>">Facilities</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('fees')?>">Fees Structure</a></li>
                                </ul>
                            </div>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Courses</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('courses')?>">Courses</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('syllabus')?>">Syllabus</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="<?= base_url('scholarship')?>">Scholarship</a></li>
                                </ul>
                            </div>
                    </li>

                    <li class="navbar">
                        <a class="nav-link nav-item" href="<?= base_url('study')?>">Study Material</a>
                    </li>

                    <li class="navbar">
                        <a class="nav-link nav_item" href="<?= base_url('login')?>">Login</a>
                    </li>
                    <li class="navbar">
                        <a class="nav-link nav_item" href="<?= base_url('registration')?>">Registration</a>
                    </li>
                            
                    <li class="navbar">
                        <a class="nav-link nav-item" href="<?= base_url('career')?>">Career</a>
                    </li>

                    <li class="navbar">
                        <a class="nav-link nav-item" href="<?= base_url('contact')?>">Contact Us</a>
                    </li>

                    <!-- <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Events</a>
                        <div class="dropdown-menu">
                        	<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="events.html">Events</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="events-list.html">Events List</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="event-detail.html">Events Detail</a></li>
                        	</ul>
                        </div>
                    </li> -->
                    <!-- <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Blog</a>
                        <div class="dropdown-menu">
                        	<ul>
                            	<li><a class="dropdown-item nav-link nav_item" href="blog.html">Blog</a></li>
                            	<li><a class="dropdown-item nav-link nav_item" href="blog-detail.html">Blog Detail</a></li>
                         	</ul>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Shop</a>
                        <div class="dropdown-menu dropdown-reverse">
                         	<ul>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-three-columns.html">Shop Three Columns</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-four-columns.html">Shop Four Columns</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Shop Product Detail</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Shop Cart</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li>
                        	</ul>
                        </div>
                    </li> -->
                </ul>
          	</div>
			<!-- <ul class="navbar-nav attr-nav align-items-center">
                <li>
                	<a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                    <div class="search_wrap"> 
                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                        <form>
                            <input type="text" placeholder="Search" class="form-control" id="search_input">
                            <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </li>
                <li class="dropdown">
                	<a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <ul class="cart_list">
                        	<li> <a href="#" class="item_remove"><i class="ion-close"></i></a> <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span> </li>
                        	<li> <a href="#" class="item_remove"><i class="ion-close"></i></a> <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a> <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span> </li>
                        </ul>
                        <div class="cart_footer">
                        	<p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                        	<p class="cart_buttons"><a href="#" class="btn btn-default view-cart">View Cart</a><a href="#" class="btn btn-dark checkout">Checkout</a></p>
                        </div>
                    </div>
                </li>
			</ul> -->
        </nav>
    </div>
</header>
<!-- END HEADER --> 
