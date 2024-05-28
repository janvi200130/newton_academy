<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEWTON ACADEMY | Dashboard</title>

    <link rel="icon" href="<?=base_url();?>assets/admin_assets/img/logo.jpg" type="image/icon">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/adminlte.min.css?v=3.2.0"/>

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/summernote/summernote-bs4.min.css" />

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/codemirror/codemirror.css" />

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/codemirror/theme/monokai.css" />

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/simplemde/simplemde.min.css" />

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/summernote/summernote-bs4.min.css">
   
    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/datatables-bs4/css/dataTables.bootstrap4.min.css">
   
    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/datatables-responsive/css/responsive.bootstrap4.min.css">
   
    <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/datatables-buttons/css/buttons.bootstrap4.min.css">
    
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
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
           
                <a href="#" class="brand-link">
                    <h4>NEWTON ACADEMY</h4>
                </a>
           <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url('admin') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('contact_us')?>" class="nav-link">
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
                                    <a href="<?= base_url('add-gallery')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Gallery</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-gallery')?>" class="nav-link">
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
                                    <a href="<?= base_url('add-slider')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Slider</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-slider')?>" class="nav-link">
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
                                    <a href="<?= base_url('show-about')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Introduction</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('director-msg')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Director Message</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="<?= base_url('chairman-msg')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chairmain Message</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('mission')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mission</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('vission')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vission</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('show-counter')?>" class="nav-link">
                                <i class="fa-solid fa-globe"></i>
                                <p>Counter</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                             <i class="fa-solid fa-comment"></i>
                                <p>Testimonial
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                
                                <li class="nav-item">
                                    <a href="<?= base_url('add-testimonial')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Testimonial</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('show-testimonial')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Show Testimonial</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('facility')?>" class="nav-link">
                                <i class="fa-regular fa-face-smile"></i>
                                <p>Facility</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-gear"></i>
                                <p>Website Setting</p>
                            </a>
                            <!-- <ul class="nav nav-treeview">
                                
                                <li class="nav-item">
                                    <a href="</?= base_url('show-about')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Introduction</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="</?= base_url('#')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Director Message</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="</?= base_url('show-gallery')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chairmain Message</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="</?= base_url('show-mission')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mission</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="</?= base_url('show-vission')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vission</p>
                                    </a>
                                </li>
                            </ul> -->
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>

