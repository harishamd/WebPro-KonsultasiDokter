<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
    public function getAdmin($where) {
        $this->db->where($where);
        return $this->db->get('admin');
    }
	
	public function addAdmin($data) {
        $this->db->insert('admin', $data);
    }
	 public function loginadmin() {
        $where = [
            'username' => $this->input->post('username'),
            'katasandi' => $this->input->post('katasandi'),
        ];
        $user = $this->AdminModel->getAdmin($where);

        if ($user->num_rows() > 0) {
            $this->session->set_userdata('admin', $user->row_array());
            $this->session->set_flashdata('message', 'Login success');
            redirect('page/homeadmin');
        } else {
            $this->session->set_flashdata('message', 'Login fail');
            redirect('page/loginadmin');
        }

    }
}