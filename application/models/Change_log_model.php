<?php
class Change_log_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    // Function to get all the change logs from the database
    public function get_change_logs() {
        $this->db->select('*'); 
        $this->db->from('change_log');
        $this->db->order_by('id_log', 'DESC');  
        $query = $this->db->get(); 
        return $query->result(); 
    }
}
?>
