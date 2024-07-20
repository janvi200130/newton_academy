
<?php include('front_layouts/header.php')?>

<style>
    @media only screen and (max-width: 480px) {
        .card-body {
            margin-top: 13px;
        }
    }
</style>
 
    <!-- START SECTION BREADCRUMB -->
        <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="<?=base_url();?>assets/frontend_assets/images/slider2.jpg">
        </div>
    <!-- END SECTION BREADCRUMB -->

    <div class="section">
        <div class="heading_s1"> 
            <center> <h1 class="sub_heading">Our Hostel Facilities</h1> </center>
        </div><br>
        <div class="container">
            <div class="row">
                <?php 
                foreach($fac as $key) { ?>
                <div class="col-sm-4 col-md-6"> <br>
                    <p style="text-align: justify;"><?= $key->content;?></p>
              	</div>
                <div class="col-sm-4 col-md-6"> <br>
                    <img src="<?= base_url();?>assets/admin_assets/uploads/facility/<?= $key->facility_image;?>" alt="images"><br><br>
                </div>
                <!-- <div class="col-sm-4 col-6"> <br>
                    <p style="text-align: justify;"><?= $key->content;?></p> -->
                    <!-- <p style="text-align: justify;">* Self Study Guidance</p>
                    <p style="text-align: justify;">* Doubt Clearing Facility</p>
                    <p style="text-align: justify;">* Quality Study Materials</p>
                    <p style="text-align: justify;">* Feedback & Communication System</p>
                    <p style="text-align: justify;">* Counselling & Motivational Sessions</p>
                    <p style="text-align: justify;">* Monthly PTM Conduction</p>
                    <p style="text-align: justify;">* Test Series (Weekly & Monthly) Online/offline</p>
                    <p style="text-align: justify;">* Library Facility</p>
                    <p style="text-align: justify;">* Systematic Classroom</p>
                    <p style="text-align: justify;">* Online & Offline Classes</p>
                    <p style="text-align: justify;">* Competitive Environment</p>
                    <p style="text-align: justify;">* Id Card, Bag & T Shirt</p> -->
                <!-- </div> -->
                <?php } ?>
            </div>
        </div>
    </div>

<?php include('front_layouts/footer.php')?>