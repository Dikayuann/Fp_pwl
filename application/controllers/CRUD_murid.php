<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_murid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Murid_model'); // Memuat model
        $this->load->library('upload'); // Memuat library upload
    }

    public function index() {
        $data['murid'] = $this->Murid_model->get_all_murid(); // Mengambil semua data murid
        $data['admin_name'] = $this->session->userdata('admin_name');
        $this->load->view('crud_murid', $data); // Menampilkan view
    }
    public function tambah() {
        $this->load->view('tambah_murid'); // Menampilkan form tambah murid
    }

    public function simpan() {
        // Konfigurasi upload
        $config['upload_path'] = './uploads/'; // Folder untuk menyimpan foto
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Tipe file yang diizinkan
        $config['max_size'] = 2048; // Ukuran maksimum file (2MB)

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_murid' => $this->input->post('nama_murid'),
                'email_murid' => $this->input->post('email_murid'),
                'password_murid' => $this->input->post('password'),
                'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
                'foto_murid' => $upload_data['file_name'] // Menyimpan nama file foto
            );
            $this->Murid_model->insert_murid($data); // Menyimpan data ke database
            redirect('crud_murid'); // Kembali ke halaman utama
        } else {
            // Jika upload gagal, tampilkan pesan error
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('crud_murid/tambah'); // Kembali ke form tambah
        }
    }

    public function edit($id) {
        $data['murid'] = $this->Murid_model->get_murid_by_id($id); // Mengambil data murid berdasarkan ID
        $this->load->view('edit_murid', $data); // Menampilkan form edit murid
    }

    public function update() {
        $id = $this->input->post('id_murid');

        // Konfigurasi upload
        $config['upload_path'] = './uploads/'; // Folder untuk menyimpan foto
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Tipe file yang diizinkan
        $config['max_size'] = 2048; // Ukuran maksimum file (2MB)

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto_profil')) {
            $upload_data = $this->upload->data();
            $data = array(
                'nama_murid' => $this->input->post('nama_murid'),
                'email_murid' => $this->input->post('email_murid'),
                'password_murid' => $this->input->post('password'),
                'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
                'foto_murid' => $upload_data['file_name'] // Menyimpan nama file foto
            );
        } else {
            // Jika upload gagal, tetap gunakan data lama
            $data = array(
                'nama_murid' => $this->input->post('nama_murid'),
                'email_murid' => $this->input->post('email_murid'),
                'password_murid' => $this->input->post('password'),
                'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
                // 'foto_murid' => $this->input->post('foto_profil') // Jika tidak ada upload, biarkan kosong
            );
        }

        $this->Murid_model->update_murid($id, $data); // Mengupdate data murid
        redirect('crud_murid'); // Kembali ke halaman utama
    }

	public function hapus($id) {
		// Hapus semua pendaftaran kelas yang terkait dengan murid
		$this->db->delete('pendaftarankelas', array('id_murid' => $id));

		// Hapus murid
		$this->Murid_model->delete_murid($id);

		redirect('crud_murid'); // Kembali ke halaman utama
	}
}
