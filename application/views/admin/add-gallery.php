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
            <li class="breadcrumb-item active">Gallery</li>
          </ol>
        </div>
      </div>
      <?php
      if ($this->session->flashdata('success_image')) {
      ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong><?= $this->session->flashdata('success_image') ?></strong>
        </div>
      <?php
        unset($_SESSION['success_image']);
      } ?>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Gallery Image Add Form</h3>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputFile">Gallery Image Upload</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <label class="form-label" for="exampleInputFile"></label>
                      <input type="file" name="gallery_image" class="form-control" id="exampleInputFile" placeholder="Choose file" required>
                    </div>
                  </div>
                </div>
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