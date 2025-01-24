<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_ujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ujian_model');
		$this->load->model('Matapelajaran_model');
		$this->load->model('Pengajaran_model');
	}

	public function index() {
		// Ambil data ujian
		$data['ujian'] = $this->Ujian_model->get_all_ujian();
	
		// Ambil data mata pelajaran
		$data['mata_pelajaran'] = $this->Matapelajaran_model->get_all_mapel();
	
		// Ambil data pengajaran
		$data['pengajaran'] = $this->Pengajaran_model->get_all_pengajaran();
	
		// Kirim data ke view
		$this->load->view('crud_ujian', $data);
	}
	

	public function tambah() {
		// Ambil data mata pelajaran dan pengajaran
		$data['mata_pelajaran'] = $this->Matapelajaran_model->get_all_mapel();
		$data['pengajaran'] = $this->Pengajaran_model->get_all_pengajaran();
	
		// Tampilkan view tambah ujian
		$this->load->view('tambah_ujian', $data);
	}
	

	public function simpan() {
		// Ambil data dari form
		$id_mapel = $this->input->post('id_mapel');
		$id_pengajaran = $this->input->post('id_pengajaran');
		$link_ujian = $this->input->post('link_ujian');
		$deskripsi = $this->input->post('deskripsi');
	
		// Panggil fungsi simpan_ujian() dari model untuk menyimpan data
		$this->load->model('Ujian_model');
		$simpan = $this->Ujian_model->simpan_ujian($id_mapel, $id_pengajaran, $link_ujian, $deskripsi);
	
		// Jika data berhasil disimpan, alihkan ke halaman kelola ujian
		if ($simpan) {
			// Redirect ke halaman kelola ujian
			redirect('crud_ujian');
		} else {
			// Jika gagal, tampilkan pesan error
			$this->session->set_flashdata('error', 'Gagal menambahkan ujian!');
			redirect('crud_ujian/tambah');
		}
	}
	

	public function edit($id)
{
    $data['ujian'] = $this->Ujian_model->get_ujian_by_id($id);
    $data['mata_pelajaran'] = $this->Matapelajaran_model->get_all_mapel();
    $data['pengajaran'] = $this->Pengajaran_model->get_all_pengajaran();

    if ($this->input->post()) {
        // If form is submitted, update the exam data
        $data_update = [
            'id_mapel' => $this->input->post('id_mapel'),
            'id_pengajaran' => $this->input->post('id_pengajaran'),
            'link_ujian' => $this->input->post('link_ujian'),
            'deskripsi' => $this->input->post('deskripsi')
        ];

        // Update the exam in the database
        $this->Ujian_model->update_ujian($id, $data_update);

        // Redirect to the index page after update
        redirect('crud_ujian');
    } else {
        // If no form is submitted, load the edit form with current data
        $this->load->view('edit_ujian', $data);
    }
}


	public function hapus($id)
	{
		// Delete the exam by ID
		$this->Ujian_model->delete_ujian($id);
		// Redirect to the CRUD index page after deletion
		redirect('crud_ujian');
	}
}
