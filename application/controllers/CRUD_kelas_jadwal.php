<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_kelas_jadwal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Admin_model'); // Model untuk Admin
        $this->load->model('Matapelajaran_model'); // Model untuk Mata Pelajaran
    }

    // Menampilkan daftar kelas
    public function index() {
        $data['kelas'] = $this->Kelas_model->get_all_kelas();
        $this->load->view('crud_kelas_jadwal', $data);
    }

    // Menambahkan kelas

    public function tambah() {
        $data['admins'] = $this->Admin_model->get_all_admin(); // Ambil data Admin
        $data['mata_pelajaran'] = $this->Matapelajaran_model->get_all_mapel(); // Ambil data Mata Pelajaran

        // Menampilkan form tambah kelas
        $this->load->view('tambah_kelas', $data);
    }

    public function simpan() {
        // Ambil data dari form
        $nama_kelas = $this->input->post('nama_kelas');
        $id_admin = $this->input->post('id_admin');
        $jadwal = $this->input->post('jadwal');
        $id_mapel = $this->input->post('id_mapel');

        // Simpan data kelas baru ke database
        $this->Kelas_model->tambah_kelas($nama_kelas, $id_admin, $jadwal, $id_mapel);

        // Redirect ke halaman daftar kelas
        redirect('crud_kelas_jadwal');
    }


    // Mengedit kelas
    public function edit($id_kelas) {
        // Ambil data kelas berdasarkan id
        $data['kelas'] = $this->Kelas_model->get_kelas_by_id($id_kelas);
        $data['admins'] = $this->Admin_model->get_all_admin(); // Ambil data Admin untuk dropdown

        // Jika kelas tidak ditemukan, redirect ke halaman kelas
        if (!$data['kelas']) {
            redirect('kelas');
        }

        // Menampilkan form edit
        $this->load->view('edit_kelas', $data);
    }

    public function update() {
        // Ambil data dari form
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $id_admin = $this->input->post('id_admin');
        $jadwal = $this->input->post('jadwal');

        // Update data kelas
        $this->Kelas_model->update_kelas($id_kelas, $nama_kelas, $id_admin, $jadwal);

        // Redirect ke halaman daftar kelas
        redirect('Crud_kelas_jadwal');
    }


    // Menghapus kelas
    public function hapus($id_kelas) {
        $this->Kelas_model->hapus_kelas($id_kelas);
        redirect('crud_kelas_jadwal');
    }
}
