<!DOCTYPE html>
<html>

<head>
   <?php $this->load->view("admin/partial/head.php"); ?>
   <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <img src="<?php echo base_url('images/logo1.png') ?>" width="350" height=120 />
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo base_url().'index.php/admin/login/auth'?>">
                    
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">MASUK</button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('plugins/node-waves/waves.js')?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url('plugins/jquery-validation/jquery.validate.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('js/admin.js')?>"></script>
    <script src="<?php echo base_url('js/pages/examples/sign-in.js')?>"></script>
   
   
</body>

</html>
