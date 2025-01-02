<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_ujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ujian_model');
	}

	public function index()
	{
		// Get all exams from the model
		$data['ujian'] = $this->Ujian_model->get_all_ujian();
		// Load the view to display the list
		$this->load->view('crud_ujian', $data);
	}

	public function tambah()
	{
		if ($this->input->post()) {
			// Call the 'simpan' method to save the data
			$this->simpan();
		} else {
			// Load the form view to add a new exam
			$this->load->view('tambah_ujian');
		}
	}

	public function simpan()
	{
		// Validate the form data before saving (optional)
		$data = [
			'id_mapel' => $this->input->post('id_mapel'),
			'id_pengajaran' => $this->input->post('id_pengajar'),
			'link_ujian' => $this->input->post('link_ujian'),
			'deskripsi' => $this->input->post('deskripsi')
		];

		// Insert the data into the database
		$this->Ujian_model->insert_ujian($data);

		// Redirect to the CRUD index page after saving
		redirect('crud_ujian');
	}

	public function edit($id)
	{
		// Get the exam details by ID
		$data['ujian'] = $this->Ujian_model->get_ujian_by_id($id);

		if ($this->input->post()) {
			// If form is submitted, update the exam data
			$data_update = [
				'id_mapel' => $this->input->post('id_mapel'),
				'id_pengajaran' => $this->input->post('id_pengajar'),
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
