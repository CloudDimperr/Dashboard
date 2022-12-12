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

    public function get_ById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    // menghapus barang
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    // Menambahkan barang
    public function add($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Mengedit barang
    public function edit($data, $id)
    {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }
}