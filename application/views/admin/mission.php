

<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <!-- <div class="col-sm-6">
          <h1>Slider Added Form</h1>
        </div> -->
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Mission</li>
          </ol>
        </div>
      </div>
      <?php
        if ($this->session->flashdata('success_mission')) {
            ?>
            <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= $this->session->flashdata('success_mission') ?></strong>
            </div>
            <?php 
            unset($_SESSION['success_mission']);
        } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Mission Add Form</h3>
            </div>

            <form action="" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Slider Heading</label>
                  <input type="text" name="heading" class="form-control" id="exampleInputPassword1" placeholder="Enter Slider Heading" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Title" required>
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
          </div>
        </div>

    </div>
  </section>

</div>

<?php include('admin_layouts/footer.php') ?>