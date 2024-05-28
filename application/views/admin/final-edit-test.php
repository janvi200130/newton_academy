

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
                    <li class="breadcrumb-item active">Testimonial</li>
                </ol>
            </div>
      </div>
      <?php
  if ($this->session->flashdata('edit_testi')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_testi') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_testi']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Testimonial Update Form</h3>
            </div>
            <?php 
              foreach($test as $key){
            ?>
            <form action="<?= base_url('final-edit-test');?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Id</label> -->
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter Student Name" value="<?=$key->name;?>">
                </div>
                <div class="form-group">
                  <label for="">Designation</label>
                  <input type="text" id="designation" name="designation" class="form-control" placeholder="Enter Your Designation" value="<?=$key->designation;?>">
                </div>
                <div class="form-group">
                  <label for="">Comment</label>
                  <textarea name="comment"  id="comment" placeholder="Enter Your Comment" class="form-control" style="height:200px; text-align: justify;"><?=$key->comment;?></textarea>
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