<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matapelajaran_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan mata pelajaran berdasarkan ID Kelas
    public function getMapelByKelas($id_kelas)
    {
        $this->db->select('matapelajaran.nama_mapel');
        $this->db->from('kelas_matapelajaran');
        $this->db->join('matapelajaran', 'kelas_matapelajaran.id_mapel = matapelajaran.id_mapel');
        $this->db->where('kelas_matapelajaran.id_kelas', $id_kelas);
        $query = $this->db->get();
        return $query->result();
    }

    // Fungsi untuk mengambil semua mata pelajaran
    public function get_all_mapel() {
        $this->db->select('*');
        $this->db->from('matapelajaran');
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    // Fungsi untuk menyimpan mata pelajaran baru
    public function simpan_matapelajaran($nama_mapel, $link_video, $deskripsi) {
        $data = array(
            'nama_mapel' => $nama_mapel,
            'link_video' => $link_video,
            'deskripsi' => $deskripsi
        );

        $this->db->insert('matapelajaran', $data); // Menyimpan data ke tabel matapelajaran
    }

    // Fungsi untuk mengambil data mata pelajaran berdasarkan ID
    public function get_matapelajaran_by_id($id_mapel) {
        $this->db->select('*');
        $this->db->from('matapelajaran');
        $this->db->where('id_mapel', $id_mapel);
        $query = $this->db->get();
        return $query->row(); // Mengembalikan hasil sebagai objek tunggal
    }

    // Fungsi untuk memperbarui data mata pelajaran
    public function update_matapelajaran($id_mapel, $nama_mapel, $link_video, $deskripsi) {
        $data = array(
            'nama_mapel' => $nama_mapel,
            'link_video' => $link_video,
            'deskripsi' => $deskripsi
        );

        $this->db->where('id_mapel', $id_mapel); // Menentukan ID mata pelajaran yang akan diperbarui
        $this->db->update('matapelajaran', $data); // Melakukan update
    }

    // Fungsi untuk menghapus mata pelajaran berdasarkan ID
    public function hapus_matapelajaran($id_mapel) {
        $this->db->where('id_mapel', $id_mapel); // Menentukan ID mata pelajaran yang akan dihapus
        $this->db->delete('matapelajaran'); // Menghapus data
    }
}
