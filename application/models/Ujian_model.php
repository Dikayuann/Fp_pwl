<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_model extends CI_Model {

	public function get_all_ujian()
	{
		return $this->db->get('ujian')->result();
	}

	public function insert_ujian($data)
	{
		return $this->db->insert('ujian', $data);
	}

	public function get_ujian_by_id($id)
	{
		return $this->db->get_where('ujian', ['id_ujian' => $id])->row();
	}

	public function update_ujian($id, $data)
	{
		$this->db->where('id_ujian', $id);
		return $this->db->update('ujian', $data);
	}

	public function delete_ujian($id)
	{
		return $this->db->delete('ujian', ['id_ujian' => $id]);
	}

	public function get_jadwal_ujian($id_murid) {
		// Menyusun query untuk mengambil data yang diperlukan
		$this->db->select('k.nama_kelas, k.jadwal, m.nama_mapel, a.nama_admin, u.link_ujian');
		$this->db->from('kelas k');
		$this->db->join('pengajaran p', 'p.id_kelas = k.id_kelas');
		$this->db->join('matapelajaran m', 'm.id_mapel = p.id_mapel');
		$this->db->join('administrasi a', 'a.id_admin = k.id_admin');
		$this->db->join('ujian u', 'u.id_pengajaran = p.id_pengajaran');  
		$this->db->where('k.id_murid', $id_murid);  
		
		// Menjalankan query dan mengembalikan hasilnya
		$query = $this->db->get();
		return $query->result();  // Mengembalikan hasil sebagai array objek
	}
}
