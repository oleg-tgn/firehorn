<?php

class Login_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
 
    function can_login($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                if ($row->is_email_verified == 1) {
                    $store_password = $this->encryption->decrypt($row->password);

                    if ($password == $store_password) {
                        $this->session->set_userdata('id', $row->id);
                        $this->session->set_userdata('email', $row->email);
                        $this->session->set_userdata('role', $row->role);

                        if ($row->role == 'player') 
                            $this->loginPlayer($row->id);
                        else if ($row->role == 'club') 
                            $this->loginClub($row->id);
                        return true;
                    } else {
                        return "Неверный Пароль. $store_password, $password";
                    }                     
                } else {
                    return "Необходимо подвердить ваш Email.";
                }
            }
        } else {
            return "Данный Email не зарегистрирован в системе.";
        }
    }


    function loginPlayer($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get('players');

        foreach($query->result() as $row) {
            $this->session->set_userdata('player_id', $row->id);
        }
    }

    function loginClub($id) {
        $this->db->where('user_id', $id);
        $query = $this->db->get('clubs');

        foreach($query->result() as $row) {
            $this->session->set_userdata('club_id', $row->id);
        }
    }
}
