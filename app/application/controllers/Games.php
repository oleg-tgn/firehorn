<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require APPPATH.'/libraries/PHPMailer/Exception.php';
require APPPATH.'/libraries/PHPMailer/PHPMailer.php';
require APPPATH.'/libraries/PHPMailer/SMTP.php';

class Games extends CI_Controller {	

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('games_model');	
	}

    public function index() {
		$this->session->userdata('id');

		//if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 2)		
		//	header("Location: /app/index.php/registre/role");          
		header("Location: /app/index.php/dasboard/games");
	}

	public function game($alias) {		
		$data['game'] = $this->games_model->get_game_by_alias($alias);
		if ($data['game'] == NULL) {
			$data['game'] = $this->games_model->get_game_by_id($alias);

			if ($data['game'] == NULL) {
				header("Location: /app/index.php/");
			}
		}
		$data['title'] = $data['game']['title'];
		$this->load->view('templates/header', $data);
		$this->load->view('games/game', $data);
		$this->load->view('templates/footer');
	}

	public function add_game() {
		$upload_image = $this->do_upload();
		if ($upload_image == false) {
			$this->session->set_flashdata('message', "Ошибка при загрузке изображения");			
			return false;
		}

		$game = array(			
			'title' 			=> $this->input->post('title'),
			'date' 				=> $this->input->post('date'),
			'preview' 			=> $upload_image['client_name'],			
		);

		if ( $this->games_model->add_game($game) ) {				
			header("Location: /app/dashboard/games");
		}
		else {
			$this->session->set_flashdata('message', "Ошибка в данных об игроке");			
			return false;
		}
	}

	public function do_upload()  {
		$config['upload_path']          = './static/uploads/games';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 2500;
		$config['max_height']           = 2500;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('preview')) {
				$error = array('error' => $this->upload->display_errors());				
				return false;
		}
		else {
				$data = array('upload_data' => $this->upload->data());
				return $data['upload_data'];				
		}
	}

	public function archive_game($id) {
		if ( $this->games_model->archive_game($id) )
			header("Location: /app/dashboard/games");
		else {
			$error = array('error' => "Не удалось удалить турнир");				
			return false;
		}
	}

	public function edit_game($id) {
		$data['game'] = $this->games_model->get_game_by_id($id);
		$data['title'] = $data['game']['title']."| Управление";

		$this->load->view('templates/header', $data);
		$this->load->view('games/edit_game', $data);
		$this->load->view('templates/footer');
	}

	public function update_game($id) {		
		$game = array(			
			'title' 			=> $this->input->post('title'),
			'date' 				=> $this->input->post('date'),	
			'challonge'			=> $this->input->post('challonge'),	
		);
		$upload_image = $this->do_upload();	

		if 	($upload_image) {
			$game['preview'] = $upload_image['client_name'];	
		}

		if ( $this->games_model->update_game($id, $game) ) {				
			header("Location: /app/dashboard/games");
		}
		else {
			$this->session->set_flashdata('message', "Ошибка в данных об игроке");			
			return false;
		}
	}
}

