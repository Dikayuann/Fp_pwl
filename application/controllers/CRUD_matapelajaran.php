<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_matapelajaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Matapelajaran_model');
    }

    public function index() {
        $data['mata_pelajaran'] = $this->Matapelajaran_model->get_all_mapel();
        $this->load->view('crud_matapelajaran', $data);
    }

    public function tambah() {
        $this->load->view('tambah_matapelajaran');
    }

    public function simpan() {
        // Ambil data dari form
        $nama_mapel = $this->input->post('nama_mapel');
        $link_video = $this->input->post('link');
        $deskripsi = $this->input->post('deskripsi');

        // Simpan data ke database
        $this->Matapelajaran_model->simpan_matapelajaran($nama_mapel, $link_video, $deskripsi);

        // Redirect ke halaman kelola mata pelajaran
        redirect('crud_matapelajaran');
    }

    public function edit($id_mapel) {
        $data['mapel'] = $this->Matapelajaran_model->get_matapelajaran_by_id($id_mapel);
        $this->load->view('edit_matapelajaran', $data);
    }

    public function update() {
        // Ambil data dari form
        $id_mapel = $this->input->post('id_mapel');
		$nama_mapel = $this->input->post('nama_mapel');
        $link_video = $this->input->post('link');
        $deskripsi = $this->input->post('deskripsi');

        // Update data di database
        $this->Matapelajaran_model->update_matapelajaran($id_mapel, $nama_mapel, $link_video, $deskripsi);

        // Redirect ke halaman kelola mata pelajaran
        redirect('crud_matapelajaran');
    }

    public function hapus($id_mapel) {
        $this->Matapelajaran_model->hapus_matapelajaran($id_mapel);
        redirect('crud_matapelajaran');
    }
}
