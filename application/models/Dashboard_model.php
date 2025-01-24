<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk mengambil data mata pelajaran yang diikuti oleh murid
    public function getMatapelajaran($id_murid)
    {
        // Mengambil data mata pelajaran berdasarkan murid
        $this->db->select('matapelajaran.id_mapel, matapelajaran.nama_mapel, matapelajaran.deskripsi');
        $this->db->from('kelas_matapelajaran');
        $this->db->join('matapelajaran', 'kelas_matapelajaran.id_mapel = matapelajaran.id_mapel');
        $this->db->join('pendaftarankelas', 'pendaftarankelas.id_kelas = kelas_matapelajaran.id_kelas');
        $this->db->where('pendaftarankelas.id_murid', $id_murid);
        $query = $this->db->get();

        return $query->result();
    }

}
?>
