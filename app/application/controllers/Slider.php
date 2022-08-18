<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
        if ($this->session->userdata('id') === null) {
			header("Location: /app/index.php/login");           
        }

		$this->load->library('form_validation');
		$this->load->model('slider_model');
	}

    public function index() {
		$data['title'] = "Слайдер";
		$data['slider'] = $this->slider_model->get_slides();

		$this->load->view('templates/header', $data);
		$this->load->view('slider/admin_slider', $data);
		$this->load->view('templates/footer');
	}

	public function add_slide() {
		$upload_image = $this->do_upload();
		if ($upload_image == false) {
			$this->session->set_flashdata('message', "Ошибка при загрузке изображения");			
			return false;
		}

		$slide = array(	
			'title' 		=> $this->input->post('title'),
			'description' 	=> $this->input->post('description'),			
			'link_text' 	=> $this->input->post('link_text'),
			'link_url' 		=> $this->input->post('link_url'),
			'img' 			=> $upload_image['client_name'],		
		);

		if ( ! $this->slider_model->add_slide($slide) ) {
			$this->session->set_flashdata('message', "Ошибка в данных о слайде");
		}
		header("Location: /app/dashboard/slider");
	}

	public function do_upload()  {
		$config['upload_path']          = './static/uploads/slider';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 2500;
		$config['max_height']           = 2500;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img')) {
				$error = array('error' => $this->upload->display_errors());				
				return false;
		}
		else {
				$data = array('upload_data' => $this->upload->data());
				return $data['upload_data'];				
		}
	}

	public function archive_slide($id) {
		if ( $this->slider_model->archive_slide($id) )
			header("Location: /app/dashboard/slider");
		else {
			$error = array('error' => "Не удалось удалить слайд");				
			return false;
		}
	}

	public function edit_slide($id) {
		$data['slide'] = $this->slider_model->get_slide_by_id($id);
		$data['title'] = $data['slide']['title']."| Управление";

		$this->load->view('templates/header', $data);
		$this->load->view('slider/edit_slide', $data);
		$this->load->view('templates/footer');
	}

	public function update_slide($id) {		
		$slide = array(			
			'title' 		=> $this->input->post('title'),
			'description' 	=> $this->input->post('description'),			
			'link_text' 	=> $this->input->post('link_text'),
			'link_url' 		=> $this->input->post('link_url'),
		);
		$upload_image = $this->do_upload();	

		if 	($upload_image) {
			$slide['img'] = $upload_image['client_name'];	
		}

		if ( $this->slider_model->update_slide($id, $slide) ) {				
			header("Location: /app/dashboard/slider");
		}
		else {
			$this->session->set_flashdata('message', "Ошибка в данных об игроке");			
			return false;
		}
	}
}
