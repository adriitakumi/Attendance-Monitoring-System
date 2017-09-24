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

	public function getRecords($table, $order_by=null, $set=null)
	{
		if($order_by != null && $set != null)
		{
		   $this->db->order_by($set, $order_by);
		}
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getRow($table, $set, $value){
		$this->db->where($set, $value);
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getLike($table, $set, $value, $wildcard, $person){
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => $person))->result();
		return $query;
	}

	public function getMin($table,  $set, $value, $wildcard, $colName, $person){
		$this->db->select_min($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => $person))->result();
		return $query;
	}

	public function getMax($table,  $set, $value, $wildcard, $colName, $person){
		$this->db->select_max($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('Person' => $person))->result();
		return $query;
	}

	public function getMult($table, $set1, $value1, $set2, $value2){
		$mult = array( $set1 => $value1, 
					   $set2 => $value2 );

		$this->db->where($mult);
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getRange($date1, $date2){
		$begin = new DateTime( $date1 );
		$end = new DateTime( $date2 );
		$end = $end->modify( '+1 day' ); 

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($begin, $interval ,$end);
		$data = array();
		foreach($daterange as $date){
	    	$data[] = $date->format("Ymd");
		}
		return $data;
	}
	

}
