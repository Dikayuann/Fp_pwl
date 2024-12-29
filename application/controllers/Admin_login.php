<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {
	public function index()
	{
		$this->load->view('admin_login');
	}
}
