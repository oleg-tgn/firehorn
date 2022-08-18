<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
		$this->load->model('login_model');
	}

    function index() {       
        $data['title'] = "Вход";
        $this->load->view('templates/header', $data);
        $this->load->view('login/login');
        $this->load->view('templates/footer', $data);
	}
    
    function validation() {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required|trim');

        if ($this->form_validation->run()) {
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');
            $result = $this->login_model->can_login($user_email, $user_password);

            if ($result == true) 
            {
                //redirect('pricate_area');
                header("Location: ".base_url());
            } else {
                $this->session->set_flashdata('message', $result);
                //redirect('login');
                header("Location: /app");
            }
        } else {
            $this->index();
        }
    }
}
