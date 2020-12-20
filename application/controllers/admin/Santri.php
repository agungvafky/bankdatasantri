<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("santri_m");
        $this->load->model("kelas_m");
        $this->load->model("user_m");
        
        $this->load->library('form_validation');
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
    }

    public function index()
    {
    if($this->session->userdata('akses')=='1'){

    $data["santri"] = $this->santri_m->getAll();
    $this->load->view("admin/data/list", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
        
    }

    public function add()
    {
       
        $santri = $this->santri_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());
        $nobp = $this->input->post('nobp');
        $cek=$this->santri_m->scek($nobp);

       if ($validation->run()) {
            if($cek->num_rows() > 0){
                $this->session->set_flashdata('gagal', 'Berhasil disimpan');
                redirect(site_url('admin/santri'));     
            }else{
                $santri->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('admin/santri'));
                }
            }
        $dat["las"] = $this->kelas_m->getAll();
        $this->load->view("admin/data/new", $dat);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/santri');
       
        $santri = $this->santri_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());

        if ($validation->run()) {
            $santri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["las"] = $this->kelas_m->getAll();
        $data["santri"] = $santri->getById($id);

        if (!$data["santri"]) show_404();
        
        $this->load->view("admin/data/edit", $data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->santri_m->delete($id)) {
            redirect(site_url('admin/santri'));
        }
    }

    public function lihat($id = null)
    {
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $santri = $this->santri_m;
        $data["santri"] = $santri->getById($id);
        if (!$data["santri"]) show_404();
        $this->load->view("admin/data/lihat", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }   
    }

    //-----kelas
    public function kelas()
    {
    if($this->session->userdata('akses')=='1'){
     $kelas = $this->kelas_m;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->save();
              $this->session->set_flashdata('success', 'Berhasil disimpan');
          }
    $data["kelas"] = $this->kelas_m->getAll();
    $this->load->view("admin/data/listke", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

     public function addk()
    {
        $kelas = $this->kelas_m;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->save();
             redirect('admin/santri/kelas');
        }

       
    }
    public function lihatk($id)
    {
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $santri = $this->santri_m;
    $data["santri"] = $santri->getByIdk($id);
    $data['idkls'] = $id;
    if (!$data["santri"]){
        $this->session->set_flashdata('gagal', 'Berhasil disimpan');
        redirect(site_url('admin/santri/kelas'));
        }
        else{
    $this->load->view("admin/data/lihatke", $data);
    }
    }
    else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    public function lihatkes($id = null)
    {
    if($this->session->userdata('akses')=='1'){
      $santri = $this->santri_m;
        $data["santri"] = $santri->getById($id);
        if (!$data["santri"]) show_404();
        $this->load->view("admin/data/lihatkes", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }   
    }

    public function editkes($id = null)
    {
        if (!isset($id)) redirect('admin/santri');
       
        $santri = $this->santri_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());

        if ($validation->run()) {
            $santri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["las"] = $this->kelas_m->getAll();
        $data["santri"] = $santri->getById($id);
        if (!$data["santri"]) show_404();
        
        $this->load->view("admin/data/editkes", $data);
        
    }

    public function lihatk2($id)
    {

        $santri = $this->santri_m;
        $data["santri"] = $santri->getByIdk($id);
        $data['idkls'] = $id;
        
        $this->load->view("admin/data/lihatkew", $data);
    }
     public function tambahs($idkls)
    {

        $data["santri"] = $this->santri_m->getAll();
        $data['idkls'] = $idkls;
        $this->load->view("admin/data/listtam", $data);
    }
     
    public function edittam($idsantri,$idkls)
    {
        $idklss = ['kelas' => $idkls];
        $update = $this->santri_m->update_kelas($idklss,$idsantri);
        if ($update) {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        redirect(site_url('admin/santri/tambahs/'.$idkls));
    }

    

    public function kartu(){
    $id=$this->input->post('nobp');
    $data["santri"]=$this->santri_m->getById($id);

    $this->load->view("admin/data/kartu", $data);
    }

    function Id_Card(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
     $this->load->view("admin/data/perorang");
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
       
    }
 
    function otomatis(){
        $kode=$this->input->post('nobp');
        $data=$this->santri_m->get_data($kode);
        echo json_encode($data);
    }

    public function group()
    {
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data["kelas"] = $this->kelas_m->getAll();
    $this->load->view("admin/data/listidke", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }

    public function kartu2($id = null){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
     $santri = $this->santri_m;
    $data["santri"] = $santri->getByIdk($id);
    if (!$data["santri"]) show_404();
    $this->load->view("admin/data/kartug", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    
    }
    public function deletek($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kelas_m->delete($id)) {
            redirect(site_url('admin/santri/kelas'));
        }
    }

    public function users()
    {
        if($this->session->userdata('akses')=='1'){

    $data["las"] = $this->kelas_m->getAll();
    $data["us"] = $this->user_m->getAll();

    if($this->input->post())
    {
        $user = $this->user_m;
    $pass = $this->input->post('pass');
    $passs = $this->input->post('passs');
        if ($pass==$passs) {
           $user->simpan();
              $this->session->set_flashdata('success', 'Berhasil disimpan');
               redirect(site_url('admin/santri/users'));
        }
        else{
            $this->session->set_flashdata('gagal', 'Berhasil disimpan');
        }
    }   
    $this->load->view("admin/data/listu", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
    }



    public function addu()
    {
    $kelas = $this->user_m;
    $kelas->save();
    redirect('admin/santri/users'); 
    } 


    public function editu($id = null)
    {
        if($this->session->userdata('akses')=='1'){
       if (!isset($id)) redirect('admin/santri/editu');
       
        $santri = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());

        if ($validation->run()) {
            $santri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

         $data["las"] = $this->kelas_m->getAll();
        $data["use"] = $santri->getById($id);
        if (!$data["use"]) show_404();
        
        $this->load->view("admin/data/editu", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }        
    }

    public function passwo()
    {
       if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $user = $this->user_m;
        $pasb = $this->input->post('pasb');
        $kpas = $this->input->post('kpas');
        $pasl = $this->input->post('pasl');
        $cek=$this->user_m->passwordl($pasl);
       if($cek->num_rows() > 0){
                 
                if ($pasb==$kpas) {
                   $user->updatep();
                      $this->session->set_flashdata('success', 'Berhasil disimpan');
                      redirect(site_url('admin/santri/users'));
                       
                }
                else{
                    $this->session->set_flashdata('gagal3', 'Berhasil disimpan');
                    redirect(site_url('admin/santri/users'));
                    
                }
            }
        else{
                $this->session->set_flashdata('gagal2', 'Berhasil disimpan');
                redirect(site_url('admin/santri/users'));
                 
                }
            }
    else{
      echo "Anda tidak berhak mengakses halaman ini";
    }        
    }

    public function passwou()
    {
       if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $user = $this->user_m;
        $pasb = $this->input->post('pasb');
        $kpas = $this->input->post('kpas');
       $pasl = $this->input->post('pasl');
       $cek=$this->user_m->passwordl($pasl);
      if($cek->num_rows() > 0){
                 
                if ($pasb==$kpas) {
                   $user->updatep();
                      $this->session->set_flashdata('success', 'Berhasil disimpan');
                      redirect(site_url('admin/overview'));
                       
                }
                else{
                    $this->session->set_flashdata('gagal3', 'Berhasil disimpan');
                    redirect(site_url('admin/overview'));
                    
                }
            }
        else{
                $this->session->set_flashdata('gagal2', 'Berhasil disimpan');
                redirect(site_url('admin/overview'));
                 
                }
            }
    else{
      echo "Anda tidak berhak mengakses halaman ini";
    }        
    }

    public function editus($id = null)
    {
       if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
       
       
        $santri = $this->user_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());

        if ($validation->run()) {
            $santri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $data["use"] = $santri->getById($id);
        if (!$data["use"]) show_404();
        
        $this->load->view("admin/data/editus", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
               
    }

    public function deleteu($id=null)
    {
         if($this->session->userdata('akses')=='1'){
   if (!isset($id)) show_404();
        
        if ($this->user_m->delete($id)) {
            redirect(site_url('admin/santri/users'));
        }
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
        
    }

     public function lihatw($id = null)
    {
    if($this->session->userdata('akses')=='2'){
      $santri = $this->santri_m;
        $data["santri"] = $santri->getById($id);
        if (!$data["santri"]) show_404();
        $this->load->view("admin/data/lihatw", $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }   
    }
    public function editw($id = null)
    {
        if (!isset($id)) redirect('admin/santri');
       
        $santri = $this->santri_m;
        $validation = $this->form_validation;
        $validation->set_rules($santri->rules());

        if ($validation->run()) {
            $santri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["santri"] = $santri->getById($id);
        if (!$data["santri"]) show_404();
        
        $this->load->view("admin/data/editw", $data);
        
    }

}