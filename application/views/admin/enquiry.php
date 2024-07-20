

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Enquiry Table</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Enquiry</li>
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
                  if ($this->session->flashdata('delete_enquiry')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('delete_enquiry') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['delete_enquiry']);
                  } ?>
                
                <div class="card-body">
                  <table class="table table-bordered table-striped table-hover table-responsive">
                   <tr>
                    <th>S.No.</th>
                    <th>Student Name </th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Student Address</th>
                    <th>Note</th>
                    <th>Date</th>
                    <th>Assigned</th>
                    <th>Refrence</th>
                    <th>Source</th>
                    <th>Student Class</th>
                    <th>Number Of Child</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($enquiry as $key) 
                        {
                        ?>
                   <tr>
                      <td><?= $sl++; ?></td>
                        <td style="text-align: justify;"><?=$key->name;?></td>
                        <td style="text-align: justify;"><?=$key->mobile;?></td>
                        <td style="text-align: justify;"><?=$key->email;?></td>
                        <td style="text-align: justify;"><?=$key->description;?></td>
                        <td style="text-align: justify;"><?=$key->address;?></td>
                        <td style="text-align: justify;"><?=$key->note;?></td>
                        <td style="text-align: justify;"><?=$key->date;?></td>
                        <td style="text-align: justify;"><?=$key->assigned;?></td>
                        <td style="text-align: justify;"><?=$key->reference;?></td>
                        <td style="text-align: justify;"><?=$key->source;?></td>
                        <td style="text-align: justify;"><?=$key->student_class;?></td>
                        <td style="text-align: justify;"><?=$key->child;?></td>
                        <td>
                          <a class="btn btn-danger" href="<?=base_url()."AdminController/enquiry_delete/".$key->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>      
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