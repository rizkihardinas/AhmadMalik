<?php 
/**
 * 
 */
class Model_utama extends CI_Model
{
	
	function getAllData($table){
		return $this->db->get($table)->result_array();
	}
	function getAllDataWhere($table,$array){
		return $this->db->get($table,$array)->result_array();
	}
	function getRowData($table){
		return $this->db->get($table)->num_rows();
	}
	function getRowDataWhere($table,$array){
		return $this->db->get($table,$array)->num_rows();
	}
}
 ?>