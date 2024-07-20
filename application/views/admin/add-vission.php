
<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Vission</li>
          </ol>
        </div>
      </div>
      <?php
        if ($this->session->flashdata('success_vission')) {
            ?>
            <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= $this->session->flashdata('success_vission') ?></strong>
            </div>
            <?php 
            unset($_SESSION['success_vission']);
        } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3>Vission Add Form</h1>
            </div>

            <form action="" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="">Vission Title</label>
                    <textarea id="content" name="title" class="form-control" placeholder="Enter Your Slider Title" required>
                    </textarea>
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>

    </div>
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