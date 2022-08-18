<?php

class Players_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getPlayers() {
		$query = $this->db->get('players');
		return $query->result_array();	
	}

	public function createRequestInClub($data) {
		if ($this->db->insert('player_requests', $data)) {
			$last_id = $this->db->insert_id();
			
			return $last_id;
		} else {
			return false;
		}
	}
}
