<?php 
/**
 * 
 */
class Merchants_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getDataMerchants(){
		$q = $this->db->get('merchants');
		return $q->result_array();
	}

}
 ?>