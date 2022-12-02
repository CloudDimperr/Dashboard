<?php

class BarangModel extends CI_Model 
{
    private $table = 'barang';

    public function __construct()
    {
        $this->load->database();
    }

    // menampilkan seluruh barang
    public function get_barang()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    // menghapus barang
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    // Menambahkan barang
    public function add()
    {

    }

    // Mengedit barang
    public function edit($id)
    {

    }
}