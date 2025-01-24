<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Memuat model yang diperlukan
        $this->load->model('Matapelajaran_model');
    }

    // Fungsi untuk menampilkan materi berdasarkan ID mapel
    public function index($id_mapel) {
		if (!$this->session->userdata('id_murid')) {
			// Jika tidak ada session, redirect ke halaman login
			redirect('login');
		}

        // Mengambil data materi berdasarkan ID mapel
        $data['materi'] = $this->Matapelajaran_model->get_materi_by_mapel($id_mapel);
        
        // Menampilkan halaman materi dengan data materi
        $this->load->view('materi', $data);
    }
}

