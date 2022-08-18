<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require APPPATH.'/libraries/PHPMailer/Exception.php';
require APPPATH.'/libraries/PHPMailer/PHPMailer.php';
require APPPATH.'/libraries/PHPMailer/SMTP.php';

class Register extends CI_Controller {	

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('register_model');	
	}

    public function index() {
		echo $this->session->userdata('id');

		if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 2)
			header("Location: /app/index.php/registre/role");          
		
		$data['title'] = "Регистрация";
		$this->load->view('templates/header', $data);
		$this->load->view('register/register');
		$this->load->view('templates/footer');
	}

	public function exit() {
		$this->session->sess_destroy();
	}
	
	public function validation() {
		$this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('user_password', 'Password', 'required|trim');
		$this->form_validation->set_rules('user_role', 'Role', 'required|trim');

		if ($this->input->post('user_role') == 'club') {
			$this->form_validation->set_rules('club_name', 'Name', 'required|trim');
			$this->form_validation->set_rules('club_address', 'Address', 'required|trim');		
			$this->form_validation->set_rules('club_phone', 'Phone', 'required|trim');
			$this->form_validation->set_rules('club_vk', 'Vk', 'trim|valid_url');
			$this->form_validation->set_rules('club_inst', 'Inst', 'trim|valid_url');
		} else if ($this->input->post('user_role') == 'player') {
			$this->form_validation->set_rules('player_surname', 'Surname', 'required|trim');
			$this->form_validation->set_rules('player_name', 'Name', 'required|trim');
			$this->form_validation->set_rules('player_phone', 'Phone', 'required|trim');
			$this->form_validation->set_rules('player_town', 'Town', 'required|trim');
			$this->form_validation->set_rules('player_nik', 'Nik', 'required|trim');
			$this->form_validation->set_rules('player_position', 'Position', 'required|trim');
			$this->form_validation->set_rules('player_position_second', 'Position Second', 'required|trim');
			$this->form_validation->set_rules('player_rank', 'Rank', 'required|trim');
			$this->form_validation->set_rules('player_vk', 'VK', 'trim|valid_url');
			$this->form_validation->set_rules('player_inst', 'Inst', 'trim|valid_url');
		} else {
			$this->session->set_flashdata('message', "Ошибка при задании типа аккаунта.");
			$this->index();
		}

		if ($this->form_validation->run()) {
			$verification_key = md5(rand());
			
			$encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));

			$data = array(
				'email' 			=> $this->input->post('user_email'),
				'password'			=> $encrypted_password,
				'role'				=> $this->input->post('user_role'),
				'verification_key' 	=> $verification_key
			);

			$new_user_id = $this->register_model->add_user($data);
			if ( $new_user_id !== false) {
				if ($this->input->post('user_role') == 'club') {
					if ($this->addClub($new_user_id))
						if ($this->sendVerificationEmail($verification_key))
							header("Location: /app/index.php/login");						
				} else {
					if ($this->addPlayer($new_user_id)) 
						if ($this->sendVerificationEmail($verification_key))
							header("Location: /app/index.php/login");						
				}
			} else {
				$this->session->set_flashdata('message', "Не удалось добавить пользователя в Базу данных.");
			}
		} else {
			$this->session->set_flashdata('message', "Возникла ошибка ввода данных пользователя. Попробуйте снова.");
			$this->index();
		}
	}

	public function sendVerificationEmail($verification_key) {	
		$to = $this->input->post('user_email');
		$subject = "Письмо для подтверждения регистрация Fire Horn League";
		$message = "
			<p>Здравствуйте!</p>
			<p>Это письмо с подтверждением регистрации на сайте Fire Horn League. Для того, чтобы подтвердить регистрацию на сайте, пожалуйста, перейдите по  <a href='".base_url()."register/verify_email/".$verification_key."'>ссылке</a>.</p>
			<p>Спасибо!</p>";			
		
		$messageSendResult = $this->sendSMTPCode($to, $subject, $message);
		if ($messageSendResult["status"] == "Ok") {
			$this->session->set_flashdata('message', "Вам на почту (".$this->input->post('user_email').") отправлено письмо со ссылкой.
			Пройдите по ней, чтобы подтвердить свой e-mail.");
			
			return true;
		} else {
			$this->session->set_flashdata('message', $messageSendResult["message"]);
			return false;
		}
	}

	public function addClub($new_user_id) { 
		$club = array(
			'user_id'		=> $new_user_id,
			'name' 			=> $this->input->post('club_name'),
			'address' 		=> $this->input->post('club_address'),
			'phone' 		=> $this->input->post('club_phone'),
			'vk' 			=> $this->input->post('club_vk'),
			'inst' 			=> $this->input->post('club_inst'),
		);

		if ( $this->register_model->add_club($club) ) {	
			return true;
		}
		else {
			$this->session->set_flashdata('message', "Ошибка в данных о клубе");			
			return false;
		}
	}

	public function addPlayer($new_user_id) { 
		$player = array(
			'user_id'			=> $new_user_id,
			'surname' 			=> $this->input->post('player_surname'),
			'name' 				=> $this->input->post('player_name'),
			'phone'		 		=> $this->input->post('player_phone'),
			'town' 				=> $this->input->post('player_town'),
			'nik' 				=> $this->input->post('player_nik'),
			'position' 			=> $this->input->post('player_position'),
			'position_second' 	=> $this->input->post('player_position_second'),
			'vk' 				=> $this->input->post('player_vk'),
			'inst' 				=> $this->input->post('player_inst'),
		);

		if ( $this->register_model->add_player($player) ) {	
			return true;
		}
		else {
			$this->session->set_flashdata('message', "Ошибка в данных об игроке");			
			return false;
		}
	}

	public function sendSMTPCode($to, $subject, $meassage) {
		$mail = new PHPMailer(true);

		try {
			$mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'ssl://smtp.yandex.ru';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'stelmah.oleg@ya.ru';                     // SMTP username
			$mail->Password   = 'xprdorzzpfqzhosb';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
			$mail->CharSet = 'UTF-8';
			//$mail->Encoding = 'base64';


			$mail->setFrom('stelmah.oleg@ya.ru', 'Fire Horn League');
			$mail->addAddress($to);
			$mail->isHTML(true); 
			$mail->Subject = $subject;
			$mail->Body    = $meassage;		

			if(!$mail->send()) {
				return array(
					"status"  => "Error",
					"message" => $mail->ErrorInfo
				);
			} else {
				return array(
					"status"  => "Ok",
					"message" => 'Message has been sent.'
				);
			}
		} catch (Exception $e) {
			return array(
				"status"  => "Error",
				"message" => $mail->ErrorInfo
			);
		}
	}

	public function verify_email() {		
		if ($this->uri->segment(3)) {
			$verification_key = $this->uri->segment(3);
			
			if ($this->register_model->verify_email($verification_key)) {
				$this->session->set_flashdata('message', "Ваш Email успешно подтвержден, теперь можете авторизовать на сайте.");
			}
			else {
				$this->session->set_flashdata('message', "Сссылка не действительна.");
			}
			
			header("Location: /app/index.php/login");
		}
	}

	public function role() {
		if ($this->session->userdata('user_id') === null) {
            //redirect('login');
           header("Location: /app/index.php/login");           
		} 
		echo "USER_ID: ". $this->session->userdata('user_id');
		$data['title'] = "Регистрация (Шаг 2 / 2)";
		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_data'] = $this->session->userdata('user_data');
		$data['user_role'] = $this->session->userdata('user_role');
		if ($data['user_role'] != 1 && $data['user_role'] != 2) 
			header("Location: /app/index.php/login");      

		$this->load->view('templates/header', $data);
		if ($data['user_role'] == 2) 
			$this->load->view('register/register_club', $data);
		else if ($data['user_role'] == 1) 
			$this->load->view('register/register_player', $data);
		

		$this->load->view('templates/footer');
	}


}
