 
 <aside id="leftsidebar" class="sidebar">

 
 <br>

            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('upload/foto/'.$this->session->userdata('ses_foto')) ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('ses_nama')?></div>
                    
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                             <li><a href="<?php echo site_url('admin/santri/editus/'.$this->session->userdata('ses_no')) ?>"><i class="material-icons">person</i>Profil</a></li>
                            <li><a href="<?php echo site_url('admin/login/logout') ?>"><i class="material-icons">input</i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN Menu</li>
                      <li>
                        <a href="<?php echo site_url('admin/overview') ?>" >
                        <i class="material-icons">home</i> 
                        <span class="icon-name">Home</span> 
                        </a>
                    </li>
                    <?php if($this->session->userdata('akses')=='1'):?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">folder</i> 
                        <span class="icon-name">Data</span> 
                        </a>
                            <ul class="ml-menu">
                                    <li>
                                       <a href="<?php echo site_url('admin/santri/kelas') ?>">
                                       <div class="row clearfix demo-icon-container">
                                       <div class="demo-google-material-icon"><i class="material-icons">domain</i> 
                                        <span class="icon-name">Kelas</span></div></div>
                                        </a>
                                    
                                    </li>
                                    <li>    
                                        <a href="<?php echo site_url('admin/santri') ?>"> 
                                        <div class="row clearfix demo-icon-container"> <div class="demo-google-material-icon"><i class="material-icons">list</i> 
                                        <span class="icon-name">Santri</span></div></div>
                                        </a>
                                    
                                    </li>
                                    
                                </ul>
                               
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">credit_card</i> 
                            <span class="icon-name">ID-Card</span>
                        </a>
                        <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo site_url('admin/santri/Id_Card') ?>"> 
                                        <div class="row clearfix demo-icon-container">
                                        <div class="demo-google-material-icon"> <i class="material-icons">person</i> <span class="icon-name">Perorang</span> </div></div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="<?php echo site_url('admin/santri/group') ?>"> 
                                        <div class="row clearfix demo-icon-container">
                                        <div class="demo-google-material-icon"> <i class="material-icons">group</i> <span class="icon-name">Group</span> </div></div>
                                        </a>
                                    </li>
                                </ul>

                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/santri/users') ?>" >
                        <i class="material-icons">settings</i> 
                        <span class="icon-name">Pengaturan user</span> 
                        </a>
                    </li>
                
                    <?php elseif($this->session->userdata('akses')=='2'):?>
                    <li>
                        <a href="<?php echo site_url('admin/santri/lihatk2/'.$this->session->userdata('ses_idkelas')) ?>" >
                        <i class="material-icons">folder</i> 
                        <span class="icon-name">Data Santri</span> 
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">credit_card</i> 
                            <span class="icon-name">ID-Card</span>
                        </a>
                        <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo site_url('admin/santri/Id_Card') ?>"> 
                                        <div class="row clearfix demo-icon-container">
                                        <div class="demo-google-material-icon"> <i class="material-icons">person</i> <span class="icon-name">Perorang</span> </div></div>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="<?php echo site_url('admin/santri/kartu2/'.$this->session->userdata('ses_idkelas')) ?>" target="_blank"> 
                                        <div class="row clearfix demo-icon-container">
                                        <div class="demo-google-material-icon"> <i class="material-icons">group</i> <span class="icon-name">Group</span> </div></div>
                                        </a>
                                    </li>
                                </ul>
                    </li>
                     

                    <?php endif;?> 
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                  <span>&copy;M. Agung Vafky Ideal<br> <?php echo SITE_NAME ." ". Date('d M Y') ?></span>
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>