<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	// Nama tabel di database
	private $table = 'matapelajaran';

	// Fungsi untuk mengambil semua data mata pelajaran
	public function get_all() {
		return $this->db->get($this->table)->result();
	}

	// Fungsi untuk mengambil data mata pelajaran berdasarkan ID
	public function get_by_id($id_mapel) {
		$this->db->where('id_mapel', $id_mapel);
		return $this->db->get($this->table)->row();
	}

	// Fungsi untuk menambah data mata pelajaran
	public function insert($data) {
		return $this->db->insert($this->table, $data);
	}

	// Fungsi untuk memperbarui data mata pelajaran
	public function update($id_mapel, $data) {
		$this->db->where('id_mapel', $id_mapel);
		return $this->db->update($this->table, $data);
	}

	// Fungsi untuk menghapus data mata pelajaran
	public function delete($id_mapel) {
		$this->db->where('id_mapel', $id_mapel);
		return $this->db->delete($this->table);
	}

	public function get_materi_by_mapel($id_mapel) {
        // Ambil data materi berdasarkan id_mapel
        $this->db->select('*');
        $this->db->from('matapelajaran');
        $this->db->where('id_mapel', $id_mapel);
        $query = $this->db->get();
        return $query->result();  // Mengembalikan hasil sebagai array objek
    }
}
?>

