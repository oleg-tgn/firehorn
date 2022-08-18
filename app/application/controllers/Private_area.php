<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('id') === null) {
            //redirect('login');
           header("Location: /app/index.php/login");           
        }
	}

    public function index() {            
        echo "<h1>Welcome User</h1>";
        echo '<p align="center"><a href="'.base_url().'private_area/logout">Выход</a></p>';
    }
    
    function logout() {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        header("Location: /app/index.php/login");
    }
	
}
