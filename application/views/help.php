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
    <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);"  data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                  
                    <table width="332" border="0">
                      <tr>
                        <td width="46">&nbsp;</td>
                        <td width="270"><img src="<?php echo base_url('images/logo icsd2.png') ?>" width="270" height="70" /></td>
                      </tr>
                    </table>
                    
                </div>
               
            </div>
        </nav>
    <!-- #Top Bar -->
    

    <section>
        <div class="container-fluid">
            <br><br><br><br>
             <div class="block-header">
                <h3>Help</h3>
                Halaman ini memberikan informasi yang anda butuhkan untuk memahami dan mengoperasikan sistem informasi ICDS.
            </div>
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                    <div class="header">
                         <a href="<?php echo site_url('sa/l/'.$nobp) ?>"  class="btn btn-default waves-effect">
                            <i class="material-icons">backspace</i> <span class="icon-name">Kembali</span>
                            </a>
                   <br><br> <center><h2>Id Card dan Data Santri (ICDS)</h2></center>  
                    </div>
            <div class="body">
            <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem ini merupakan sistem informasi yang dapat menghasilkan Id card santri yang dilengkapi dengan QR Code sebagai kode data diri santri, sistem ini sebagai wadah dari data diri santri khususnya data nilai semester santri. Santri dapat melihat dan mendapatkan data diri sendiri dengan cara melakukan scanner pada Qr code, Scanner dapat dilakukan dengan menggunakan android yang telah dilengkapi dengan fitur scanner Qr Code atau dengan aplikasi scanner Qr Code jika android belum dilengkapi dengan fitur scanner QR Code.</p>

            <div class="panel panel-default panel-post">
                <div class="panel-heading">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">1. Tujuan Sistem Informasi ICDS</h4>  
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="post">
                        <ul type="disc">
                            <li>Mempermudah santri dalam mengambil data diri santri khususnya data nilai semester pada saat dibutuhkan</li>
                        </ul>
                    </div>
                 </div>
            </div>
            <div class="panel panel-default panel-post">
                <div class="panel-heading">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">2. Manfaat Sistem Informasi ICDS</h4>  
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="post">
                       
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi wali santri :
                        <ul type="disc">
                            <li>Memudahkan orang tua atau wali santri dalam mengetahui nilai anaknya, karena orang tua santri dapat melihat kapan dan dimana saja nilai anaknya dengan hanya menggunakan kartu pelajar.</li>
                        </ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi santri :
                        <ul type="disc">
                            <li>Memudahkan santri mengambil data hasil penilaian pada saat diperlukan.</li>
                            <li>Data hasil nilai akhir santri lebih terjaga penyimpanannya.</li>
                        </ul>
                    </div>
                 </div>
            </div>
             <div class="panel panel-default panel-post">
                <div class="panel-heading">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">3. Petunjuk Menggunakan Sistem Informasi ICDS</h4>  
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="post">
                        <br>
            
                         <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem informasi ICDS memungkinkan anda untuk mendapatakan nilai semester yang anda inginkan, untuk mendapatkan nilai semester anda dapat menekan tombol download pada tabel nilai santri sumatera thawalib parabek</p>
                       
                       <img src="<?php echo base_url('images/hp.png') ?>" width="240" height="470" /></span>

                      

                    </div>
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
  
</body>

</html>
