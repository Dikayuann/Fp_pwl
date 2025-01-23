<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ujian extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // Memuat model
        $this->load->model('Ujian_model');
    }

    public function index() {
		if (!$this->session->userdata('id_murid')) {
			// Jika tidak ada session, redirect ke halaman login
			redirect('login');
		}
        // Mengambil data jadwal dan ujian untuk murid tertentu
        $data['jadwal_ujian'] = $this->Ujian_model->get_jadwal_ujian($this->session->userdata('id_murid'));

        // Menampilkan data ke view
        $this->load->view('ujian', $data);
    }
}
