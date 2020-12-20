<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("santri_m");
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		
	}

	public function index()
	{
        // load view admin/overview.php
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['total'] = $this->santri_m->hitungjumlah();
    $this->load->view("admin/overview", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
}      	
}