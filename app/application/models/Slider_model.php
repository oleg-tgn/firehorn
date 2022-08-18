<?php

class Slider_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_slides() {
		$this->db->from('home_slider');
		$this->db->where('archived', 0);		
		$this->db->order_by("id", "DESC");
		$query = $this->db->get(); 

		$result = $query->result_array();
		return $result;	
	}

	function add_slide($data) {
		if ($this->db->insert('home_slider', $data)) {
			$last_id = $this->db->insert_id();
			
			return $last_id;
		} else {
			return false;
		}
	}

	function archive_slide($id) {
		$this->db->where('id', $id);
		$this->db->set('archived', TRUE);
		$this->db->update('home_slider');
		return true;
	}

	public function get_slide_by_id($id) {
		$this->db->from('home_slider');
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

	public function update_slide($id, $data) {
		$this->db->from('home_slider');
		$this->db->where('id', $id);			
		$query = $this->db->update('home_slider', $data); 

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
