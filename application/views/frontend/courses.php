
<?php include('front_layouts/header.php')?>

<style>
    .card{
        width: 300px;
        border: 5px solid black;
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
 

<!-- START SECTION COURSES-->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-xl-4">
                <div class="card" style="background-color:pink;">
                    <div class="card-body">
                        <!-- <a href="</?= base_url();?>assets/brochure.pdf"> -->
                        <a href="<?= base_url('5th-6th-course');?>">
                            <h5 class="card-title text-center"><b>5th to 6th</b></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xl-4">
                <div class="card" style="background-color:yellow;">
                    <div class="card-body">
                        <a href="<?= base_url();?>assets/brochure.pdf">
                            <h5 class="card-title text-center"><b>7th to 8th</b></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:darkseagreen;">
                    <div class="card-body">
                        <a href="<?= base_url();?>assets/brochure.pdf">
                            <h5 class="card-title text-center"><b>9th to 10th</b></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3" >
            <div class="col-sm-4">
                <div class="card" style="background-color:orange;">
                    <div class="card-body">
                        <a href="<?= base_url();?>assets/brochure.pdf">
                            <h5 class="card-title text-center"><b>11th to 12th</b></h5>
                         </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:indianred;">
                    <div class="card-body">
                        <a href="<?= base_url();?>assets/brochure.pdf">
                            <h5 class="card-title text-center"><b>NEET</b></h5>
                        </a>
                    </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color:aquamarine;">
                    <div class="card-body">
                        <a href="<?= base_url();?>assets/brochure.pdf">
                            <h5 class="card-title text-center"><b>JEE</b></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- END SECTION COURSES-->

<?php include('front_layouts/footer.php')?>
