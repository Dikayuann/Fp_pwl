<?php
class Nilai_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	// Fungsi untuk mengambil semua data nilai
	public function get_all_nilai() {
		// Mengambil semua data dari tabel 'nilai' dan mengembalikannya dalam bentuk array
		return $this->db->get('nilai')->result();
	}

	// Fungsi untuk mengambil data nilai berdasarkan ID
	public function get_nilai_by_id($id) {
		// Mengambil data dari tabel 'nilai' berdasarkan ID nilai yang diberikan
		return $this->db->get_where('nilai', ['id_nilai' => $id])->row();
	}

	// Fungsi untuk menambahkan data nilai
	public function add_nilai($data) {
		// Menambahkan data baru ke tabel 'nilai'
		return $this->db->insert('nilai', $data);
	}

	// Fungsi untuk memperbarui data nilai
	public function update_nilai($id, $data) {
		// Memperbarui data nilai berdasarkan ID nilai
		return $this->db->update('nilai', $data, ['id_nilai' => $id]);
	}

	// Fungsi untuk menghapus data nilai
	public function delete_nilai($id) {
		// Menghapus data nilai berdasarkan ID
		return $this->db->delete('nilai', ['id_nilai' => $id]);
	}
}
?>

