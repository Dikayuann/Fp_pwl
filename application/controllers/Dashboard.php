<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memastikan murid sudah login, jika tidak redirect ke login
        if (!$this->session->userdata('id_murid')) {
            redirect('login');
        }
        $this->load->model('Dashboard_model');
    }

    // Halaman utama dashboard murid
    public function index()
    {
        // Mengambil ID murid dari session
        $id_murid = $this->session->userdata('id_murid');

        // Mengambil data mata pelajaran yang diikuti oleh murid
        $data['matapelajaran'] = $this->Dashboard_model->getMatapelajaran($id_murid);

        // Menampilkan view dashboard
        $this->load->view('dashboard', $data);
    }

    
}
?>