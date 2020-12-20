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
                                        <li>Menu Kelas
                                            <ol type="1">
                                                <li><a href="#melihatkelas">Melihat kelas</a></li>
                                                <a href="#buatkelas"><li>Membuat kelas</li></a>
                                                <a href="#checkkelas"><li>Check kelas</li></a>
                                                <a href="#tambahkelas"><li>Menambahkan santri ke kelas</li></a>
                                            </ol>
                                        </li>

                                        <li>Menu Santri
                                            <ol type="1">
                                                <li><a href="#melihatsantri">Melihat data santri</a></li>
                                                <a href="#buatsantri"><li>Input data santri</li></a>
                                                <a href="#checksantri"><li>Check data santri</li></a>
                                                <a href="#editsantri"><li>Edit data santri</li></a>
                                            </ol>
                                        </li>

                                        <li>Menu Perorang
                                            <ol type="1">
                                                <li><a href="#cetakp">Mencetak id card</a></li>
                                            </ol>
                                        </li>

                                        <li>Menu Group
                                            <ol type="1">
                                                <li><a href="#cetakg">Mencetak id card</a></li>
                                            </ol>
                                        </li>

                                        <li>Menu Pengaturan User
                                            <ol type="1">
                                                <li><a href="#melihatuser">Melihat data user</a></li>
                                                <a href="#buatuser"><li>Input data user</li></a>
                                                <a href="#edituser"><li>Edit data user</li></a>
                                                <a href="#password"><li>Mengubah password user</li></a>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                             </div>
                        </div>
                        
                        <h5>A. Menu Class_list</h5>
                        <p align="justify">Menu Kelas memungkinkan anda untuk mengolola data kelas, data kelas harus diisi terlebih dahulu karena akan menjadi pilihan pada form tambah santri, edit santri, tambah user, dan edit user.</p>
                        <span id="melihatkelas"><b>1. Melihat Kelas</b></span><br>
                        Anda dapat melihat data kelas dengan cara klik menu Kelas.<br>
                        &nbsp; <span id="buatkelas"><img src="<?php echo base_url('images/lihatkelas.jpg') ?>" width="470" height="240" /></span>

                        <br><br>
                       <b>2. Membuat Kelas</b><br>
                        <p align="justify">Anda dapat membuat kelas dengan cara klik tombol tambah baru, lalu masukan nama kelas pada kolom yang diberikan, dan klik tombol simpan untuk menyimpan data.</p>
                        &nbsp; <span id="checkkelas"><img src="<?php echo base_url('images/buatkelas.jpg') ?>" width="470" height="240" /></span>

                        <br><br>
                       <b>3. Cek Kelas</b><br>
                        <p align="justify">Anda dapat dapat melihat data santri pada kelas yang anda inginkan dengan cara klik tombol cek.</p>
                        &nbsp;<span id="tambahkelas"><img src="<?php echo base_url('images/checkkelas.jpg') ?>" width="470" height="240" /></span>

                        <br><br>
                        <b>4. Menambahkan Santri ke Kelas</b><br>
                        <p align="justify">Anda dapat dapat menambahkan santri ke dalam kelas dengan cara cek kelas yang anda inginkan, klik tombol tambah santri,</p>
                        &nbsp;<img src="<?php echo base_url('images/tambah1.jpg') ?>" width="470" height="240" /><br><br>
                        anda dapat mencari santri yang ingin ditambahkan pada kolom search dan klik tombol tambah untuk menambahkan,
                         &nbsp;<img src="<?php echo base_url('images/tambah2.jpg') ?>"  width="470" height="240"/><br><br>
                         jika santri berhasil ditambahkan, maka notifikasi data berhasil disimpan akan muncul.<br>
                        <img src="<?php echo base_url('images/tambah3.jpg') ?>" width="337" height="190" /><br>
                        pada fitur edit akan dijelaskan pada menu santri karena penggunaanya sama.<br><br>


                      <span id="melihatsantri"><h5>B. Menu Santri</h5></span>
                        <p align="justify"> Menu santri memungkinkan anda untuk mengelola data santri, pada halaman ini qr code akan terbuat pada saat menambahkan data santri yang baru.</p>
                        <b>1. Melihat data santri</b><br>
                        Anda dapat melihat data santri dengan cara klik menu santri.<br>
                        &nbsp; <span id="buatsantri"><img src="<?php echo base_url('images/lihatsantri.jpg') ?>" width="470" height="240" /></span><br><br>

                        <b>2.Input  data santri</b><br>
                        Anda dapat membuat data santri dengan klik tombo tambah santri,<br>
                        &nbsp; <img src="<?php echo base_url('images/tambahsantri1.jpg') ?>" width="470" height="240" /><br>
                        pada form ini anda dapat mengisi data-data santri pada kolom yang telah ditentukan, lalu klik tombol simpan untuk menyimpan data santri,<br><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>Kolom yang bertanda (*) harus diisi</li>
                            <li>Data dengan nobp yang sama tidak bisa disimpan</li>
                            <li>Data nilai yang dimasukkan adalah data nilai yang telah lengkap dalam format pdf</li>
                            <li>Foto yang tidak dimasukkan hanya menyimpan siluet foto profil</li>
                        </ul>
                            </font>
                            &nbsp; <img src="<?php echo base_url('images/tambahsantri2.jpg') ?>" width="470" height="240" /><br><br>
                            Jika data santri berhasil disimpan, maka akan tampil notifikasi data berhasil disimpan.<br>
                            <span id="checksantri"> <img src="<?php echo base_url('images/tambahsantri3.jpg') ?>" width="337" height="190" /></span><br><br>

                        <b>3.Cek  data santri</b><br>
                        Anda dapat melihat data santri lebih rinci dengan cara klik tombol cek,<br>
                        &nbsp; <img src="<?php echo base_url('images/checksantri.jpg') ?>" width="470" height="240" /><br><br>
                        pada halaman ini anda dapat melihat profil santri dan mendownload data nilai semester santri yang telah diinputkan.
                        &nbsp; <span id="editsantri"><img src="<?php echo base_url('images/checksantri2.jpg') ?>" width="470" height="240" /></span><br><br>

                        <b>4. Edit  data santri</b><br>
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


                        <h5>C. Menu Perorang</h5>
                        <p align="justify"> Menu perorang memungkinkan anda untuk mencetak id card santri secara individu atau perorang</p>
                        <b>1. mencetak id card</b><br>
                        <p align="justify">Anda dapat mencetak id card santri dengan klik menu perorang, memasukkan nobp pada kolom yang telah ditentukan, data santri dari nobp yang dimasukkan akan tampil secara otomatis jika data tersebut telah tersimpan sebelumnya, lalu klik tombol untuk mencetak id card santri.</p><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>jika nobp yang dimasukkan belum tersimpan sebelumnya, maka data tidak akan muncul secara otomatis dan id card tidak bisa dicetak</li>
                        </ul>
                            </font>
                        &nbsp; <img src="<?php echo base_url('images/cetak1.jpg') ?>" width="470" height="240" /><br><br>
                        berikut adalah tampilan id card yang telah jadi.<br>    
                         &nbsp;<span id="cetakg"><img src="<?php echo base_url('images/cetak2.jpg') ?>" width="470" height="240" /></span><br> <br> 

                        <h5>D. Menu Group</h5>
                        <p align="justify"> Menu group memungkinkan anda untuk mencetak id card santri secara kelompok.</p>
                        <b>1. mencetak id card</b><br>
                        <p align="justify">Anda dapat mencetak id card santri secara kelompok berdasarkan kelas dengan cara pilih menu group dan klik tombol cetak,</p>
                         &nbsp;<img src="<?php echo base_url('images/cetak3.jpg') ?>" width="470" height="240" /><br><br>
                          di bawah ini adalah hasil dari id card yang anda cetak.<br>
                         &nbsp;<span id="melihatuser"> <img src="<?php echo base_url('images/cetak4.jpg') ?>" width="470" height="240" /></span><br> <br> <br>

                        <h5>E. Pengaturan User</h5>
                        <p align="justify"> Menu pengaturan user memungkinkan anda untuk mengelola data user. pada sistem icds user terbagi tiga yaitu super admin, admin biasa(wali kelas), user biasa(santri)</p>
                        <b>1. Melihat data user</b><br>
                        <p align="justify">Anda dapat melihat data user dengan cara klik menu pengaturan user.</p>
                         &nbsp;<span id="buatuser"> <img src="<?php echo base_url('images/lihatuser.jpg') ?>" width="470" height="240" /></span><br><br>

                        <b>2. Input data user</b><br>
                        <p align="justify">Anda dapat menginputkan data user dengan cara klik tombol tambah user,</p>
                         &nbsp;<img src="<?php echo base_url('images/tambahuser1.jpg') ?>" width="470" height="240" /><br><br>
                         lalu anda dapat menginputkan data pada kolom yang telah tersedia, dan klik tombol simpan untuk menyimpan data user.<br><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>Id user diberikan sistem secara otomatis</li>
                            <li>Kolom level berguna untuk menentukan hak akses user, level 1 untuk hak akses sebagai super admin, level 2 untuk hak akses sebagai admin biasa atau wali kelas</li>
                            <li>Kolom kelas berguna untuk menentukan kelas yang dihampu oleh wali kelas</li>
                            <li>Data akan gagal disimpan jika password dan konfirmasi password tidak sama</li>
                        </ul>
                            </font>
                        &nbsp;<img src="<?php echo base_url('images/tambahuser2.jpg') ?>" width="470" height="240" /><br><br>
                        jika data berhasil disimpan maka akan tampil notifikasi data berhasil disimpan.<br>
                        &nbsp;<span id="edituser"><img src="<?php echo base_url('images/tambahuser3.jpg') ?>" width="337" height="190" /></span><br><br>

                        <b>3. Edit data user</b><br>
                        <p align="justify">Anda dapat mengubah data user jika terjadi kesalahan dalam penginputan data dengan cara klik tombol edit,</p>
                         &nbsp;<img src="<?php echo base_url('images/edituser1.jpg') ?>" width="470" height="240" /><br><br>
                         lalu anda dapat mengubah data pada kolom yang telah ditentukan dan klik tombol simpan untuk menyimpan data.
                         <br><font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>Id users tidak bisa diubah</li>
                        </ul>
                            </font>
                        &nbsp;<img src="<?php echo base_url('images/edituser2.jpg') ?>" width="470" height="240" /><br><br>
                        jika data berhasil diubah maka akan tampil notifikasi data berhasil disimpan.<br>
                         &nbsp;<span id="password"><img src="<?php echo base_url('images/editsantri3.jpg') ?>" width="337" height="190" /></span><br><br>

                         <b>4. Mengubah password user</b><br>
                        <p align="justify">Anda dapat mengubah password user dengan cara masuk ke form edit data user, ubah password pada form ganti password, lalu klik tombol simpan untuk menyimpan data.</p>
                         <font color="red">
                        Catatan :
                        <ul type="disc">
                            <li>Passwoord hanya dapat dirubah jika password lama benar dan password baru dengan konfirmasi password bernilai sama</li>
                        </ul>
                            </font>
                         &nbsp;<img src="<?php echo base_url('images/password.jpg') ?>" width="470" height="240" /><br><br>
                         jika password berhasil dirubah maka akan tampil notifikasi data berhasil disimpan.<br>
                         &nbsp;<img src="<?php echo base_url('images/editsantri3.jpg') ?>" width="337" height="190" /><br><br><br>

                         Anda juga dapat melihat video tutorial tentang penggunaan Sistem informasi ICDS ini <a href="https://youtu.be/TwWP9Inxfzw" target="_blank">KLIK DI SINI</a>
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
