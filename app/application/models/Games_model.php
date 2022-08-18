<?php

class Games_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_games() {
		$this->db->from('games');
		$this->db->where('archived', NULL);
		$this->db->order_by("date", "DESC");
		$query = $this->db->get(); 

		$result = $query->result_array();

		// foreach ($result as $key => &$value) {
		// 	$value['date'] = $this->set_russian_date($value['date']);
		// }
		unset($value);
		return $result;	
	}

	function add_game($data) {
		if ($this->db->insert('games', $data)) {
			$last_id = $this->db->insert_id();
			
			return $last_id;
		} else {
			return false;
		}
	}

	function archive_game($id) {
		$this->db->where('id', $id);
		$this->db->set('archived', TRUE);
		$this->db->update('games');
		return true;
	}

	public function get_game_by_id($id) {
		$this->db->from('games');
		$this->db->where('id', $id);		
		$query = $this->db->get(); 		
		$result = $query->result_array();
		if ($result) {	
			//$result[0]['date'] = $this->set_russian_date($result[0]['date']);		
			return $result[0];			
		} else {
			return NULL;
		}		
	}

	public function get_game_by_alias($alias) {
		$this->db->from('games');
		$this->db->where('alias', $alias);		
		$query = $this->db->get(); 

		$result = $query->result_array();
		if ($result) {			
			//$result[0]['date'] = $this->set_russian_date($result[0]['date']);
			return $result[0];			
		} else {
			return NULL;
		}
	}

	public function update_game($id, $data) {
		$this->db->from('games');
		$this->db->where('id', $id);			
		$query = $this->db->update('games', $data); 

		return $query;	
	}

	public function set_russian_date($value) {
		$arr = [ 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь' ];
		$timestamp = strtotime($value);
		$day = date('d', $timestamp);
		$month = $arr[date('n', $timestamp) - 1];
		$year = date('Y', $timestamp);
		$value =  $day.' '.$month.' '.$year;
		return $value;
	}
}
