<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memastikan murid sudah login, jika tidak redirect ke login
        if (!$this->session->userdata('id_murid')) {
            redirect('login');
        }
        $this->load->model('Pendaftaran_model');
        // Memuat library untuk upload file
        $this->load->library('upload');
    }

    public function index()
    {
        // Mendapatkan daftar kelas yang tersedia untuk pendaftaran
        $data['kelas'] = $this->Pendaftaran_model->getAvailableKelas();
        
        // Memuat view pendaftaran kelas
        $this->load->view('pendaftaran', $data);
    }

    public function daftar()
    {
        // Mendapatkan ID murid yang sedang login
        $id_murid = $this->session->userdata('id_murid');
        
        // Mendapatkan ID kelas yang dipilih dari form
        $id_kelas = $this->input->post('id_kelas');

        // Konfigurasi upload file
        $config['upload_path'] = './uploads/bukti_pembayaran/'; // Direktori untuk menyimpan file
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
        $config['max_size'] = 2048; // Maksimal ukuran file (2MB)
        $config['file_name'] = 'bukti_pembayaran_' . time(); // Nama file yang unik

        // Menyiapkan library upload dengan konfigurasi di atas
        $this->upload->initialize($config);

        if ($this->upload->do_upload('bukti_pembayaran')) {
            // Jika upload berhasil, ambil nama file
            $bukti_pembayaran = $this->upload->data('file_name');
        } else {
            // Jika upload gagal, tampilkan pesan error
            $bukti_pembayaran = null;
            $this->session->set_flashdata('error', 'Upload bukti pembayaran gagal! ' . $this->upload->display_errors());
            redirect('pendaftaran');
        }

        // Menyusun data untuk disimpan dalam tabel pendaftarankelas
        $data = array(
            'id_kelas' => $id_kelas,
            'id_murid' => $id_murid,
            'tanggal_pendaftaran' => date('Y-m-d'),
            'bukti_pembayaran' => $bukti_pembayaran
        );

        // Memanggil model untuk menyimpan data pendaftaran
        if ($this->Pendaftaran_model->registerToClass($data)) {
            // Jika pendaftaran berhasil, arahkan ke halaman konfirmasi atau sukses
            $this->session->set_flashdata('success', 'Pendaftaran berhasil!');
            redirect('pendaftaran');
        } else {
            // Jika pendaftaran gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'Pendaftaran gagal, coba lagi!');
            redirect('pendaftaran');
        }
    }
}
