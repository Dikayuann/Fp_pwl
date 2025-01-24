<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memastikan murid sudah login
        if (!$this->session->userdata('id_murid')) {
            redirect('login');
        }
        $this->load->model('Nilai_model');
    }

    // Menampilkan halaman nilai ujian
    public function index()
    {
        $id_murid = $this->session->userdata('id_murid');

        // Mengambil nilai ujian yang sudah dikerjakan oleh murid
        $data['nilai_ujian'] = $this->Nilai_model->getNilaiByMurid($id_murid);

        // Menampilkan halaman nilai
        $this->load->view('nilai', $data);
    }
}
