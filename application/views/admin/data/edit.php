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
                        <a href="<?php echo site_url('admin/santri/lihat/'.$santri->nobp) ?>" class="btn btn-default waves-effect">
                        <i class="material-icons">backspace</i> <span class="icon-name">Kembali</span>
                        </a>
                        
                    </div>
                    <div class="body">
            <form action=" " method="post" enctype="multipart/form-data" >

                <div class="form-group form-float">
                <label class="form-label"><b>Nobp</b></label>  
                    <div class="form-line">
                      <input  type="number" class="form-control" name="nobp" value="<?php echo $santri->nobp ?>" readonly>    
                    </div>
                    <div class="invalid-feedback">
                        <?php echo form_error('nobp') ?>
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama</label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="nama" value="<?php echo $santri->nama ?>" >
                    </div>
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
               </div>
              
                <div class="form-group form-float">
                <label class="form-label">Tempat Lahir</label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="tempat" value="<?php echo $santri->tempat ?>" >
                    </div>
                    <div class="invalid-feedback">
                        <?php echo form_error('tempat') ?>
                    </div>
                </div>  

                <div class="form-group form-float">
                <label class="form-label">Tanggal Lahir</label>
                    <div class="form-line">
                      <input type="date" class="form-control" name="tgll" value="<?php echo $santri->tgll ?>"  >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label"><b>Kelas</b></label>  
                <div class="form-line">
                <select class="form-control show-tick" name="kelas">
                <option><?php echo $santri->kelas ?></option>
                <?php foreach($las as $k) : ?>
                <option value="<?php echo $k->idk ?>"><?php echo $k->nkelas ?></option>
                <?php endforeach; ?>
                </select>
                </div>
                </div>  

                <div class="form-group form-float">
                <label class="form-label">Pas Foto</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="pas" accept="image/*" >
                      <input type="hidden" name="old_pas" value="<?php echo $santri->pas ?>" />
                    </div>
                </div> 

                                <div class="form-group form-float">
                <label class="form-label">Nomor Hp<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="nohp" value="<?php echo $santri->nohp ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Alamat Saat Ini<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="alamat" value="<?php echo $santri->alamat ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label"><b>Gender</b><font color="red">*</font></label>  
                        <div class="form-line">
                        <select class="form-control show-tick" name="gender">
                            <option><?php echo $santri->gender ?></option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                        </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Tinggi Badan<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="tinggibadan" value="<?php echo $santri->tinggibadan ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Berat Badan<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="beratbadan" value="<?php echo $santri->beratbadan ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Golongan Darah<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="golongandarah" value="<?php echo $santri->golongandarah ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Warna Kulit<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="warnakulit" value="<?php echo $santri->warnakulit ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama Ayah<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ayah" value="<?php echo $santri->ayah ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama Ibu<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ibu" value="<?php echo $santri->ibu ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nomor Orang Tua<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="nomorortu" value="<?php echo $santri->nomorortu ?>" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Alamat Orang Tua<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="alamatortu" value="<?php echo $santri->alamatortu ?>" >
                    </div>
                </div>

                <input type="hidden" name="qr"  value="<?php echo $santri->qr ?>">

                <div class="form-group form-float">
                <label class="form-label">Semester 1</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s1">
                      <input type="hidden" name="old_s1" value="<?php echo $santri->s1 ?>" />
                    </div>
                </div> 

                <div class="form-group form-float">
                <label class="form-label">Semester 2</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s2">
                      <input type="hidden" name="old_s2" value="<?php echo $santri->s2 ?>" />
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 3</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s3">
                      <input type="hidden" name="old_s3" value="<?php echo $santri->s3 ?>" />
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 4</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s4" >
                      <input type="hidden" name="old_s4" value="<?php echo $santri->s4 ?>" />
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 5</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s5" >
                      <input type="hidden" name="old_s5" value="<?php echo $santri->s5 ?>" />
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 6</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s6"  >
                      <input type="hidden" name="old_s6" value="<?php echo $santri->s6 ?>" />
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
