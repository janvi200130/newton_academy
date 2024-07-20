
<?php include('front_layouts/header.php')?>

<style>
    .card{
        width: 300px;
        border: 5px solid white;
        padding: 50px;
        margin: 20px;
    }
    @media only screen and (max-width: 480px) {
        .card {
            margin-top: 13px;
        }
    }
</style>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1 class="text-center">Courses</h1>
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

<div class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
               
                <div class="row">
                    <div class="col-sm-4 mt-3">
                        <div class="card-body" style="background-color:chocolate; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>5th to 6th Course</b></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <div class="card-body" style="background-color:darkcyan; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>7th to 8th Course</b></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                         <div class="card-body" style="background-color:chocolate; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>9th to 10th Course</b></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                         <div class="card-body" style="background-color:darkcyan; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>11th to 12th Course</b></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                         <div class="card-body" style="background-color:chocolate; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>NEET Course</b></h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-3">
                         <div class="card-body" style="background-color:darkcyan; border-radius:100px;">
                            <a href="<?= base_url('login');?>">
                                <h5 class="card-title text-center text-white"><b>JEE Course</b></h5>
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>
         </div>
	</div>
</div> 

<?php include('front_layouts/footer.php')?>
