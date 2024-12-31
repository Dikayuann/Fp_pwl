<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_murid extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load the model for CRUD operations
		$this->load->model('M_Crud_murid');
	}

	// Load the main page and display students
	public function index()
	{
		// Get all students from the model
		$data['students'] = $this->M_Crud_murid->get_all_students();

		// Load the view with the student data
		$this->load->view('crud_murid', $data);
	}
}
