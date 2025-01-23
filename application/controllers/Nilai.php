<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // Memuat model
        $this->load->model('Nilai_model');
    }

    public function index() {
		if (!$this->session->userdata('id_murid')) {
			// Jika tidak ada session, redirect ke halaman login
			redirect('login');
		}
        // Mengambil data jadwal dan ujian untuk murid tertentu
        $data['nilai_ujian'] = $this->Nilai_model->get_nilai($this->session->userdata('id_murid'));

        // Menampilkan data ke view
        $this->load->view('nilai', $data);
    }
}
