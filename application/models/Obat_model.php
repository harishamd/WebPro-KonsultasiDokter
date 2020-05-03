<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model
{
    private $_table = "obat";

    public $id_obat;
    public $nama_obat;
    public $harga;
    public $gambar = "default.jpg";
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'nama_obat',
            'label' => 'Nama Obat',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],
            
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_obat" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_obat = uniqid();
        $this->nama_obat = $post["nama_obat"];
        $this->harga = $post["harga"];
        /*$this->gambar = $this->UploadImage();*/
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_obat = $post["id"];
        $this->nama_obat = $post["nama_obat"];
        $this->harga = $post["harga"];
        /*if (!empty($_FILES["gambar"]["nama_obat"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}*/
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('id_obat' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_obat" => $id));
    }
    /*private function _uploadImage()
    {
    $config['upload_path']          = './upload/obat/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_obat;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }*/
    /*private function _deleteImage($id){
    $product = $this->getById($id);
    if ($product->image != "default.jpg") {
	    $filename = explode(".", $product->image)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
    }*/
}
