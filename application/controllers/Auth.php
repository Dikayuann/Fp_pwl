<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');  // Memuat model Auth_model
        $this->load->helper('url');         // Memuat helper url untuk redirect
    }

    // Halaman Register
    public function register() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');  // Langsung menggunakan password yang dikirim dari form
            $foto = $_FILES['foto']['name'];  // Mengambil nama file foto yang diupload

            // Menyimpan data ke model
            $data = array(
                'nama_murid' => $nama,
                'email_murid' => $email,
                'password_murid' => $password,  // Simpan password langsung tanpa hashing
                'foto_murid' => $foto,
                'tanggal_registrasi' => date('Y-m-d') // Menambahkan tanggal registrasi
            );

            // Mengupload foto
            $config['upload_path'] = './uploads/foto/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Max size 2MB
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $data['foto_murid'] = $upload_data['file_name'];  // Mendapatkan nama file setelah upload
            } else {
                // Jika upload gagal
                $data['foto_murid'] = NULL;
            }

            // Menyimpan data ke database
            if ($this->Auth_model->register_user($data)) {
                // Redirect ke halaman login setelah berhasil registrasi
                redirect('login');
            } else {
                // Menampilkan error jika registrasi gagal
                $this->load->view('register');
            }
        } else {
            // Menampilkan halaman registrasi jika metode request adalah GET
            $this->load->view('register');
        }
    }
}
