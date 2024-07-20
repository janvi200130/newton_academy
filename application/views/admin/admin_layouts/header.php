<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWTON ACADEMY | Dashboard</title>

    <link rel="icon" href="<?= base_url() ?>assets/admin_assets/img/logo.jpg" type="image/icon">

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/fontawesome-free/css/all.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/ionicons/2.0.1/css/ionicons.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/icheck-bootstrap/icheck-bootstrap.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/jqvmap/jqvmap.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/css/adminlte.min.css?v=3.2.0" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/overlayScrollbars/css/OverlayScrollbars.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin_assets/summernote/summernote-bs4.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <h4 class="text">NEWTON ACADEMY</h4>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('logout') ?>" class="dropdown-item">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>
                    </div>
                </li>

            </ul>


        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="<?= base_url('dashboard') ?>" class="brand-link">
                <img class="logo_dark" src="http://localhost/newton/assets/frontend_assets/images/logo.jpg" alt="logo" style="margin-top: -1px;width: 63px;height: 53px;margin-left: 70px;">
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                <h4>Dashboard</h4>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('sign-up') ?>" class="nav-link">
                                <i class="fa-solid fa-registered"></i>
                                <p>Registration</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('enquiries') ?>" class="nav-link">
                                <i class="fa-solid fa-list"></i>
                                <p>Enquiry</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('address1') ?>" class="nav-link">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <p>Address1</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('address2') ?>" class="nav-link">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <p> Address2 </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('contact_us') ?>" class="nav-link">
                                <i class="fa-solid fa-id-card"></i>
                                <p>Contact</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-photo-film"></i>
                                <p>Gallery</p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('add-gallery') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Gallery</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-gallery') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Gallery</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-sliders"></i>
                                <p>Slider Image
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('add-slider') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Slider</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-slider') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Slider</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-regular fa-address-card"></i>
                                <p>About Us
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('show-about') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Introduction</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('director-msg') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Director Message</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="<?= base_url('chairman-msg') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chairmain Message</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                <p>Mission</p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('add-mission') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Mission</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-mission') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Mission</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-eye-low-vision"></i>
                                <p>Vission</p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('add-vission') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Vission</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-vission') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Vission</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('show-counter') ?>" class="nav-link">
                                <i class="fa-solid fa-globe"></i>
                                <p>Counter</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-comment"></i>
                                <p>Testimonial</p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('add-testimonial') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Testimonial</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-testimonial') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Testimonial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-regular fa-face-smile"></i>
                                <p>Facility</p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('facility') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Facility</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-facility') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Facility</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-gear"></i>
                                <p>Website Setting</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                        <br><br><br><br>
                    </ul>
                </nav>
            </div>
        </aside>