<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {
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
		$data['pendaftaran'] = $this->Kelas_model->get_kelas_info();
		$this->load->view('pendaftaran', $data);
	}

}
