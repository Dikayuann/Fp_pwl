<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan kelas yang diikuti oleh murid
    public function getKelasDiikuti($id_murid)
    {
        $this->db->select('kelas.id_kelas, kelas.nama_kelas, kelas.jadwal, admin.nama_admin');
        $this->db->from('pendaftarankelas');
        $this->db->join('kelas', 'pendaftarankelas.id_kelas = kelas.id_kelas');
        $this->db->join('admin', 'kelas.id_admin = admin.id_admin');
        $this->db->where('pendaftarankelas.id_murid', $id_murid);
        $query = $this->db->get();
        return $query->result();
    }


    // Mengambil semua data kelas
    public function get_all_kelas() {
        $query = $this->db->get('kelas');
        return $query->result();
    }

    // Mengambil data kelas berdasarkan ID
    public function get_kelas_by_id($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        $query = $this->db->get('kelas');
        return $query->row();
    }

    // Menambah kelas baru
    public function tambah_kelas($nama_kelas, $id_admin, $jadwal) {
        $data = [
            'nama_kelas' => $nama_kelas,
            'id_admin' => $id_admin,
            'jadwal' => $jadwal
        ];
        $this->db->insert('kelas', $data);
    }

    // Memperbarui data kelas
    public function update_kelas($id_kelas, $nama_kelas, $id_admin, $jadwal) {
        $data = array(
            'nama_kelas' => $nama_kelas,
            'id_admin' => $id_admin,
            'jadwal' => $jadwal
        );

        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }

    // Menghapus kelas
    public function hapus_kelas($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas');
    }
}
