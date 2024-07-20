
<?php include('admin_layouts/header.php') ?>

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Facility Added Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Facility</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <?php
        if ($this->session->flashdata('facility')) {
          ?>
          <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= $this->session->flashdata('facility') ?></strong>
            </div>
            <?php 
            unset($_SESSION['facility']);
        } ?>

      <section class="content">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-outline card-info">
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Hostel Image Uploaded</label>
                    <input type="file" name="facility_image" class="form-control" id="facility_image" placeholder="Choose file" required>
                  </div>
                </div>

                <div class="card-body">
                  <div class="form-group">
                    <label for="">Hostel Facility</label>
                      <textarea id="content" name="content" class="form-control" placeholder="Enter Your Hostel Facility" required>
                      </textarea>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

              </div>
            </div>
          </div>
        </form>
      </section>
    </div>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<?php include('admin_layouts/footer.php') ?>