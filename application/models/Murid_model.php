<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid_model extends CI_Model {

    public function get_all_murid() {
        return $this->db->get('murid')->result();
    }

    public function insert_murid($data) {
        return $this->db->insert('murid', $data);
    }

    public function get_murid_by_id($id) {
        return $this->db->get_where('murid', array('id_murid' => $id))->row();
    }

    public function update_murid($id, $data) {
        $this->db->where('id_murid', $id);
        return $this->db->update('murid', $data);
    }

    public function delete_murid($id) {
        $this->db->where('id_murid', $id);
        return $this->db->delete('murid');
    }
}