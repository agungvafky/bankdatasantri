<!DOCTYPE html>
<html>

<head>
   <?php $this->load->view("admin/partial/head.php"); ?>
   <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<body class="theme-red">
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
        <!-- Right Sidebar -->
        <?php $this->load->view("admin/partial/rsidebar.php") ?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('admin/santri/kelas') ?>">
                        <div class="row clearfix demo-icon-container">
                           <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <div class="demo-google-material-icon"> <i class="material-icons">backspace</i> 
                                <span class="icon-name">backspace</span> </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="body">
            <form action="<?php echo site_url('admin/santri/addk') ?>" method="post" enctype="multipart/form-data" >

               


                <div class="form-group form-float">
                <label class="form-label"><b>Nama Kelas</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="nkelas" placeholder="Kelas" >    
                    </div>
                     <div class="invalid-feedback">
                        <?php echo form_error('nkelas') ?>
                     </div>
                </div>

               
                 
                <button type="submit" class="btn bg-orange btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">save</i>
               
            
            </form>
            </div>
        </div>
      </div>
    </div>
</div>


    </section>
   <?php $this->load->view("admin/partial/modal.php") ?>
    <!-- Jquery Core Js -->
   <?php $this->load->view("admin/partial/js.php"); ?>

</body>

</html>
