<?php

class Help extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		
	}

	public function index()
	{
        // load view admin/overview.php
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $this->load->view("admin/data/help");
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
	}      	

	public function helper()
	{
        // load view admin/overview.php
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $this->load->view("admin/data/help2");
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }   

    public function hel()
    {
        // load view admin/overview.php
    if($this->session->userdata('akses')=='1'){
     redirect(site_url('admin/help'));
    }else{
       redirect(site_url('admin/help/helper'));
    }
    }      	
}