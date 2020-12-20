<!DOCTYPE html>
<html>

<head>
   
   <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('images/icob.ico')?>" type="image/x-icon">
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
     

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url('plugins/sweetalert/sweetalert.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('css/themes/all-themes.css')?>" rel="stylesheet" />
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <?php $this->load->view("admin/partial/navbar.php") ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
       <?php $this->load->view("admin/partial/lsidebar.php") ?>
        <!-- #END# Left Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
         <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DIALOGS
                    <small>Taken by <a href="https://github.com/t4t5/sweetalert" target="_blank">github.com/t4t5/sweetalert</a></small>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EXAMPLES</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix js-sweetalert">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A basic message</p>
                                    <button class="btn btn-primary waves-effect" data-type="basic">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A title with a text under</p>
                                    <button class="btn btn-primary waves-effect" data-type="with-title">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A success message!</p>
                                    <button class="btn btn-primary waves-effect" data-type="success">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                                    <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                                    <button class="btn btn-primary waves-effect" data-type="cancel">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A message with a custom icon</p>
                                    <button class="btn btn-primary waves-effect" data-type="with-custom-icon">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>An HTML message</p>
                                    <button class="btn btn-primary waves-effect" data-type="html-message">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A message with auto close timer</p>
                                    <button class="btn btn-primary waves-effect" data-type="autoclose-timer">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A replacement for the <b>prompt</b> function</p>
                                    <button class="btn btn-primary waves-effect" data-type="prompt">CLICK ME</button>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>With a loader (for AJAX request for example)</p>
                                    <button class="btn btn-primary waves-effect" data-type="ajax-loader">CLICK ME</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <!-- Jquery Core Js -->

   <!-- Jquery Core Js -->
    <script src=".<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url('plugins/bootstrap-notify/bootstrap-notify.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('plugins/node-waves/waves.js')?>"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('js/admin.js')?>"></script>
    <script src="<?php echo base_url('js/pages/ui/dialogs.js')?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('js/demo.js')?>"></script>

</body>

</html>
