<?php

class global_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	public function getRecords($table){
		$query= $this->db->get($table);
		return $query;
	}

	public function getRow($table, $set, $value){
	$this->db->where($set, $value);
	$query = $this->db->get($table)->result();
	return $query;
	}
}

?>