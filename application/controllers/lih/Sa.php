<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Sa extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("santri_m");
    }

    public function index($id = null)
    {
   
        $this->load->view("admin/data/lihatu"); 
    }

    public function l($id = null)
    {
    $santri = $this->santri_m;
    $data["santri"] = $santri->getById($id);
    if (!$data["santri"]) show_404();
        $this->load->view("lihatu", $data); 
    }
}