

<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <!-- <div class="col-sm-6">
                <h1>About Content Added Form</h1>
            </div> -->
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
      </div>
      <?php
  if ($this->session->flashdata('edit_slider')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_slider') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_slider']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Slider Image Add Form</h3>
            </div>
            <?php 
              foreach($slider as $key){
            ?>
            <form action="<?= base_url('final-edit-slider');?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Id</label> -->
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Slider Heading</label>
                  <input type="text" name="heading" class="form-control" id="exampleInputPassword1" placeholder="Enter Slider Heading" required value="<?=$key->heading;?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Title" required value="<?=$key->title;?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Slider Image Upload</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <label class="form-label" for="exampleInputFile"></label>
                      <input type="file" name="slider_image" class="form-control" id="exampleInputFile" placeholder="Choose file" required value="<?=$key->slider_image;?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Updated</button>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>


      </div>

    </div>
  </section>

</div>

<?php include('admin_layouts/footer.php') ?>