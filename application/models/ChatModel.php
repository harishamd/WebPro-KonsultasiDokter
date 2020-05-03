<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatModel extends CI_Model{
	public function addChat($data) {
		$this->db->insert('pertanyaan', $data);
	}
	public function getChat($where){
		$this->db->where($where);
		return $this->db->get('pertanyaan');
	}
}
