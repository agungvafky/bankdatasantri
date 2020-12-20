<!DOCTYPE html>
<html>

<head>
   <?php $this->load->view("admin/partial/head.php"); ?>
   <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

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
             <div class="row clearfix ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                    <div class="header">
                        <a href="<?php echo site_url('admin/santri') ?>" class="btn btn-default waves-effect">
                            <i class="material-icons">backspace</i> <span class="icon-name">Kembali</span>
                            </a><br><br>
                            NB :<font color="red"> * = Harus diisi</font>
                    </div>

                    <div class="body">
                <div class="row clearfix js-sweetalert">
            <form action="<?php echo site_url('admin/santri/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group form-float">
                <label class="form-label">Nobp<font color="red">*</font></label>  
                    <div class="form-line">
                      <input  type="number" class="form-control" name="nobp" placeholder="No BP" >    
                    </div>
                    <div class="invalid-feedback">
                    <?php echo form_error('nobp') ?>
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Santri" >
                    </div>
                    <div class="invalid-feedback">
                    <?php echo form_error('nama') ?>
                    </div>
               </div>
              
                <div class="form-group form-float">
                <label class="form-label">Tempat Lahir<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir" >
                    </div>
                </div>  

                <div class="form-group form-float">
                <label class="form-label">Tanggal Lahir<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="date" class="form-control" name="tgll"  >
                    </div>
                </div>  

                <div class="form-group form-float">
                <label class="form-label"><b>Kelas</b><font color="red">*</font></label>  
                    <div class="form-line">
                 <select class="form-control show-tick" name="kelas">
                                        <option value="">-- Please select --</option>
                                        <?php foreach($las as $k) : ?>
                    <option value="<?php echo $k->idk ?>"><?php echo $k->nkelas ?></option>
                    <?php endforeach; ?>
                                        
                                    </select>
                                </div>
                            </div>


                <div class="form-group form-float">
                <label class="form-label">Pas Foto</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="pas" accept="image/*">
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nomor Hp<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="nohp" placeholder="Nomor Hp" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Alamat Saat Ini<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat Saat Ini" >
                    </div>
                </div>

                <div class="form-group form-float">
                    <label class="form-label"><b>Gender</b><font color="red">*</font></label>  
                        <div class="form-line">
                        <select class="form-control show-tick" name="gender">
                            <option>-- Please select --</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                        </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Tinggi Badan<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="tinggibadan" placeholder="Tinggi Badan" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Berat Badan<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="beratbadan" placeholder="Berat Badan" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Golongan Darah<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="golongandarah" placeholder="Golongan Darah" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Warna Kulit<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="warnakulit" placeholder="Warna Kulit" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama Ayah<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nama Ibu<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Nomor Orang Tua<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="number" class="form-control" name="nomorortu" placeholder="Nomor Orang Tua" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Alamat Orang Tua<font color="red">*</font></label>
                    <div class="form-line">
                      <input type="text" class="form-control" name="alamatortu" placeholder="Alamat Orang Tua" >
                    </div>
                </div>

              

                <div class="form-group form-float">
                <label class="form-label">Semester 1</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s1">
                    </div>
                </div> 

                <div class="form-group form-float">
                <label class="form-label">Semester 2</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s2">
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 3</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s3">
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 4</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s4" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 5</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s5" >
                    </div>
                </div>

                <div class="form-group form-float">
                <label class="form-label">Semester 6</label>
                    <div class="form-line">
                      <input type="file" class="form-control" name="s6"  >
                    </div>
                </div>
                 
                <button type="submit" class="btn bg-orange btn-circle-lg waves-effect waves-circle waves-float" data-type="success" >
                <i class="material-icons">save</i></button>
               
            
            </form>
        </div>
            </div>
        </div>
      </div>
    </div>
</div>


    </section>
   <?php $this->load->view("admin/partial/modal.php") ?>
    <!-- Jquery Core Js -->
   <?php $this->load->view("admin/partial/js.php"); ?>


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
