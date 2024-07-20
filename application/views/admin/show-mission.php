

<?php include('admin_layouts/header.php')?>

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Mission Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mission Tables</li>
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
                  if ($this->session->flashdata('edit_mission')) {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong><?= $this->session->flashdata('edit_mission') ?></strong>
                      </div>
                      <?php 
                      unset($_SESSION['edit_mission']);
                  } ?>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                   <tr>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Action</th>
                   </tr>
                   <?php
                      $sl = 1;
                        foreach ($mission as $key) 
                        {
                        ?>
                   <tr>
                      <td><?= $sl++; ?></td>
                        <td style="text-align: justify;"><?=$key->title;?></td>
                        <td>
                          <a class="btn btn-success" href="edit-mission?id=<?= $key->id; ?>"><i class="fa-solid fa-pen"></i></a>
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