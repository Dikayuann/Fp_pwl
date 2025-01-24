<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mengambil nilai ujian yang sudah dikerjakan oleh murid
    public function getNilaiByMurid($id_murid)
    {
        $this->db->select('nilai.id_nilai, matapelajaran.nama_mapel, nilai.nilai_angka');
        $this->db->from('nilai');
        $this->db->join('matapelajaran', 'nilai.id_mapel = matapelajaran.id_mapel');
        $this->db->where('nilai.id_murid', $id_murid);
        $query = $this->db->get();
        return $query->result();
    }


	// Mengambil seluruh data nilai
    public function get_all_nilai() {
        $this->db->select('nilai.id_nilai, nilai.id_murid, murid.nama_murid, nilai.id_mapel, nilai.nilai_angka');
        $this->db->from('nilai');
        $this->db->join('murid', 'murid.id_murid = nilai.id_murid'); // Menggabungkan dengan tabel murid untuk mendapatkan nama murid
        $this->db->join('matapelajaran', 'matapelajaran.id_mapel = nilai.id_mapel'); // Menambahkan mapel jika dibutuhkan
        $query = $this->db->get();
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    // Menambahkan nilai baru
    public function tambah_nilai($data) {
        return $this->db->insert('nilai', $data); // Menyimpan data ke dalam tabel nilai
    }

    // Mengambil data nilai berdasarkan ID
    public function get_nilai_by_id($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        $query = $this->db->get('nilai');
        return $query->row(); // Mengembalikan satu row (objek)
    }

    // Mengupdate nilai
    public function update_nilai($id_nilai, $data_update) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->update('nilai', $data_update); // Melakukan update data nilai
    }

    // Menghapus nilai
    public function delete_nilai($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->delete('nilai'); // Menghapus data berdasarkan ID
    }

	public function get_mapel_by_murid($id_murid) {
		$this->db->select('matapelajaran.id_mapel, matapelajaran.nama_mapel');
		$this->db->from('matapelajaran');
		$this->db->join('nilai', 'nilai.id_mapel = matapelajaran.id_mapel');
		$this->db->where('nilai.id_murid', $id_murid);
		$query = $this->db->get();
		return $query->result(); // Mengembalikan mata pelajaran yang tersedia untuk murid tersebut
	}
	
}
