<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load model Mapel_model
		$this->load->model('Mapel_model');
	}

	public function index() {
		if (!$this->session->userdata('id_murid')) {
			// Jika tidak ada session, redirect ke halaman login
			redirect('login');
		}

		// Mengambil semua data mata pelajaran dari database
		$data['matapelajaran'] = $this->Mapel_model->get_all();

		// Load view dashboard dan kirim data ke view
		$this->load->view('dashboard', $data);
	}
}
