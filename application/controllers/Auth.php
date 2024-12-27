<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function register() {
		$this->load->library('form_validation');
		$this->load->view('auth/register');
	}

	public function login() {
		$this->load->library('form_validation');
		$this->load->view('auth/login');
	}
}
