<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Players extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('players_model');
	}

    public function index() {            
		$data['title'] = "Игроки";
		$data['clubs'] = $this->players_model->getPlayers();

		$this->load->view('templates/header', $data);
		$this->load->view('players/index', $data);
		$this->load->view('templates/footer');
	}	

	public function make_requst() {
		$this->form_validation->set_rules('club_id', 'Club Id', 'required|trim');
		$this->form_validation->set_rules('req_position', 'Position', 'required|trim');		

		if ($this->form_validation->run()) {			
			$data = array(
				'user_id' 			=> $this->session->userdata('id'),
				'player_id' 		=> $this->session->userdata('player_id'),
				'club_id' 			=> $this->input->post('club_id'),
				'req_position'			=> $this->input->post('req_position')
			);

			$new_request_id = $this->players_model->createRequestInClub($data);
			if ( $new_request_id !== false) {
				$this->session->set_flashdata('message', "Ваша заявка отправлена клубу.");
				
				header("Location: /app/index.php/clubs");				
			} else {
				$this->session->set_flashdata('message', "Не удалось отправить запрос.");
			}
		} else {
			$this->session->set_flashdata('message', "Возникла ошибка ввода данных пользователя. Попробуйте снова.");
			header("Location: /app/index.php/clubs");
		}
	}
}
