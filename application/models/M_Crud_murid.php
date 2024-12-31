<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Crud_murid extends CI_Model {

	// Constructor to load the database
	public function __construct()
	{
		parent::__construct();
		// Load the database
		$this->load->database();
	}

	// Fetch all student data
	public function get_all_students()
	{
		$query = $this->db->get('murid'); // 'murid' is the table name
		return $query->result();
	}

	// Fetch student by ID
	public function get_student_by_id($id)
	{
		$query = $this->db->get_where('murid', array('id_murid' => $id));
		return $query->row();
	}

	// Insert new student
	public function insert_student($data)
	{
		return $this->db->insert('murid', $data);
	}

	// Update student data
	public function update_student($id, $data)
	{
		$this->db->where('id_murid', $id);
		return $this->db->update('murid', $data);
	}

	// Delete student by ID
	public function delete_student($id)
	{
		return $this->db->delete('murid', array('id_murid' => $id));
	}
}
