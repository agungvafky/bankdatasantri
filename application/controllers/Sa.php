<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Sa extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("santri_m");
    }

    public function index()
    {
   
        $data["santri"] = $this->santri_m->getAll();
    $this->load->view("admin/data/list", $data);
    }

    public function l($id = null)
    {
    $santri = $this->santri_m;
    $data["santri"] = $santri->getById($id);
    if (!$data["santri"]) show_404();
        $this->load->view("lihatu", $data); 
    }

    public function kartu($id = null){
    
    $data["santri"]=$this->santri_m->getById($id);

    $this->load->view("admin/data/kartu", $data);
    }

    public function bantuan($nobp)
    {
        $data['nobp'] = $nobp;
        $this->load->view("help", $data); 
    }
}