

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
  if ($this->session->flashdata('edit_about')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_about') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_about']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Image Add Form</h3>
            </div>
            <?php 
              foreach($new as $key){
            ?>
            <form action="<?= base_url('admin/final-edit-about');?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Id</label> -->
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">About Content</label>
                  <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Enter About Content" required value="<?=$key->content;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image Upload</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <label class="form-label" for="exampleInputFile"></label>
                      <input type="file" name="about_image" class="form-control" id="exampleInputFile" placeholder="Choose file" required value="<?=$key->about_image;?>">
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