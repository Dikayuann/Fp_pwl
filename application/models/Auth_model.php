<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk melakukan registrasi pengguna
    public function register_user($data) {
        // Memasukkan data ke tabel 'murid' (sesuai dengan struktur tabel yang sudah dibuat sebelumnya)
        $this->db->insert('murid', $data);
        
        // Mengembalikan hasil query, apakah sukses atau gagal
        return $this->db->affected_rows() > 0;
    }
}
