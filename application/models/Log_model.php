<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua kelas
    public function get_all_logs() {
        $query = $this->db->get('log_changes');
        return $query->result();
    }

}