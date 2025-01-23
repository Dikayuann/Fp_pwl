<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	public function __construct() {
		parent::__construct();
		// Load model Mapel_model
		$this->load->model('Kelas_model');
	}

	public function index() {
		if (!$this->session->userdata('id_murid')) {
			// Jika tidak ada session, redirect ke halaman login
			redirect('login');

		}

		// Mengambil kelas berdasarkan ID murid
		$data['kelas'] = $this->Kelas_model->get_kelas_by_id_murid($this->session->userdata('id_murid'));

		// Load view dashboard dan kirim data ke view
		$this->load->view('jadwal', $data);
	}
}
