<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "obat";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

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
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_obat = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('id_obat' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_obat" => $id));
    }
}
