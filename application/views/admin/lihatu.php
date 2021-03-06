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
   
<br><br><br><br><br><br><br><br>
    <section class="content">
        <br><br><br><br><br><br><br><br>
        <div class="container-fluid">
           <br><br><br><br><br><br><br><br>
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                 <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="<?php echo base_url('upload/data/'.$santri->pas) ?>" height="150" width="150" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?php echo $santri->nama ?> </h3>
                               
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>NoBP</span>
                                    <span><?php echo $santri->nobp ?></span>
                                </li>
                                <li>
                                    <span>Tetala</span>
                                    <span><?php echo $santri->tempat ?>, <?php echo $santri->tgll ?></span>
                                </li>
                                <li>
                                    <span>Qr Code</span>
                                    <span><img src="<?php echo base_url('upload/kode/'.$santri->qr) ?>" height="50" width="50"></span>
                                </li>
                                
                            </ul>
                            

                            
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Nilai Santri Sumatera Thawalib Parabek
                            </h2>
                            <a href="<?php echo site_url('admin/santri') ?>" class="btn btn-default waves-effect">
                            <i class="material-icons">backspace</i> <span class="icon-name">backspace</span>
                            </a>
                           
                            <div class="card-header">
                              
                            </div>
                            
                        </div>
                        <div class="body">
                             <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nilai</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td >
                                            <B>Semester 1</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s1) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <B>Semester 2</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s2) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <B>Semester 3</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s3) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <B>Semester 4</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s4) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <B>Semester 5</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s5) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <B>Semester 6</B>
                                            <embed width="950" height="500" src="<?php echo base_url('upload/data/'.$santri->s6) ?>" type="application/pdf"></embed>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                             </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


        
    </section>
   <?php $this->load->view("admin/partial/modal.php") ?>
    <!-- Jquery Core Js -->
   <?php $this->load->view("admin/partial/js.php"); ?>
   

</body>

</html>
