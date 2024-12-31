<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Login_model');
	}

	// The main function to load the login page
	public function index()
	{
		$this->load->view('admin_login');
	}

	// The function that handles the login attempt
	public function authenticate()
	{
		// Get the username and password from the form
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Call the model function to check login
		$admin = $this->Login_model->auth_admin($username, $password);

		// If the credentials are correct, start a session and redirect
		if ($admin) {
			// Store the admin's information in session
			$this->session->set_userdata('admin_id', $admin->id_admin);
			$this->session->set_userdata('admin_name', $admin->nama_admin);
			$this->session->set_userdata('admin_email', $admin->email_admin);

			// Redirect to the admin dashboard or another page
			redirect('crud_murid/index');
		} else {
			// If login failed, show an error message
			$this->session->set_flashdata('error', 'Invalid username or password');
			redirect('admin_login');
		}
	}
}
