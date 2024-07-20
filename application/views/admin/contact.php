
<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4>Students Contact Tables</h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">contact</li>
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
                  if ($this->session->flashdata('contact_deleted')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('contact_deleted') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['contact_deleted']);
                  } ?>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover table-responsive">
                   <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subjects</th>
                    <th>Message</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($contact as $contacts) 
                        {
                        ?>
                   <tr>
                        <td><?= $sl++; ?></td>
                        <td><?=$contacts->name;?></td>
                        <td><?=$contacts->email;?></td>
                        <td><?=$contacts->phone;?></td>
                        <td><?=$contacts->subject;?></td>
                        <td><?=$contacts->message;?></td>
                        <td>
                          <a class="btn btn-danger" href="<?=base_url()."AdminController/contact_delete/".$contacts->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>      
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