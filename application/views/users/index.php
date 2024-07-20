<?php include('layouts/header.php') ?>

<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1 class="m-0">Dashboard</h1> -->
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>


  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-4 col-6">

          <div class="small-box bg-info">
            <div class="inner">
              <?php
              $data = $this->db->query("select * from registration")->num_rows();
              echo "<h3>$data</h3>";
              ?>
              <p>Total Registration</p>

            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">

          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $data = $this->db->query("select * from enquiry")->num_rows();
              echo "<h3>$data</h3>";
              ?>
              <p>Total Enquiry</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">

          <div class="small-box bg-warning">
            <div class="inner">
              <h3>1</h3>
              <p>Total</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  </section>

</div>

<?php include('layouts/footer.php') ?>
