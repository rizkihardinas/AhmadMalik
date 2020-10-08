<?php
class Constants_model extends CI_Model
 {
    function __construct()
	{
		parent::__construct();
	}
	function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('admin');
		return $query->result_array();
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}              
 ?>