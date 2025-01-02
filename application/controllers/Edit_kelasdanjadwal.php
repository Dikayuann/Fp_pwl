<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_kelasdanjadwal extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model'); // Pastikan model dimuat
    }

    // Tampilkan form edit dengan data spesifik
	public function index($id_kelas = null) {
		if ($id_kelas === null) {
			show_error('ID Kelas tidak diberikan!');
		}
	
		$this->load->model('Kelas_model');
		$data['kelas'] = $this->Kelas_model->get_kelas_by_id($id_kelas);
	
		if (!$data['kelas']) {
			show_error('Data kelas tidak ditemukan');
		}
	
		$this->load->view('edit_kelasdanjadwal', $data);
	}
}