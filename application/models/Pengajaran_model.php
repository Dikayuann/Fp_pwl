<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajaran_model extends CI_Model {

    // Mendapatkan semua data pengajaran
    public function get_all_pengajaran() {
        // Mengambil semua data dari tabel pengajaran
        $query = $this->db->get('pengajaran');
        return $query->result(); // Mengembalikan data sebagai array objek
    }

    // Mendapatkan data pengajaran berdasarkan ID
    public function get_pengajaran_by_id($id_pengajaran) {
        // Mengambil data berdasarkan ID pengajaran
        $this->db->where('id_pengajaran', $id_pengajaran);
        $query = $this->db->get('pengajaran');
        return $query->row(); // Mengembalikan satu objek data pengajaran
    }

    // Menyimpan data pengajaran baru
    public function simpan_pengajaran($nama_pengajaran, $deskripsi) {
        // Menyiapkan data yang akan disimpan
        $data = array(
            'nama_pengajaran' => $nama_pengajaran,
            'deskripsi' => $deskripsi
        );

        // Menyimpan data ke tabel pengajaran
        $this->db->insert('pengajaran', $data);
    }

    // Mengupdate data pengajaran
    public function update_pengajaran($id_pengajaran, $nama_pengajaran, $deskripsi) {
        // Menyiapkan data yang akan diupdate
        $data = array(
            'nama_pengajaran' => $nama_pengajaran,
            'deskripsi' => $deskripsi
        );

        // Mengupdate data pengajaran berdasarkan ID
        $this->db->where('id_pengajaran', $id_pengajaran);
        $this->db->update('pengajaran', $data);
    }

    // Menghapus data pengajaran
    public function hapus_pengajaran($id_pengajaran) {
        // Menghapus data pengajaran berdasarkan ID
        $this->db->where('id_pengajaran', $id_pengajaran);
        $this->db->delete('pengajaran');
    }
}
