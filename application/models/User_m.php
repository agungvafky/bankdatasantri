<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class User_m extends CI_Model
{
    private $_user = "user";

    public $no;
    public $nama;
    public $pass;
    public $level;
    public $idkelas;
    public $foto ="default.jpg";
    
    public function rules()
    {
        return [
           
            ['field' => 'no',
            'label' => 'Nomor',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'Level',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_user)->result();
       
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_user, ["no" => $id])->row();
    }

    public function simpan()
    {
       $post           = $this->input->post();
        $this->nama     = $post["nama"];
        $this->pass     = md5($post["pass"]);
        $this->level    = $post["level"];
        $this->idkelas  = $post["idkelas"];
        $this->foto  = $this->_pas();
    
        return $this->db->insert($this->_user, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->no       = $post["no"];
        $this->nama     = $post["nama"];
        $this->pass     = $post["pas"]; 
        $this->level    = $post["level"];
        $this->idkelas  = $post["idkelas"];
        //----foto
        if (!empty($_FILES["foto"]["name"])) 
        {
        $this->foto = $this->_pas();
        } 
        else 
        {
        $config['encrypt_name']         = true;
        $this->foto = $post["old_pas"];
        }

       
        return $this->db->update($this->_user, $this, array('no' => $post['no']));
    }

    function passwordl($pasl){
        $query=$this->db->query("SELECT * FROM user WHERE pass=MD5('$pasl') LIMIT 1");
        return $query;
    }

    public function updatep()
    {
        $post = $this->input->post();
        $this->no       = $post["no"];
        $this->nama     = $post["nama"];
        $this->pass     = md5($post["pasb"]);  
        $this->level    = $post["level"];
        $this->idkelas  = $post["idkelas"];
        $this->foto    = $post["foto"];
        //----foto
        return $this->db->update($this->_user, $this, array('no' => $post['no']));
    }

   
    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_user, array("no" => $id));
    }

      private function _pas()
    {
    $data                           = array();
    $config['upload_path']          = './upload/foto/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('foto')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['foto'] = $fileData['file_name'];
    }
    return "default.jpg";
    }
   
    private function _deleteImage($id)
    {
    $user = $this->getById($id);
    if ($user->foto != "default.jpg") {
        $filename = explode(".", $user->foto)[0];
        return array_map('unlink', glob(FCPATH."upload/foto/$filename.*"));
    }
    }

}