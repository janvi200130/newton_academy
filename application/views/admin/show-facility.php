

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Hostel Facility Content Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Facility Tables</li>
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
                  if ($this->session->flashdata('delete_facility')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('delete_facility') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['delete_facility']);
                  } ?>
                <?php
                  if ($this->session->flashdata('edit_testi')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('edit_testi') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['edit_testi']);
                      unset($_SESSION['edit_testi']);
                  } ?>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                   <tr>
                    <th>S.No.</th>
                    <th>Hostel Facility</th>
                    <th>Hostel Image</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($fac as $key) 
                        {
                        ?>
                   <tr>
                      <td><?= $sl++; ?></td>
                        <td style="text-align: justify;"><?=$key->content;?></td>
                        <td style="text-align: justify;"><?=$key->facility_image;?></td>
                        <td>
                            <a class="btn btn-danger" href="<?=base_url()."AdminController/facility_delete/".$key->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>      
                            <!-- <a class="btn btn-success" href="edit-test?id=</?= $key->id; ?>"><i class="fa-solid fa-pen"></i></a> -->
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


<?php include('admin_layouts/footer.php')?>