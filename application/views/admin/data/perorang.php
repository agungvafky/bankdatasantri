<!DOCTYPE html>
<html>

<head>
   <?php $this->load->view("admin/partial/head.php"); ?>
   <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
        <!-- Right Sidebar -->
        <?php $this->load->view("admin/partial/rsidebar.php") ?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php $this->load->view("admin/partial/breadcrumb.php") ?>
            <div class="block-header">
                <h3>Perorang</h3>
                Halaman ini memungkinkan anda untuk mencetak Id Card Santri, dengan cara menginputkan Nobp santri lalu data akan muncul secara otomatis, dan tekan tombol cetak untuk membuat id card santri.
            </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                     <center><h2>Cetak Id Card</h2></center>   
                    </div>
                    <div class="body">
            <form method="post" action="<?php echo site_url('admin/santri/kartu') ?>">

                <div class="form-group form-float">
                <label class="form-label"><b>Nobp</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="nobp" id="nobp" placeholder="no bp...."  required>    
                    </div>
                     
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Nama</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="nama" placeholder="Kelas"  readonly>    
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Tempat Lahir</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="tempat" placeholder="tempat"  readonly>    
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Tanggal Lahir</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="tgll" placeholder="tanggal lahir"  readonly>    
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Kelas</b></label>  
                    <div class="form-line">
                      <input  type="text" class="form-control" name="kelas" placeholder="Kelas"  readonly>    
                    </div>
                </div>
                
                <button type="submit" formtarget="_blank" class="btn btn-primary btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">credit_card</i></button></a>
            
            </form>
            </div>
        </div>
      </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url().'plugins/jquery/jquery.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nobp').on('input',function(){
                 
                var nobp=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/admin/santri/otomatis')?>",
                    dataType : "JSON",
                    data : {nobp: nobp},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nobp, nama, tempat, tgll, kelas){
                            $('[name="nama"]').val(data.nama);
                            $('[name="tempat"]').val(data.tempat);
                            $('[name="tgll"]').val(data.tgll);
                             $('[name="kelas"]').val(data.kelas);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
 </script>
    </section>
   <?php $this->load->view("admin/partial/modal.php") ?>
    <!-- Jquery Core Js -->
 <?php $this->load->view("admin/partial/js.php") ?>


   
</body>

</html>
