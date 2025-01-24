<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memastikan murid sudah login, jika tidak redirect ke login
        if (!$this->session->userdata('id_murid')) {
            redirect('login');
        }
        $this->load->model('Kelas_model');
        $this->load->model('Matapelajaran_model'); // Pastikan model Mata Pelajaran dimuat
    }

    public function index()
    {
        $id_murid = $this->session->userdata('id_murid');
        
        // Mengambil data kelas yang diikuti oleh murid
        $data['kelas'] = $this->Kelas_model->getKelasDiikuti($id_murid);
        
        // Mengambil data mata pelajaran untuk masing-masing kelas
        foreach ($data['kelas'] as &$kelas) {
            $kelas->mata_pelajaran = $this->Matapelajaran_model->getMapelByKelas($kelas->id_kelas); // Ambil mata pelajaran
        }

        // Memuat view dengan data kelas yang telah diperoleh
        $this->load->view('kelas', $data);
    }
}
