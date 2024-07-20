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
            <li class="breadcrumb-item active">Address1</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Address1 Update Form</h3>
            </div>
            <?php
            foreach ($address1 as $key) {
            ?>
              <form action="<?= base_url('final-edit-address1'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" required value="<?= $key->id; ?>">
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Office Name</label>
                      <input id="office_name" name="office_name" class="form-control" value="<?= $key->office_name; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Office Address</label>
                      <input id="address" name="address" class="form-control" placeholder="Enter Your Office Address" value="<?= $key->address; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Office Email Id</label>
                      <input id="email" name="email" class="form-control" placeholder="Enter Office Email" value="<?= $key->email; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Mobile Number</label>
                      <input id="mobile_no" name="mobile_no" class="form-control" placeholder="Enter Office Mobile Number" value="<?= $key->mobile_no; ?>">
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
    .create(document.querySelector('#content'))
    .catch(error => {
      console.error(error);
    });
</script>


<?php include('admin_layouts/footer.php') ?>