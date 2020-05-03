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
	
	public function addPembayaran($data) {
        $this->db->insert('pembayaran', $data);
    }
	
	public function Getakun_nama(){
		$this->db->select('*');
		$this->db->from('registrasi_akun');
		$email= $this->session->userdata('user')['email'];
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function GetPembayaran(){
		$this->db->select('*');
		$this->db->from('obat');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function edit_akun($data){
	$email= $this->session->userdata('user')['email'];
	$this->db->where('email',$email);
   return $this->db->update('registrasi_akun', $data);
 }
	public function hapusakun(){
	$email= $this->session->userdata('user')['email'];
	$this->db->where('email',$email);
   return $this->db->delete('registrasi_akun');
 }
}