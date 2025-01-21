<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_matapelajaran extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load model Mapel_model
		$this->load->model('Mapel_model');
	}

	// Fungsi untuk menampilkan halaman daftar mata pelajaran
	public function index() {
		$data['mata_pelajaran'] = $this->Mapel_model->get_all(); // Ambil semua data
		$this->load->view('crud_matapelajaran', $data); // Tampilkan view dengan data
	}

	// Fungsi untuk menampilkan form tambah mata pelajaran
	public function tambah() {
		$this->load->view('tambah_matapelajaran');
	}

	// Fungsi untuk menyimpan data mata pelajaran
	public function simpan() {
		$data = array(
			'nama_mapel'    => $this->input->post('nama_mapel'),
			'deskripsi'     => $this->input->post('deskripsi'),
			'link_video'    => $this->input->post('link_video'),
			'id_kelas'      => $this->input->post('id_kelas'),
			'id_pengajaran' => $this->input->post('id_pengajaran')
		);

		$this->Mapel_model->insert($data);
		redirect('CRUD_matapelajaran'); // Redirect ke halaman utama
	}

	// Fungsi untuk menampilkan form edit mata pelajaran
	public function edit($id_mapel) {
		$data['mapel'] = $this->Mapel_model->get_by_id($id_mapel); // Ambil data berdasarkan id_mapel
		$this->load->view('edit_matapelajaran', $data);
	}

	// Fungsi untuk memperbarui data mata pelajaran
	public function update() {
		$id_mapel = $this->input->post('id_mapel');
		$data = array(
			'nama_mapel'    => $this->input->post('nama_mapel'),
			'deskripsi'     => $this->input->post('deskripsi'),
			'link_video'    => $this->input->post('link_video'),
			'id_kelas'      => $this->input->post('id_kelas'),
			'id_pengajaran' => $this->input->post('id_pengajaran')
		);

		$this->Mapel_model->update($id_mapel, $data);
		redirect('CRUD_matapelajaran');
	}

	// Fungsi untuk menghapus data mata pelajaran
	public function hapus($id_mapel) {
		$this->Mapel_model->delete($id_mapel);
		redirect('CRUD_matapelajaran'); // Redirect ke halaman utama setelah dihapus
	}
}
?>
