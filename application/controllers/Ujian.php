<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memastikan murid sudah login, jika tidak redirect ke login
        if (!$this->session->userdata('id_murid')) {
            redirect('login');
        }
        $this->load->model('Ujian_model');
    }

    // Menampilkan daftar ujian yang tersedia berdasarkan kelas yang diikuti
    public function index()
    {
        $id_murid = $this->session->userdata('id_murid');
        $data['ujian'] = $this->Ujian_model->getAvailableUjian($id_murid);
        $this->load->view('ujian', $data);
    }

    // Menampilkan halaman ujian
    
}
