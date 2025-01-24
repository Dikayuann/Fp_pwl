<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Login_model');
	}

	// The main function to load the login page
	public function index()
	{
		// Display any flash messages (success/error) in the view
		$this->load->view('admin_login');
	}

	// The function that handles the login attempt
	public function authenticate()
	{
		// Set form validation rules for username and password
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');

		// Check if form validation passes
		if ($this->form_validation->run() == FALSE) {
			// Validation failed, reload login page with error messages
			$this->load->view('admin_login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Call the model function to check login credentials
			$admin = $this->Login_model->auth_admin($username, $password);

			// If the credentials are correct, start a session and redirect
			if ($admin) {
				// Store the admin's information in session
				$this->session->set_userdata('admin_id', $admin->id_admin);
				$this->session->set_userdata('admin_name', $admin->nama_admin);
				$this->session->set_userdata('admin_email', $admin->email_admin);

				// Set a success message in the session
				$this->session->set_flashdata('success', 'Login successful!');

				// Redirect to the admin dashboard or another page
				redirect('crud_murid/index');
			} else {
				// If login failed, show an error message
				$this->session->set_flashdata('error', 'Invalid username or password');

				// Redirect back to the login page
				redirect('admin_login');
			}
		}
	}

	// Optional: Logout function to clear session data
	public function logout()
	{
		// Destroy the session
		$this->session->sess_destroy();

		// Redirect back to the login page
		redirect('admin_login');
	}
}
