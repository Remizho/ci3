<?php 

class Action extends CI_Model{
	//function ambil_data(){
	//	return $this->db->get('biodata');
	//}

	public function get_query_manual_array(){
		$query = $this->db->query('select * from biodata');
		return $query;
	}

	//public function get_query_builder_array(){
	//	$query = $this->db->get('biodata');
	//	return $query->result_array();
	//}	
}