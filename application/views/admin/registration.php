

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4>Registration Tables</h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Registration</li>
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
                  if ($this->session->flashdata('delete_regist')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('delete_regist') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['delete_regist']);
                  } ?>
                
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover table-responsive">
                   <tr>
                    <th>S.No.</th>
                    <th>Student Name </th>
                    <th>Father's Name </th>
                    <th>Mobile Number</th>
                    <th>Parent Mobile Number</th>
                    <th>Student Class</th>
                    <th>Student Email</th>
                    <th>Password</th>
                    <th>Date Of Birth</th>
                    <th>Board Exam</th>
                    <th>Student Address</th>
                    <th>Student Image</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($regist as $key) 
                        {
                        ?>
                   <tr>
                      <td><?= $sl++; ?></td>
                        <td style="text-align: justify;"><?=$key->name;?></td>
                        <td style="text-align: justify;"><?=$key->father_name;?></td>
                        <td style="text-align: justify;"><?=$key->mobile;?></td>
                        <td style="text-align: justify;"><?=$key->parent_mobile;?></td>
                        <td style="text-align: justify;"><?=$key->student_class;?></td>
                        <td style="text-align: justify;"><?=$key->email;?></td>
                        <td style="text-align: justify;"><?=$key->password;?></td>
                        <td style="text-align: justify;"><?=$key->dob;?></td>
                        <td style="text-align: justify;"><?=$key->board;?></td>
                        <td style="text-align: justify;"><?=$key->address;?></td>
                        <td style="text-align: justify;"><?=$key->image;?></td>
                        <td>
                          <a class="btn btn-danger" href="<?=base_url()."AdminController/sign_delete/".$key->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>      
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