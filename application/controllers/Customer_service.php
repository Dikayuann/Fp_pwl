<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_service extends CI_Controller {
	public function index()
	{
		$this->load->view('customer_service');
	}
}
