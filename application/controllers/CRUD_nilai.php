<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_nilai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Nilai_model');
		$this->load->model('Murid_model');
		$this->load->model('Matapelajaran_model');
	}

	// Fungsi untuk menampilkan data nilai
	public function index() {
        $data['nilai'] = $this->Nilai_model->get_all_nilai(); 
		$data['murid'] = $this->Murid_model->get_all_murid(); 
        $data['mapel'] = $this->Matapelajaran_model->get_all_mapel();
        $this->load->view('crud_nilai', $data);
    }

    public function tambah() {
        // Ambil data murid dan mapel dari database
        $data['murid'] = $this->Murid_model->get_all_murid(); // Ambil semua murid
        $data['mapel'] = $this->Matapelajaran_model->get_all_mapel(); // Ambil semua mata pelajaran
    
        if ($this->input->post()) {
            // Menyimpan data nilai yang ditambahkan
            $data_insert = [
                'id_murid' => $this->input->post('id_murid'),
                'id_mapel' => $this->input->post('id_mapel'),
                'nilai_angka' => $this->input->post('nilai_angka')
            ];
    
            // Simpan nilai ke database
            $this->Nilai_model->tambah_nilai($data_insert);
            redirect('crud_nilai'); // Redirect setelah menambah
        } else {
            // Tampilkan form tambah nilai dengan data murid dan mapel
            $this->load->view('tambah_nilai', $data);
        }
    }

	 // Function to edit the nilai
	 public function edit($id_nilai) {
        // Fetch the nilai data by id
        $data['nilai'] = $this->Nilai_model->get_nilai_by_id($id_nilai);
        
        // Fetch all murid and mapel data
        $data['murid'] = $this->Murid_model->get_all_murid();
        $data['mapel'] = $this->Matapelajaran_model->get_all_mapel();

        // Load the edit view and pass the data
        $this->load->view('edit_nilai', $data);
    }

    // Function to save the edited nilai
    public function simpan() {
        $id_nilai = $this->input->post('id_nilai');
        $id_murid = $this->input->post('id_murid');
        $id_mapel = $this->input->post('id_mapel');
        $nilai_angka = $this->input->post('nilai_angka');

        // Prepare the data to be updated
        $data = array(
            'id_murid' => $id_murid,
            'id_mapel' => $id_mapel,
            'nilai_angka' => $nilai_angka
        );

        // Update the nilai record
        $this->Nilai_model->update_nilai($id_nilai, $data);

        // Redirect or load a success message
        redirect('crud_nilai');
    }
	

	public function hapus($id)
	{
		// Delete the exam by ID
		$this->Nilai_model->delete_nilai($id);
		// Redirect to the CRUD index page after deletion
		redirect('crud_nilai');
	}
}
?>
