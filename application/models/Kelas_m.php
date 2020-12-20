<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Kelas_m extends CI_Model
{
    private $_kelas = "kelas";

    
    public $nkelas;
    
    
    public function rules()
    {
        return [

            ['field' => 'nkelas',
            'label' => 'Nama Kelas',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_kelas)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_kelas, ["idk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nkelas = $post["nkelas"];
        return $this->db->insert($this->_kelas, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nobp     = $post["nobp"];
        $this->nama     = $post["nama"];
        $this->tempat   = $post["tempat"];
        $this->tgll     = $post["tgll"];
        //----foto
        
        return $this->db->update($this->_data, $this, array('nobp' => $post['nobp']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_kelas, array("idk" => $id));
    }

    private function _deleteImage($id)
    {
    $santri = $this->getById($id);
    if ($santri->pas != "default.jpg") {
        $filename = explode(".", $santri->pas)[0];
        return array_map('unlink', glob(FCPATH."upload/data/$filename.*"));
    }
    }
}