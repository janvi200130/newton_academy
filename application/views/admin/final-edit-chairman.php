

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
                    <li class="breadcrumb-item active">Chairman Message</li>
                </ol>
            </div>
      </div>
      <?php
  if ($this->session->flashdata('edit_chairman')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_chairman') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_chairman']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Chairman message Update Form</h3>
            </div>
            <?php 
              foreach($message as $key){
            ?>
            <form action="<?= base_url('final-edit-chairman');?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Id</label> -->
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Chairman Message</label>
                  <textarea name="c_message"  id="exampleInputPassword1" placeholder="Enter Chairman Message" class="form-control" style="height:200px; text-align: justify;"><?=$key->c_message;?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chairman Name</label>
                  <input type="text" id="c_name" name="c_name" class="form-control" placeholder="Enter Chairman Name" value="<?=$key->c_name;?>">
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