<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_murid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Murid_model'); 
        $this->load->library('upload');
    }

    public function index() {
        $data['murid'] = $this->Murid_model->get_all_murid();
        $data['admin_name'] = $this->session->userdata('admin_name');
        $this->load->view('crud_murid', $data);
    }
    public function tambah() {
        $this->load->view('tambah_murid');
    }

    public function simpan() {
   
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
            redirect('crud_murid'); 
        } else {
         
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('crud_murid/tambah');
        }
    }

    public function edit($id) {
        $data['murid'] = $this->Murid_model->get_murid_by_id($id);
        $this->load->view('edit_murid', $data);
    }

    public function update() {
        $id = $this->input->post('id_murid');

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
        } else {
            $data = array(
                'nama_murid' => $this->input->post('nama_murid'),
                'email_murid' => $this->input->post('email_murid'),
                'password_murid' => $this->input->post('password'),
                'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
                // 'foto_murid' => $this->input->post('foto_profil') // Jika tidak ada upload, biarkan kosong
            );
        }

        $this->Murid_model->update_murid($id, $data);
        redirect('crud_murid');
    }

	public function hapus($id) {
		$this->db->delete('pendaftarankelas', array('id_murid' => $id));

		$this->Murid_model->delete_murid($id);

		redirect('crud_murid'); 
	}
}
