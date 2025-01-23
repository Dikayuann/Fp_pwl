<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// application/controllers/Login.php
class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Memuat model login
		$this->load->model('Login_model');
		// Memuat library session
		$this->load->library('session');
	}

	// Menampilkan halaman login
	public function index() {
		// Cek jika ada error
		$data['error'] = $this->session->flashdata('error');
		$this->load->view('login', $data);  // Menampilkan halaman login
	}

	// Fungsi untuk proses autentikasi login
	public function authenticate() {
		$email = $this->input->post('username');
		$password = $this->input->post('password');

		// Memeriksa apakah email dan password valid
		$user = $this->Login_model->auth_murid($email, $password);

		if ($user == true) {
			// Jika login berhasil, simpan session dan arahkan ke dashboard
			$this->session->set_userdata('id_murid', $user->id_murid);
			$this->session->set_userdata('nama_murid', $user->nama_murid);
			$this->session->set_userdata('email_murid', $user->email_murid);
			$this->session->set_userdata('foto_murid', $user->foto_murid);
			redirect('dashboard');  // Arahkan ke halaman dashboard
		} else {
			// Jika login gagal, tampilkan pesan error
			$this->session->set_flashdata('error', 'Email atau Password salah');
			redirect('login');  // Kembali ke halaman login
		}
	}

	// Fungsi logout
	public function logout() {
		$this->session->sess_destroy();
		redirect('login');  // Arahkan kembali ke halaman login setelah logout
	}
}

