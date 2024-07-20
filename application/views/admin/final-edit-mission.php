

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
                    <li class="breadcrumb-item active">Mission</li>
                </ol>
            </div>
      </div>
      <?php
  if ($this->session->flashdata('edit_mission')) {
    ?>
     <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><?= $this->session->flashdata('edit_mission') ?></strong>
      </div>
      <?php 
      unset($_SESSION['edit_mission']);
  } ?>
    </div>
  </section>
 

  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Mission Update Form</h3>
            </div>
            <?php 
              foreach($mission as $key){
            ?>
            <form action="<?= base_url('final-edit-mission');?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?=$key->id;?>">
                </div>
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Mission Title</label>
                      <textarea id="content" name="title" class="form-control" placeholder="Enter Mission Title"><?=$key->title;?>
                      </textarea>
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

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<?php include('admin_layouts/footer.php') ?>