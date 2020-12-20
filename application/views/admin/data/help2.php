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
                <h3>Bantuan</h3>
                Halaman ini memberikan informasi yang anda butuhkan untuk memahami dan mengoperasikan sistem informasi ICDS.
            </div>
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                    <div class="header">
                    <center><h2>Id Card dan Data Santri (ICDS)</h2></center>  
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
                            <li>Mempermudah dalam membuat Id Card santri</li>
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
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi sekolah :
                        <ul type="disc">
                            <li>Meminimalisir pemalsuan ID Card santri di MTs Sumatera Thawalib Parabek.</li>
                            <li>Data hasil nilai akhir santri lebih terjaga penyimpanannya.</li>
                        </ul>
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
                        <div class="panel panel-default panel-post">
                            <div class="panel-heading">
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Daftar Isi</h4>  
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="post">
                                    <ol type="A">
                                        <li>Menu data santri
                                            <ol type="1">
                                                <li><a href="#melihatsantri">Melihat data santri</a></li>
                                                <a href="#checksantri"><li>Cek data santri</li></a>
                                                <a href="#editsantri"><li>Edit data santri</li></a>
                                            </ol>
                                        </li>
                                        <li>Menu Person
                                            <ol type="1">
                                                <li><a href="#cetakp">Mencetak id card</a></li>
                                            </ol>
                                        </li>

                                        <li>Menu Group
                                            <ol type="1">
                                                <li><a href="#cetakg">Mencetak id card</a></li>
                                            </ol>
                                        </li>

                                        <li>Menu Profil
                                            <ol type="1">
                                                <a href="#editprofil"><li>Edit profil</li></a>
                                                <a href="#password"><li>Mengganti password</li></a>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                             </div>
                        </div>

                        <span id="melihatsantri"><h5>A. Menu data santri</h5></span>
                        <p align="justify"> Menu data santri memungkinkan anda untuk mengelola data santri dari kelas anda.</p>
                        <b>1. Melihat data santri</b><br>
                        Anda dapat melihat data santri dengan cara klik menu data santri .<br>
                        &nbsp; <span id="checksantri"><img src="<?php echo base_url('images/lihatsantrisantriwa1.jpg') ?>" width="470" height="240" /></span><br><br>

                        <b>2. Cek  data santri</b><br>
                        Anda dapat melihat data santri lebih rinci dengan cara klik tombol cek,<br>
                        &nbsp; <img src="<?php echo base_url('images/checksantriwa1.jpg') ?>" width="470" height="240" /><br><br>
                        pada halaman ini anda dapat melihat profil santri dan mendownload data nilai semester santri.
                        &nbsp; <span id="editsantri"><img src="<?php echo base_url('images/checksantri2.jpg') ?>" width="470" height="240" /></span><br><br>

                        <b>3. Edit  data santri</b><br>
                        <p align="justify">Anda dapat mengedit data santri jika terjadi kesalahan input data atau ada data yang perlu diganti dengan cara cek data santri seperti penjelasan sebelumnya, klik tombol edit,</p>
                        &nbsp; <img src="<?php echo base_url('images/editsantri1.jpg') ?>" width="470" height="240" /><br><br>
                        pada halaman ini anda dapat mengedit data santri, lalu klik tombol simpan untuk menyimpan data.<br><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>nobp tidak dapat di edit</li>
                        </ul>
                            </font>
                        &nbsp;<img src="<?php echo base_url('images/editsantri2.jpg') ?>" width="470" height="240" /><br><br>
                        jika data santri berhasil disimpan maka akan muncul notifikasi data berhasil disimpan.<br>
                         &nbsp;<span id="cetakp"><img src="<?php echo base_url('images/editsantri3.jpg') ?>" width="337" height="190" /></span><br><br>


                        <h5>B. Menu Perorang</h5>
                        <p align="justify"> Menu person memungkinkan anda untuk mencetak id card santri secara individu atau perorang.</p>
                        <b>1. mencetak id card</b><br>
                        <p align="justify">Anda dapat mencetak id card santri dengan cara memasukkan nobp pada kolom yang telah ditentukan, data santri dari nobp yang dimasukkan akan tampil secara otomatis jika data tersebut telah tersimpan sebelumnya, lalu klik tombol untuk mencetak id card santri.</p><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>jika nobp yang dimasukkan belum tersimpan sebelumnya, maka data tidak akan muncul secara otomatis dan data tidak bisa disimpan</li>
                        </ul>
                            </font>
                        &nbsp; <img src="<?php echo base_url('images/cetak1.jpg') ?>" width="470" height="240" /><br><br>
                        berikut adalah tampilan id card yang telah jadi.<br>    
                         &nbsp;<span id="cetakg"><img src="<?php echo base_url('images/cetak2.jpg') ?>" width="470" height="240" /></span><br> <br> 

                        <h5>C. Menu Group</h5>
                        <p align="justify"> Menu group memungkinkan anda untuk mencetak id card santri secara kelompo.k</p>
                        <b>1. mencetak id card</b><br>
                        <p align="justify">Anda dapat mencetak id card santri secara kelompok berdasarkan kelas dengan cara klik tombol cetak,</p>
                         &nbsp;<span id="melihatuser"> <img src="<?php echo base_url('images/cetak5.jpg') ?>" width="470" height="240" /></span><br><br>
                         di bawah ini adalah hasil dari id card yang anda cetak.<br>
                         &nbsp;<span id="editprofil"><img src="<?php echo base_url('images/cetak4.jpg') ?>" width="470" height="240" /></span><br> <br> 

                        <h5>D. Profil</h5>
                        <p align="justify"> Menu profile memungkinkan anda untuk mengubah profil anda.</p>
                        <b>1. Edit profil</b><br>
                        <p align="justify">Anda dapat dapat mengubah data profile anda dengan cara klik tombol profil,</p>
                         &nbsp;<span id="melihatuser"> <img src="<?php echo base_url('images/profile1.jpg') ?>" width="470" height="240" /></span><br><br>
                         lalu anda dapat mengubah data pada kolom yang telah ditentukan dan klik tombol simpan untuk menyimpan data.<br>
                        &nbsp;<img src="<?php echo base_url('images/editprofile.jpg') ?>" width="470" height="240" /><br><br>
                        jika data berhasil diubah maka akan tampil notifikasi data berhasil disimpan.<br>
                         &nbsp;<span id="password"><img src="<?php echo base_url('images/editsantri3.jpg') ?>" width="337" height="190" /></span><br><br>
                         <b>2. Mengganti password</b><br>
                        <p align="justify">Anda dapat mengganti password dengan cara masuk ke halaman edit profile, ubah password pada form ganti password, lalu klik tombol simpan untuk menyimpan data.</p>
                         <font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>Passwoord hanya dapat dirubah jika password lama benar dan password baru dengan konfirmasi password bernilai sama</li>
                        </ul>
                            </font>
                         &nbsp;<img src="<?php echo base_url('images/password2.jpg') ?>" width="470" height="240" /><br><br>
                         jika password berhasil dirubah maka akan tampil notifikasi data berhasil disimpan.<br>
                         &nbsp;<img src="<?php echo base_url('images/editsantri3.jpg') ?>" width="337" height="190" /><br><br><br>

                         Anda juga dapat melihat video tutorial tentang penggunaan sistem informasi ICDS ini <a href="https://youtu.be/TwWP9Inxfzw" target="_blank">KLIK DI SINI</a>

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
