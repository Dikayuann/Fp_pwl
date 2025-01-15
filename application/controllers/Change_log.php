<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class change_log extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model');
	}

	public function index()
	{
		$data['logs'] = $this->Log_model->get_all_logs();
		$this->load->view('change_log', $data);
	}
}