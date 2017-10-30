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

	public function getWhereIn($table, $colName, $data)
	{
		$this->db->where_in($colName, $data);
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function generateReport($table, $set, $value, $wildcard, $colName, $data)
	{	
		$this->db->like($set, $value, $wildcard);  //SELECT * FROM 'csv' WHERE 'Date' LIKE '2017-08-02%'
		$this->db->where_in($colName, $data);  //SLECT * FROM 'csv' WHERE 'encoded_id' IN ('747','743')
		$query = $this->db->get($table)->result();
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

	public function selectLike($table, $set1, $value1, $set2, $value2,$encoded_id, $search){
		$this->db->select($search);
		$this->db->like($set1, $value1, 'after');
		$this->db->like($set2, $value2, 'both');
		$query = $this->db->get_where($table, array('encoded_id' => $encoded_id))->result();
		return $query;
	}

	public function selectLikeOut($table, $set, $value, $encoded_id, $search){
		$this->db->select($search);
		$this->db->where($set, $value);
		$query = $this->db->get_where($table, array('encoded_id' => $encoded_id))->result();
		return $query;
	}

	public function getLike($table, $set, $value, $wildcard, $encoded_id){
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('encoded_id' => $encoded_id))->result();
		return $query;
	}

	public function getMin($table,  $set, $value, $wildcard, $colName, $encoded_id){
		$this->db->select_min($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('encoded_id' => $encoded_id))->result();
		return $query;
	}

	public function getRangeMin($table, $set, $value, $wildcard, $colName, $where, $encoded_id){
		$this->db->select_min($colName);
		$this->db->like($set, $value, $wildcard);
		$this->db->where_in($where, $encoded_id);
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function getMax($table,  $set, $value, $wildcard, $colName, $encoded_id){
		$this->db->select_max($colName);
		$this->db->like($set, $value, $wildcard);
		$query = $this->db->get_where($table, array('encoded_id' => $encoded_id))->result();
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

	public function count($table, $set=null, $value=null, $set2=null, $value2=null, $set3=null, $value3=null)
	{
		if($set != null && $value != null){
			$this->db->where($set, $value);
		}
		if($set2 != null && $value2 != null){
			$this->db->where($set2, $value2);
		}
		if($set3 != null && $value3 != null){
			$this->db->where($set3, $value3);
		}
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	public function update($table, $data){	
		$this->db->where('encoded_id', $data['set']);
		unset($data['set']);
		$this->db->set($data);
		$query = $this->db->update($table);
		return $query;
	}

	public function updateAll($table, $data, $id){	
		$this->db->where('encoded_id', $id);
		//unset($data['set']);
		$this->db->set($data);
		$query = $this->db->update($table);
		return $query;
	}

	public function holiday($date){
		$this->db->like('date', $date, 'before');
		$res = $this->db->get('holidays');
		$countRes = $res->num_rows();

		if($countRes>0){
			return 1;
		}
		else{
			return 2;
		}
	}
	

}
