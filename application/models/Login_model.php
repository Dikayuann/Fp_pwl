<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	// Konstruktor untuk memastikan database dimuat
	public function __construct() {
		parent::__construct();
		// Memuat database
		$this->load->database();
	}

	// Fungsi untuk autentikasi pengguna
	public function auth_murid($email, $password) {
		// Mengamankan input dengan SQL Escape
		$email = $this->db->escape_str($email);
		$password = $this->db->escape_str($password);  // Langsung ambil password yang dimasukkan

		// Query untuk mencocokkan email dan password
		$this->db->select('id_murid, nama_murid, email_murid, password_murid');
		$this->db->from('murid');  // Pastikan nama tabel sesuai dengan yang ada di database
		$this->db->where('email_murid', $email);
		$this->db->where('password_murid', $password);  // Langsung cocokkan password
		$query = $this->db->get();

		// Jika ada data yang ditemukan, login berhasil
		if ($query->num_rows() > 0) {
			return $query->row();  // Mengembalikan data murid
		} else {
			return false;  // Email atau password salah
		}
	}

	public function auth_admin($username, $password)
	{
		// Query the database to find the admin with the given username and password
		$this->db->where('email_admin', $username);  // Match the email (or username)
		$this->db->where('password_admin', $password);  // Match the password
		$query = $this->db->get('administrasi');  // 'admin' is the table name

		// If a match is found, return the admin data, otherwise return false
		if ($query->num_rows() == 1) {
			return $query->row();  // Return the admin record as an object
		} else {
			return false;  // No match found
		}
	}

}
