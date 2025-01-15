<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua kelas
    public function get_all_kelas() {
        $query = $this->db->get('kelas');
        return $query->result();
    }

    // Menambahkan kelas baru
    public function insert_kelas($data) {
        return $this->db->insert('kelas', $data);
    }

    // Mendapatkan kelas berdasarkan ID
    public function get_kelas_by_id($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        $query = $this->db->get('kelas');
        return $query->row();
    }

    // Mengupdate kelas
    public function update_kelas($id_kelas, $data) {
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->update('kelas', $data);
    }

    // Menghapus kelas
    public function delete_kelas($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->delete('kelas');
    }
}