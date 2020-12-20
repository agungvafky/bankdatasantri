<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Santri_m extends CI_Model
{
    private $_data = "data";

    public $nobp;
    public $nama;
    public $tempat;
    public $tgll;
    public $kelas;
    public $pas = "default.jpg";
    public $nohp;
    public $alamat;
    public $gender;
    public $tinggibadan;
    public $beratbadan;
    public $golongandarah;
    public $warnakulit;
    public $ayah;
    public $ibu;
    public $nomorortu;
    public $alamatortu;
    public $qr;
    public $s1  = "default.pdf";
    public $s2  = "default.pdf";
    public $s3  = "default.pdf";
    public $s4  = "default.pdf";
    public $s5  = "default.pdf";
    public $s6  = "default.pdf";
    
    public function rules()
    {
        return [
            ['field' => 'nobp',
            'label' => 'Nobp',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'tempat',
            'label' => 'Tempat Lahir',
            'rules' => 'required'],

            ['field' => 'tgll',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_data)->result();
       //--- $this->form_validaton->set_rules('nobp','NO BP','required|is_unique[data.nobp]');
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_data, ["nobp" => $id])->row();
    }

    public function getByIdk($id)
    {
        return $this->db->get_where($this->_data, ["kelas" => $id])->result();
    }

    function scek($nobp){
        $query=$this->db->query("SELECT * FROM data WHERE nobp='$nobp' LIMIT 1");
        return $query;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nobp         = $post["nobp"];
        $this->nama         = $post["nama"];
        $this->tempat       = $post["tempat"];
        $this->tgll         = $post["tgll"];
        $this->kelas        = $post["kelas"];
        $this->pas          = $this->_pas();
        $this->nohp         = $post["nohp"];
        $this->alamat       = $post["alamat"];
        $this->gender       = $post["gender"];
        $this->tinggibadan  = $post["tinggibadan"];
        $this->beratbadan   = $post["beratbadan"];
        $this->golongandarah = $post["golongandarah"];
        $this->warnakulit   = $post["warnakulit"];
        $this->ayah         = $post["ayah"];
        $this->ibu          = $post["ibu"];
        $this->nomorortu    = $post["nomorortu"];
        $this->alamatortu   = $post["alamatortu"];
        
        
        //-----buat qr
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $config['file_name']     = $this->nobp;
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './upload/'; //string, the default is application/cache/
        $config['errorlog']     = './upload/'; //string, the default is application/logs/
        $config['imagedir']     = './upload/kode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $nama=$this->input->post('nobp');
        $qr=$nama.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = 'https://icdsmts.000webhostapp.com/sa/l/'.$nama; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$qr; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
       
        $this->qr = $qr;
        $this->s1 = $this->_updf1();
        $this->s2 = $this->_updf2();
        $this->s3 = $this->_updf3();
        $this->s4 = $this->_updf4();
        $this->s5 = $this->_updf5();
        $this->s6 = $this->_updf6();

        return $this->db->insert($this->_data, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nobp     = $post["nobp"];
        $this->nama     = $post["nama"];
        $this->tempat   = $post["tempat"];
        $this->tgll     = $post["tgll"];
        $this->kelas     = $post["kelas"];
        //----foto
        if (!empty($_FILES["pas"]["name"])) 
        {
        $this->pas = $this->_pas();
        } 
        else 
        {
        $config['encrypt_name']         = true;
        $this->pas = $post["old_pas"];
        }

        $this->nohp         = $post["nohp"];
        $this->alamat       = $post["alamat"];
        $this->gender       = $post["gender"];
        $this->tinggibadan  = $post["tinggibadan"];
        $this->beratbadan   = $post["beratbadan"];
        $this->golongandarah = $post["golongandarah"];
        $this->warnakulit   = $post["warnakulit"];
        $this->ayah         = $post["ayah"];
        $this->ibu          = $post["ibu"];
        $this->nomorortu    = $post["nomorortu"];
        $this->alamatortu   = $post["alamatortu"];
        $this->qr = $post["qr"];
      
        //---pdf
        if (!empty($_FILES["s1"]["name"])) 
        {
        $this->s1 = $this->_updf1();
        } 
        else 
        {
        $this->s1 = $post["old_s1"];
        }
        //------
        if (!empty($_FILES["s2"]["name"])) 
        {
        $this->s2 = $this->_updf2();
        } 
        else 
        {
        $this->s2 = $post["old_s2"];
        }
        //----
        if (!empty($_FILES["s3"]["name"])) 
        {
        $this->s3 = $this->_updf3();
        } 
        else 
        {
        $this->s3 = $post["old_s3"];
        }
        //-----
        if (!empty($_FILES["s4"]["name"])) 
        {
        $this->s4 = $this->_updf4();
        } 
        else 
        {
        $this->s4 = $post["old_s4"];
        }
        //-----
        if (!empty($_FILES["s5"]["name"])) 
        {
        $this->s5 = $this->_updf5();
        } 
        else 
        {
        $this->s5 = $post["old_s5"];
        }
        //-----
        if (!empty($_FILES["s6"]["name"])) 
        {
        $this->s6 = $this->_updf6();
        } 
        else 
        {
        $this->s6 = $post["old_s6"];
        }
        return $this->db->update($this->_data, $this, array('nobp' => $post['nobp']));
    }

    public function update_kelas($idkls,$idsantri)
    {
        $this->db->where('nobp', $idsantri);
        return $this->db->update('data', $idkls);
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_data, array("nobp" => $id));
    }

      private function _pas()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('pas')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['pas'] = $fileData['file_name'];
    }
    return "default.jpg";
    }
   
    private function _updf1()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s1')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s1'] = $fileData['file_name'];
    }
    
    return "default.pdf";
    }
      private function _updf2()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s2')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s2'] = $fileData['file_name'];
    }
    
    return "default.pdf";
    }

    private function _updf3()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
   
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s3')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s3'] = $fileData['file_name'];
    }
    return "default.pdf";
    }

    private function _updf4()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
   
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s4')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s4'] = $fileData['file_name'];
    }
    return "default.pdf";
    }

    private function _updf5()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
     $config['encrypt_name']         = true;
   
    
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s5')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s5'] = $fileData['file_name'];
    }
    
    return "default.pdf";
    }

    private function _updf6()
    {
    $data                           = array();
    $config['upload_path']          = './upload/data/';
    $config['allowed_types']        = 'pdf|gif|jpg|png';
    $config['overwrite']            = true;
    $config['max_size']             = 11024; // 1MB
    $config['encrypt_name']         = true;
   
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('s6')) {
    $error = array('error' => $this->upload->display_errors());
    } else {
    $fileData = $this->upload->data();
    return $data['s6'] = $fileData['file_name'];
    }
    
    return "default.pdf";
    }

    private function _deleteImage($id)
    {
    $santri = $this->getById($id);
    if ($santri->pas != "default.jpg") {
        $filename = explode(".", $santri->pas)[0];
        return array_map('unlink', glob(FCPATH."upload/data/$filename.*"));
    }
    }

    function get_data($kode){
        $hsl=$this->db->query("SELECT * FROM data WHERE nobp='$kode'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nobp' => $data->nobp,
                    'nama' => $data->nama,
                    'tempat' => $data->tempat,
                    'tgll' => $data->tgll,
                    'kelas' => $data->kelas,
                    );
            }
        }
        return $hasil;
    }

    public function hitungjumlah()
{   

    $query = $this->db->get('data');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
}