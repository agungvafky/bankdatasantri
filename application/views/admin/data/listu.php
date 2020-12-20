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
                <h3>Pengaturan User</h3>
                Halaman ini memungkinkan anda untuk mengolah data user, yaitu super admin/staf TU dan admin biasa/wali kelas(Simpan, Edit, dan Hapus data)
            </div>
            <?php if ($this->session->flashdata('success')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'Good Job!', 'Data berhasil disimpan', 'success');
                </script>
                <?php endif; ?>

                <?php if ($this->session->flashdata('gagal')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'oh nooo!', 'Data gagal disimpan', 'error');
                </script>
                <?php endif; ?>
                <?php if ($this->session->flashdata('gagal2')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'oh nooo!', 'Password lama salah', 'error');
                </script>
                <?php endif; ?>
                <?php if ($this->session->flashdata('gagal3')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'oh nooo!', 'Password baru dengan konfirmasi password harus sama', 'error');
                </script>
                <?php endif; ?>
            
            <!-- Basic Examples -->
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                        
                            <p align="Left"><button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#aduser" ><i class="material-icons">person_add</i><span class="icon-name">Tambah User</span></button></p>
                            <center>
                             <h2>
                            Users
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
                                            <th width="5">No</th>
                                            <th>Nama</th>
                                            <th>Id</th>
                                            <th>Foto</th>
                                            <th>Level</th>
                                            <th>Id Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th width="5">No</th>
                                            <th>Nama</th>
                                            <th>Id</th>
                                            <th>Foto</th>
                                            <th>Level</th>
                                            <th>Id Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       <?php $n=1; foreach ($us as $no): ?>
                                    <tr>
                                        <td width="5">
                                            <?php echo $n ?>
                                        </td>
                                        <td>
                                            <?php echo $no->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $no->no ?>
                                        </td>
                                         <td>
                                            <img src="<?php echo base_url('upload/foto/'.$no->foto) ?>" width="64" />
                                        </td>
                                       
                                        <td>
                                            <?php echo $no->level ?>
                                        </td>
                                        <td>
                                            <?php echo $no->idkelas ?>
                                        </td>
                                        <td width="250">
                                           
                                            <a href="<?php echo site_url('admin/santri/editu/'.$no->no) ?>" class="btn btn-primary waves-effect">
                                            <i class="material-icons">edit</i> <span class="icon-name">edit</span>
                                            </a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/santri/deleteu/'.$no->no) ?>')"
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
    function deleteConfirm(url){
    $('#btn-deleteu').attr('href', url);
    $('#deleteModalu').modal();
    }
</script>
<script>
    function executeExample() {
        swal(
            'Good job!',
            'Data disimpan',
            'success'
            )
    }
</script>
</body>

</html>
