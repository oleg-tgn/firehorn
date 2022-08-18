<?php

class Clubs_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getClubs() {
		$query = $this->db->get('clubs');
		return $query->result_array();	
	}

	public function getRequests($club_id) {
		return $this->db->select('*')
						->from('player_requests as pr')
						->where('pr.club_id', $club_id)
						->join('players as p', 'pr.player_id = p.id', 'LEFT')
						->get()
						->result_array();
	}
}
