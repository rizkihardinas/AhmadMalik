<?php 
/**
 * 
 */
class JobHistory extends CI_Model
{
	public $nama = "";
	function __construct()
	{
		parent::__construct();
	}
	function setNama($nama){
		$this->nama = $nama;
	}
	function getNama(){
		return $this->nama;
	}

	function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('employee');
		return $query->result_array();
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}
 ?>