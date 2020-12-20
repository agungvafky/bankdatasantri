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
           <?php if ($this->session->flashdata('success')): ?>
               
                <script src="<?php echo base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
                <script>
                    swal(
                        'Good Job!', 'Data berhasil disimpan', 'success');
                </script>
                <?php endif; ?>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                        <a href="<?php echo site_url('admin/santri/users/') ?>" class="btn btn-default waves-effect">
                        <i class="material-icons">backspace</i> <span class="icon-name">Kembali</span>
                        </a>
                        
                    </div>
                    <div class="body">
                <form action="" method="post" enctype="multipart/form-data" >

                <div class="form-group form-float">
                <label class="form-label"><b>Nomor</b></label>  
                    <div class="form-line">
                      <input  type="number" class="form-control" name="no" value="<?php echo $use->no ?>" readonly>
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama</label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="nama" value="<?php echo $use->nama ?>" required>
                    </div>
               </div>
               <input  type="hidden" class="form-control" name="pas" value="<?php echo $use->pass ?>" readonly>

                <div class="form-group form-float">
                <label class="form-label"><b>Level</b></label>  
                <div class="form-line">
                <select class="form-control show-tick" name="level">
                <option><?php echo $use->level ?></option>
                <option>1</option>
                <option>2</option>
                </select>
                </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Kelas</b></label>  
                <div class="form-line">
                <select class="form-control show-tick" name="idkelas">
                <option><?php echo $use->idkelas ?></option>
                <?php foreach($las as $k) : ?>
                <option value="<?php echo $k->idk ?>"><?php echo $k->nkelas ?></option>
                <?php endforeach; ?>
                </select>
                </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Foto</label>
                            <div class="form-line">
                      <input type="file" class="form-control" name="foto" accept="image/*" >
                      <input type="hidden" name="old_pas" value="<?php echo $use->foto ?>"  />
                    </div>
                </div> 
                 
                <button type="submit" class="btn bg-orange btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">save</i></button>
            </form>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid">
          
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                       
                        <h4>Ganti Password</h4>
                    </div>
                    
                    <div class="body">
         <form action="<?php echo site_url('admin/santri/passwo') ?>" method="post" enctype="multipart/form-data">
                 <input  type="hidden" class="form-control" name="no" value="<?php echo $use->no ?>" readonly>
                 <input  type="hidden" class="form-control" name="nama" value="<?php echo $use->nama ?>" readonly>
                <div class="form-group form-float">
                <label class="form-label"><b>Password Lama</b></label>  
                    <div class="form-line">
                      <input  type="Password" class="form-control" name="pasl" placeholder="Password Lama" required>
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Password baru</label>
                    <div class="form-line">
                      <input type="Password" class="form-control" name="pasb" placeholder="Password Baru" required>
                    </div>
               </div>
              
                <div class="form-group form-float">
                <label class="form-label">Konfirmasi Password Baru</label>
                    <div class="form-line">
                      <input type="Password" class="form-control" name="kpas" placeholder="Konfirmasi Password" required>
                    </div>
                </div>  
                <input  type="hidden" class="form-control" name="level" value="<?php echo $use->level ?>" readonly>
                <input  type="hidden" class="form-control" name="idkelas" value="<?php echo $use->idkelas ?>" readonly>
                <input  type="hidden" class="form-control" name="foto" value="<?php echo $use->foto ?>" readonly>

                
                <button type="submit" class="btn bg-orange btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">save</i></button>
               
            
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
