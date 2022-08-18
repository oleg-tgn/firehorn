<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('clubs_model');
	}

    public function index() {            
		$data['title'] = "Клубы";
		$data['clubs'] = $this->clubs_model->getClubs();

		$this->load->view('templates/header', $data);
		$this->load->view('clubs/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function personal() {   			
		if ($this->session->userdata('role') != 'club')
			header("Location: /app/index.php/login");

		$data['title'] = "Личный Кабинет";
		$data['requests'] = $this->clubs_model->getRequests( $this->session->userdata('club_id') );

		$this->load->view('templates/header', $data);
		$this->load->view('clubs/personal', $data);
		$this->load->view('templates/footer');
	} 
}
