﻿<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Gallery Show Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tables</li>
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
            <?php
            if ($this->session->flashdata('gallery_deleted')) {
            ?>
              <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?= $this->session->flashdata('gallery_deleted') ?></strong>
              </div>
            <?php
              unset($_SESSION['gallery_deleted']);
            } ?>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <tr>
                  <th>S.No.</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                <?php
                $sl = 1;
                foreach ($gallery as $key) {
                ?>
                  <tr>
                    <td><?= $sl++; ?></td>
                    <td><img src="<?= base_url() ?>assets/admin_assets/uploads/gallery/<?= $key->gallery_image; ?>" style="height:100px;width: 100px;"></td>
                    <td><a class="btn btn-danger" href="<?= base_url() . "AdminController/gallery_delete/" . $key->id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
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