

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4>Courses</h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Course</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
			<div class="col-12 my-3 text-right">
				<a href="add-course" class="btn btn-info text-light">Add Course</a>
			</div>
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
                   
                  </table>
                </div>
              </div>

            </div>

          </div>

        </div>

      </section>

    </div>
    

<?php include('admin_layouts/footer.php')?>
