<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_all_admin() {
        $query = $this->db->get('admin');
        return $query->result();
    }
}
