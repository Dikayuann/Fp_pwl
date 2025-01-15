<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

    // Nama tabel
    private $table = 'nilai';

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua data nilai
    public function get_all_nilai() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Mendapatkan data nilai berdasarkan ID
    public function get_nilai_by_id($id_nilai) {
        $query = $this->db->get_where($this->table, array('id_nilai' => $id_nilai));
        return $query->row();
    }

    // Menambahkan data nilai baru
    public function insert_nilai($data) {
        return $this->db->insert($this->table, $data);
    }

    // Memperbarui data nilai
    public function update_nilai($id_nilai, $data) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->update($this->table, $data);
    }

    // Menghapus data nilai
    public function delete_nilai($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->delete($this->table);
    }

    // Mendapatkan nilai berdasarkan murid
    public function get_nilai_by_murid($id_murid) {
        $this->db->where('id_murid', $id_murid);
        $query = $this->db->get($this->table);
        return $query->result();
    }
}