<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_kelas_jadwal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model'); // Memuat model
    }

    // Menampilkan daftar kelas
    public function index() {
        $data['kelas'] = $this->Kelas_model->get_all_kelas();
        $this->load->view('crud_kelas_jadwal', $data);
    }

    // Menampilkan form tambah kelas
    public function tambah() {
        $this->load->view('tambah_kelasdanjadwal');
    }

    // Menyimpan kelas baru
	public function simpan() {
		$data = array(
			'id_kelas' => $this->input->post('id_kelas'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'id_murid' => $this->input->post('id_murid'),
			'id_admin' => $this->input->post('id_admin'),
			'jadwal' => $this->input->post('jadwal')
		);
	
		$this->Kelas_model->insert_kelas($data);
		redirect('crud_kelas_jadwal'); // Redirect ke halaman kelas
	}
	

    // Menampilkan form edit kelas
    public function edit($id_kelas) {
        $data['kelas'] = $this->Kelas_model->get_kelas_by_id($id_kelas);
        $this->load->view('edit_kelasdanjadwal', $data);
    }

    // Mengupdate kelas
    public function update() {
        $id_kelas = $this->input->post('id_kelas');
        $data = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
            'id_murid' => $this->input->post('id_murid'),
            'id_admin' => $this->input->post('id_admin'),
            'jadwal' => $this->input->post('jadwal')
        );

        $this->Kelas_model->update_kelas($id_kelas, $data);
        redirect('crud_kelas_jadwal'); // Redirect ke halaman kelas
    }

    // Menghapus kelas
    public function hapus($id_kelas) {
        $this->Kelas_model->delete_kelas($id_kelas);
        redirect('crud_kelas_jadwal'); // Redirect ke halaman kelas
    }
}