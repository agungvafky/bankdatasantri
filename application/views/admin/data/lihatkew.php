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
             <div class="block-header">
                <h3>Data Santri</h3>
                 Halaman ini memungkinan anda untuk mengelola data santri(Simpan, cek data, edit, generate qr code, dan hapus data).
            </div>
            
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Santri Sumatera Thawalib Parabek
                            </h2>
                            

                            <div class="card-header">
                                
                            </div>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nobp</th>
                                            <th>Tetala</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nobp</th>
                                            <th>Tetala</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php $n=1; foreach ($santri as $no): ?>
                                    <tr>
                                        <td width="5">
                                            <?php echo $n ?>
                                        </td>
                                        <td>
                                            <?php echo $no->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $no->nobp ?>
                                        </td>
                                         <td>
                                            <?php echo $no->tempat.'/'.$no->tgll ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/data/'.$no->pas) ?>" width="64" />
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/santri/lihatw/'.$no->nobp) ?>" class="btn btn-success waves-effect">
                                            <i class="material-icons">remove_red_eye</i> <span class="icon-name">Check</span>
                                            </a>

                                        
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>
   <?php $this->load->view("admin/partial/modal.php") ?>
    <!-- Jquery Core Js -->
   <?php $this->load->view("admin/partial/js.php"); ?>
   <script>
    function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
    }
</script>

</body>

</html>
