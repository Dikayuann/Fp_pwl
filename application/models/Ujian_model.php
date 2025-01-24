<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	
    // Mendapatkan daftar ujian berdasarkan kelas dan mata pelajaran yang diikuti oleh murid
    public function getAvailableUjian($id_murid)
    {
        // Query untuk mendapatkan ujian berdasarkan kelas yang diikuti murid
        $this->db->select('ujian.id_ujian, ujian.link_ujian, ujian.deskripsi, matapelajaran.nama_mapel');
        $this->db->from('pendaftarankelas');
        $this->db->join('kelas', 'pendaftarankelas.id_kelas = kelas.id_kelas');
        $this->db->join('kelas_matapelajaran', 'kelas.id_kelas = kelas_matapelajaran.id_kelas');
        $this->db->join('matapelajaran', 'kelas_matapelajaran.id_mapel = matapelajaran.id_mapel');
        $this->db->join('ujian', 'matapelajaran.id_mapel = ujian.id_mapel');
        $this->db->where('pendaftarankelas.id_murid', $id_murid);
        $query = $this->db->get();
        return $query->result();
    }

	public function get_all_ujian() {
		$this->db->select('ujian.*, matapelajaran.nama_mapel, pengajaran.id_pengajaran');
		$this->db->from('ujian');
		$this->db->join('matapelajaran', 'matapelajaran.id_mapel = ujian.id_mapel');
		$this->db->join('pengajaran', 'pengajaran.id_pengajaran = ujian.id_pengajaran');
		$query = $this->db->get();
		return $query->result(); // Mengembalikan data sebagai array objek
	}

	public function get_ujian_by_id($id_ujian) {
		// Query to get the ujian by its id
		$this->db->where('id_ujian', $id_ujian);
		$query = $this->db->get('ujian');  // 'ujian' is the name of the table
	
		// Return the result
		return $query->row();  // Returns a single row as an object
	}
	

	// Fungsi untuk menyimpan data ujian ke tabel ujian
    public function simpan_ujian($id_mapel, $id_pengajaran, $link_ujian, $deskripsi) {
        // Data yang akan disimpan ke database
        $data = array(
            'id_mapel' => $id_mapel,
            'id_pengajaran' => $id_pengajaran,
            'link_ujian' => $link_ujian,
            'deskripsi' => $deskripsi
        );

        // Menyimpan data ke dalam tabel ujian
        return $this->db->insert('ujian', $data);
    }
	
	public function update_ujian($id_ujian, $data_update) {
		// Memperbarui data ujian berdasarkan ID
		$this->db->where('id_ujian', $id_ujian); // Menentukan ID ujian yang akan diperbarui
		return $this->db->update('ujian', $data_update); // Melakukan update pada tabel 'ujian'
	}
	
	public function delete_ujian($id_mapel) {
        $this->db->where('id_mapel', $id_mapel); // Menentukan ID mata pelajaran yang akan dihapus
        $this->db->delete('matapelajaran'); // Menghapus data
    }


}
