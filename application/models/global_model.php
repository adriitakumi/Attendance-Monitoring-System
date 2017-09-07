<?php

class global_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	public function insert_batch($table,$data)
	{
		$query = $this->db->insert_batch($table, $data);
		return $query;
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

	public function getMult($table, $set1, $value1, $set2, $value2){
		$mult = array( $set1 => $value1, 
					   $set2 => $value2 );

		$this->db->where($mult);
		$query = $this->db->get($table)->result();
		return $query;
	}

}
