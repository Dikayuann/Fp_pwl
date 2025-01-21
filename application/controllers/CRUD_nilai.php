<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_nilai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Memuat model Nilai_model
		$this->load->model('Nilai_model');
	}

	// Fungsi untuk menampilkan data nilai
	public function index() {
		// Mengambil semua data nilai dari model
		$data['nilai'] = $this->Nilai_model->get_all_nilai();
		// Menampilkan halaman kelola nilai dengan data nilai
		$this->load->view('crud_nilai', $data);
	}

	// Fungsi untuk menambah data nilai
	public function tambah() {
		if ($this->input->post()) {
			// Mendapatkan data input dari form
			$data = array(
				'id_murid' => $this->input->post('id_murid'),
				'nama_murid' => $this->input->post('nama_murid'),
				'id_mapel' => $this->input->post('id_mapel'),
				'nilai_angka' => $this->input->post('nilai_angka')
			);
			// Menyimpan data nilai ke database
			$this->Nilai_model->add_nilai($data);
			// Redirect kembali ke halaman daftar nilai
			redirect('crud_nilai');
		} else {
			// Jika tidak ada data yang dikirim, tampilkan form tambah nilai
			$this->load->view('tambah_nilai');
		}
	}

	// Fungsi untuk mengedit data nilai
	public function edit($id) {
		// Mengambil data nilai berdasarkan ID
		$data['nilai'] = $this->Nilai_model->get_nilai_by_id($id);

		if ($this->input->post()) {
			// Mendapatkan data input dari form untuk update
			$data_update = array(
				'id_murid' => $this->input->post('id_murid'),
				'nama_murid' => $this->input->post('nama_murid'),
				'id_mapel' => $this->input->post('id_mapel'),
				'nilai_angka' => $this->input->post('nilai_angka')
			);
			// Update data nilai berdasarkan ID
			$this->Nilai_model->update_nilai($id, $data_update);
			// Redirect ke halaman daftar nilai setelah update
			redirect('crud_nilai');
		} else {
			// Jika tidak ada data yang dikirim, tampilkan form edit dengan data nilai yang ada
			$this->load->view('edit_nilai', $data);
		}
	}

	// Fungsi untuk menghapus data nilai
	public function hapus($id) {
		// Menghapus data nilai berdasarkan ID
		$this->Nilai_model->delete_nilai($id);
		// Redirect kembali ke halaman daftar nilai
		redirect('crud_nilai');
	}
}
?>
