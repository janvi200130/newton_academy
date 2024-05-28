

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
                    <li class="breadcrumb-item active">Director Message</li>
                </ol>
            </div>
      </div>
      <?php
  if ($this->session->flashdata('edit_director')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_director') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_director']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Director message Update Form</h3>
            </div>
            <?php 
              foreach($message as $key){
            ?>
            <form action="<?= base_url('final-edit-director');?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Id</label> -->
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Director Message:- </label>
                  <!-- <input type="text"  id="exampleInputPassword1" name="d_message" class="form-control" placeholder="Enter Chairman Name" value="</?=$key->d_message;?>"> -->
                  <textarea name="d_message"  id="exampleInputPassword1" placeholder="Enter Director Message" class="form-control" style="height:200px; text-align: justify;"><?=$key->d_message;?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Director Name:- </label>
                  <input type="text"  id="exampleInputPassword1" name="d_name" class="form-control" placeholder="Enter Chairman Name" value="<?=$key->d_name;?>">
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