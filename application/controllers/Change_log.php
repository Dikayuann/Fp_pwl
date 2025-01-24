<?php
class Change_log extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Change_log_model'); // Load the Change_log model
    }

    // Function to display change logs
    public function index() {
        $data['logs'] = $this->Change_log_model->get_change_logs(); // Get all change logs
        $this->load->view('change_log', $data); // Pass the data to the view
    }
}
?>
