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

	public function getLike($table, $set, $value, $wildcard){
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => 'AMADOR, JON-GERARD'))->result();
		return $query;
	}

	public function getMin($table,  $set, $value, $wildcard, $colName){
		$this->db->select_min($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => 'AMADOR, JON-GERARD'))->result();
		return $query;
	}

	public function getMax($table,  $set, $value, $wildcard, $colName){
		$this->db->select_max($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => 'AMADOR, JON-GERARD'))->result();
		return $query;
	}

	public function getMult($table, $set1, $value1, $set2, $value2){
		$mult = array( $set1 => $value1, 
					   $set2 => $value2 );

		$this->db->where($mult);
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getRange($table, $value1, $value2){
		$this->db->where('Date >=', $value1);
		$this->db->where('Date <=', $value2);
		$query = $this->db->get_where($table, array('Person' => 'AMADOR, JON-GERARD'))->result();
		return $query;
	}

	public function please($date1, $date2){
		$begin = new DateTime( $date1 );
		$end = new DateTime( $date2 );
		$end = $end->modify( '+1 day' ); 

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($begin, $interval ,$end);
		$ugh = array();
		foreach($daterange as $date){
	    	$ugh[] = $date->format("Ymd");
		}
		return $ugh;
	}
	

}
