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
           <?php if ($this->session->flashdata('success')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'Good Job!', 'Data berhasil disimpan', 'success');
                </script>
                <?php endif; ?>
                 <div class="block-header">
                <h3>Kelas</h3>
                 Halaman ini memungkinkan anda untuk membuat kelas, memasukkan santri ke dalam kelas, dan mengelola data santri (edit data dan cek data santri) berdasarkan kelas masing-masing.
            </div>
            <?php if ($this->session->flashdata('gagal')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'oh nooo!', 'Belum ada data', 'error');
                </script>
                <?php endif; ?>
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#tkelas">Tambah Baru</button>
                            <center>
                            <h2>
                            Kelas MTs Sumatera Thawalib Parabek
                            </h2>
                            </center>
                            

                            <div class="card-header">
                              
                            </div>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Id kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Id kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php $n=1; foreach ($kelas as $nok): ?>
                                    <tr>
                                        <td>
                                            <?php echo $n ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $nok->nkelas ?>
                                        </td>
                                        <td width="150">
                                            <?php echo $nok->idk ?>
                                        </td>
                                       
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/santri/lihatk/'.$nok->idk) ?>" class="btn btn-success waves-effect">
                                            <i class="material-icons">remove_red_eye</i> <span class="icon-name">Cek</span>
                                            </a>
                                            <a onclick="deleteConfirmk('<?php echo site_url('admin/santri/deletek/'.$nok->idk) ?>')"
                                             href="#!" class="btn btn-danger waves-effect">
                                                 <i class="material-icons">delete_forever</i> <span class="icon-name">Hapus</span>
                                             </a>
                                        </td>
                                    </tr>
                                    <?php $n++; endforeach; ?>
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
    function deleteConfirmk(url){
    $('#btn-deletek').attr('href', url);
    $('#deleteModalk').modal();
    }
</script>

</body>

</html>
