<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	public function getUser($where) {
        $this->db->where($where);
        return $this->db->get('registrasi_akun');
    }
    
    public function addUser($data) {
        $this->db->insert('registrasi_akun', $data);
    }
	
	public function Getakun_nama(){
		$this->db->select('*');
		$this->db->from('registrasi_akun');
		$email= $this->session->userdata('user')['email'];
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function GetPembayaran(){
		$this->db->select('*');
		$this->db->from('obat');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function edit_akun($email,$data)
	{
		$email = $_POST['email'];
		$query = "SELECT * FROM akun WHERE email = '$email'";
		$hasil = mysql_query($query);
		if (mysql_num_rows($hasil)>0)
		{
			$data  = mysql_fetch_array($hasil);
		}
		else
			echo "email tidak ditemukan";
	}
}