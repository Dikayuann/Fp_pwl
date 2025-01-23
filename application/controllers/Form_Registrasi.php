<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form_registrasi extends CI_Controller {
	public function __construct()
{
    parent::__construct();
    $this->load->model('Murid_model'); 
}

    public function index()
    {
        $this->load->view('form_registrasi');
    }

    public function simpan() {
       
        $this->load->library('upload');

     
        $config['upload_path'] = './uploads/'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_murid' => $this->input->post('nama_murid'),
                'email_murid' => $this->input->post('email_murid'),
                'password_murid' => $this->input->post('password'),
                'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
                'foto_murid' => $upload_data['file_name']
            );
            $this->Murid_model->insert_murid($data);
            redirect('login');
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('registrasi');
        }
    }
}
