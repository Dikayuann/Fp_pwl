<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Memuat model login
		$this->load->model('Login_model');
		// Memuat library session untuk menangani sesi login
		$this->load->library('session');
	}

	// Halaman login
	public function index() {
		// Jika ada flashdata error, kita tampilkan di view
		$data['error'] = $this->session->flashdata('error');
		$this->load->view('login', $data);  // Menampilkan halaman login dengan data error
	}

	// Fungsi untuk memproses login
	public function authenticate() {
		// Mengambil data dari form
		$email = $this->input->post('username');  // Menggunakan email sebagai username
		$password = $this->input->post('password');  // Mengambil password dari form

		// Mengecek apakah data login valid
		$user = $this->Login_model->auth_murid($email, $password);  // Panggil metode authenticate dari model

		if ($user) {
			// Jika login berhasil, set session dan redirect
			$this->session->set_userdata('id_murid', $user->id_murid);
			$this->session->set_userdata('nama_murid', $user->nama_murid);
			$this->session->set_userdata('email_murid', $user->email_murid);
			redirect('dashboard');  // Redirect ke halaman dashboard atau halaman yang sesuai
		} else {
			// Jika login gagal, tampilkan pesan error
			$this->session->set_flashdata('error', 'Email atau Password salah');
			redirect('login');
		}
	}

	// Fungsi untuk logout
	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
