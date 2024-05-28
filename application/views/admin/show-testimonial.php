

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Testimonial Content Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Testimonial Tables</li>
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
                  if ($this->session->flashdata('delete_test')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('delete_test') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['delete_test']);
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
                  } ?>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                   <tr>
                    <th>S.No.</th>
                    <th>Student Name </th>
                    <th>Designation</th>
                    <th>Student Comments</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($test as $key) 
                        {
                        ?>
                   <tr>
                      <td><?= $sl++; ?></td>
                        <td style="text-align: justify;"><?=$key->name;?></td>
                        <td style="text-align: justify;"><?=$key->designation;?></td>
                        <td style="text-align: justify;"><?=$key->comment;?></td>
                        <td>
                            <a class="btn btn-danger" href="<?=base_url()."AdminController/test_delete/".$key->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>      
                            <a class="btn btn-success" href="edit-test?id=<?= $key->id; ?>"><i class="fa-solid fa-pen"></i></a>
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
    
<script src="../assets/admin_assets/jquery/jquery.min.js"></script>

<script src="../assets/admin_assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/admin_assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/admin_assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/admin_assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/admin_assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/admin_assets/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/admin_assets/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/admin_assets/jszip/jszip.min.js"></script>
<script src="../assets/admin_assets/pdfmake/pdfmake.min.js"></script>
<script src="../assets/admin_assets/pdfmake/vfs_fonts.js"></script>
<script src="../assets/admin_assets/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/admin_assets/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/admin_assets/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../assets/admin_assets/js/adminlte.min.js?v=3.2.0"></script>

<script src="../assets/admin_assets/js/demo.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

<?php include('admin_layouts/footer.php')?>