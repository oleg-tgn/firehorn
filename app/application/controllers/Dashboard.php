<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
        if ($this->session->userdata('id') === null) {            
           header("Location: /app/index.php/login");           
        }

		$this->load->library('form_validation');
	}

    public function index() {            
		$data['title'] = "Панель управления";

		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}

	public function games() {
		$this->load->model('games_model');
		$data['games'] = $this->games_model->get_games();

		$data['title'] = "Турниры | Панель управления";

		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('dashboard/add_game_form', $data);
		$this->load->view('games/games_list_admin', $data);
		$this->load->view('templates/footer');
	}
}
