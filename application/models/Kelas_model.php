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

    public function get_kelas_by_id_murid($id_murid) {
        // Menyusun query untuk mengambil nama kelas, jadwal, mata pelajaran, dan guru
        $this->db->select('k.nama_kelas, k.jadwal, m.nama_mapel, a.nama_admin');
        $this->db->from('kelas k');
        $this->db->join('pengajaran p', 'p.id_kelas = k.id_kelas');
        $this->db->join('matapelajaran m', 'm.id_mapel = p.id_mapel');
        $this->db->join('administrasi a', 'a.id_admin = k.id_admin');
        $this->db->where('k.id_murid', $id_murid);
        
        // Menjalankan query dan mengembalikan hasilnya
        $query = $this->db->get();
        return $query->result(); 
    }

    public function get_kelas_info() {
        // Menyusun query untuk mengambil nama kelas, jadwal, mata pelajaran, dan admin
        $this->db->select('k.nama_kelas, k.jadwal, m.nama_mapel, a.nama_admin');
        $this->db->from('kelas k');
        $this->db->join('pengajaran p', 'p.id_kelas = k.id_kelas');
        $this->db->join('matapelajaran m', 'm.id_mapel = p.id_mapel');
        $this->db->join('administrasi a', 'a.id_admin = k.id_admin');
        
        // Menjalankan query dan mengembalikan hasilnya
        $query = $this->db->get();
        return $query->result();  // Mengembalikan hasil sebagai array objek
    }
    
    
    
}