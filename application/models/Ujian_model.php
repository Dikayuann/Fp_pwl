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
}
