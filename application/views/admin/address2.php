<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Address Show Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">address2 Table</li>
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
            <!-- <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div> -->

            <?php
            if ($this->session->flashdata('edit_address2')) {
            ?>
              <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?= $this->session->flashdata('edit_address2') ?></strong>
              </div>
            <?php
              unset($_SESSION['edit_address2']);
            } ?>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <tr>
                  <th>S.No.</th>
                  <th>Office Name</th>
                  <th>Office Address</th>
                  <th>Email Id</th>
                  <th>Mobile Number</th>
                  <th>Action</th>
                </tr>
                <?php
                $sl = 1;
                foreach ($address2 as $key) {
                ?>
                  <tr>
                    <td><?= $sl++; ?></td>
                    <td style="text-align: justify;"><?= $key->office_name; ?></td>
                    <td style="text-align: justify;"><?= $key->address; ?></td>
                    <td style="text-align: justify;"><?= $key->email; ?></td>
                    <td style="text-align: justify;"><?= $key->mobile_no; ?></td>
                    <td><a class="btn btn-success" href="edit-address2?id=<?= $key->id; ?>"><i class="fa-solid fa-pen"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>

<?php include('admin_layouts/footer.php') ?>