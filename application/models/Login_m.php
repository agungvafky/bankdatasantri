<?php
class Login_m extends CI_Model{
	//cek nip dan password dosen
	function auth_dosen($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE no='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}
}
