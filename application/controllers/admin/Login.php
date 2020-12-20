<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_m');
	}

	function index(){
		$this->load->view("admin/data/vlogin");
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_dosen=$this->login_m->auth_dosen($username,$password);

        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_dosen->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_no',$data['no']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            $this->session->set_userdata('ses_foto',$data['foto']);
		            redirect(site_url('admin/overview'));

		         }elseif($data['level']=='2'){//akses dosen
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_no',$data['no']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            $this->session->set_userdata('ses_idkelas',$data['idkelas']);
		            $this->session->set_userdata('ses_foto',$data['foto']);
		             redirect(site_url('admin/overview'));
		         }
    }
    else{  // jika username dan password tidak ditemukan atau salah
	echo $this->session->set_flashdata('msg','Username Atau Password Salah');
	redirect(site_url('admin/login'));
    }
}

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
