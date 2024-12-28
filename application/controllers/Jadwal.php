<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	public function index()
	{
		$this->load->view('jadwal');
	}
}
