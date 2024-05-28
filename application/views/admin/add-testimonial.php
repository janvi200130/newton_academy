<?php include('admin_layouts/header.php') ?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6">
          <h1>Slider Added Form</h1>
        </div> -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial</li>
                    </ol>
                </div>
            </div>
            <?php
            if ($this->session->flashdata('success_test')) {
            ?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong><?= $this->session->flashdata('success_test') ?></strong>
                </div>
            <?php
                unset($_SESSION['success_test']);
            } ?>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Testimonial Add Form</h3>
                        </div>

                        <form action="" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" class="form-control" id="designation" placeholder="Enter Your Designation" required>
                                </div>

                                <div class="form-group">
                                    <label for="comment">Student Comments</label>
                                    <textarea type="text" name="comment" id="comment" class="form-control" placeholder="Enter Student Comments" required></textarea>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?php include('admin_layouts/footer.php') ?>