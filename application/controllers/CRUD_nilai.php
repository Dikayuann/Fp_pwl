<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('nilai_model'); // Memuat model
    }

    // Menampilkan daftar nilai
    public function index() {
        $data['nilai'] = $this->nilai_model->get_all_nilai(); // Mengambil semua data nilai
        $this->load->view('crud_nilai', $data); // Menampilkan view dengan data nilai
    }

    // Menampilkan form tambah nilai
    public function tambah() {
        $this->load->view('tambah_nilai'); // Menampilkan form tambah nilai
    }

    // Menyimpan nilai baru
    public function simpan() {
        $data = array(
            'id_murid' => $this->input->post('id_murid'), // Mengambil ID murid dari input
            'nama_murid' => $this->input->post('nama_murid'), // Mengambil nama murid dari input
            'id_mapel' => $this->input->post('id_mapel'), // Mengambil ID mapel dari input
            'nilai_angka' => $this->input->post('nilai_angka') // Mengambil nilai angka dari input
        );

        $this->nilai_model->insert_nilai($data); // Menyimpan data nilai baru
        redirect('crud_nilai'); // Redirect ke halaman daftar nilai
    }

    // Menampilkan form edit nilai
    public function edit($id_nilai) {
        $data['nilai'] = $this->nilai_model->get_nilai_by_id($id_nilai); // Mengambil data nilai berdasarkan ID
        $this->load->view('edit_nilai', $data); // Menampilkan form edit nilai
    }

    // Mengupdate nilai
    public function update() {
        $id_nilai = $this->input->post('id_nilai'); // Mengambil ID nilai dari input
        $data = array(
            'id_murid' => $this->input->post('id_murid'), // Mengambil ID murid dari input
            'nama_murid' => $this->input->post('nama_murid'), // Mengambil nama murid dari input
            'id_mapel' => $this->input->post('id_mapel'), // Mengambil ID mapel dari input
            'nilai_angka' => $this->input->post('nilai_angka') // Mengambil nilai angka dari input
        );

        $this->nilai_model->update_nilai($id_nilai, $data); // Mengupdate data nilai
        redirect('crud_nilai'); // Redirect ke halaman daftar nilai
    }

    // Menghapus nilai
    public function hapus($id_nilai) {
        $this->nilai_model->delete_nilai($id_nilai); // Menghapus data nilai berdasarkan ID
        redirect('crud_nilai'); // Redirect ke halaman daftar nilai
    }
}