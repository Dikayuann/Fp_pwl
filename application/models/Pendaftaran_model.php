<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan daftar kelas yang tersedia untuk pendaftaran
    public function getAvailableKelas()
    {
        $this->db->select('kelas.id_kelas, kelas.nama_kelas, kelas.jadwal, admin.nama_admin');
        $this->db->from('kelas');
        $this->db->join('admin', 'kelas.id_admin = admin.id_admin');
        $query = $this->db->get();
        return $query->result();
    }

    // Menyimpan data pendaftaran kelas
    public function registerToClass($data)
    {
        return $this->db->insert('pendaftarankelas', $data);
    }
}
