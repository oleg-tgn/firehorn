<?php

class Register_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function add_user($data) {
		if ($this->db->insert('users', $data)) {
			$last_id = $this->db->insert_id();
			
			return $last_id;
		} else {
			return false;
		}
	}

	function add_club($data) {
		if ($this->db->insert('clubs', $data)) {
			$club_id = $this->db->insert_id();

			$query = $this->db->get('users');
			$this->db->where('id', $data['user_id']);
			$this->db->update('users', array(
				'club_id' => $club_id
			));
			return true;
		}
	}

	function add_player($data) {
		if ($this->db->insert('players', $data)) {
			$club_id = $this->db->insert_id();

			$query = $this->db->get('users');
			$this->db->where('id', $data['user_id']);
			$this->db->update('users', array(
				'player_id' => $club_id
			));
			return true;
		}
	}

	function verify_email($key) {
		$this->db->where('verification_key', $key);
		$this->db->where('is_email_verified', 0);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			$data = array(
				'is_email_verified' => 1
			);
			$this->db->where('verification_key', $key);
			$this->db->update('users', $data);
			return true;
		} else {
			return false;
		}
	}
}
