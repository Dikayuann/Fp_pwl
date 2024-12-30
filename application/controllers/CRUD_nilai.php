<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_nilai extends CI_Controller {
	public function index()
	{
		$this->load->view('crud_nilai');
	}
}
