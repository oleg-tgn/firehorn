<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');        
	}

    public function index() {
		$this->load->model('games_model');
		$this->load->model('slider_model');

		$data['games'] = $this->games_model->get_games();
		$data['slide'] = $this->slider_model->get_slides();

		$data['title'] = "Главная";

		if (!$data['slide']) {
			$this->load->view('templates/header', $data);
		} else {
			$this->load->view('templates/header_home', $data);
		}
		$this->load->view('games/games_list', $data);
		$this->load->view('templates/footer');
	}
}
