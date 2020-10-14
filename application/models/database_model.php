<?php 
/**
* 
*/
class Database_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function Query($query){
		$query = $this->db->query($query);
		return $query->result_array();
	}
	
	function getAllData($table){
		return $this->db->get($table);
	}
	function getDetailData($table,$column,$id){
		$this->db->where($column,$id);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function getQuery($q){
		$query = $this->db->query($q);
		return $query->result_array();
	}
	function getDataLimit($table,$column,$limit){
		$this->db->order_by($column,'desc');
		$this->db->limit($limit);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	
	function getDataCari($table,$kolom,$query){
		$this->db->like($kolom,$query);
		$query = $this->db->get($table);
		return $query->result_array();
	}

	function setInsertData($table,$data){
		$this->db->insert($table,$data);
	}
	function setUpdateData($table,$id,$id_data,$data){
		$this->db->where($id, $id_data);
		$this->db->update($table,$data);
	}
	function deleteData($table,$kolom,$id){
		$this->db->where($kolom,$id);
		$this->db->delete($table);
	}
	function login($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('t_users');
		return $query->result_array();
	}
	

}
 ?>