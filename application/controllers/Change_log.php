<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class change_log extends CI_Controller {
	public function index()
	{
		$this->load->view('change_log');
	}
}
