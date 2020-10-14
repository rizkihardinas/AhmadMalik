<?php 
/**
 * 
 */
class Api_model extends CI_Controller
{
	
	function getStore($data){
		$latitude = $data['latitude'];
		$longitude = $data['longitude'];
		$min_price = $data['min_price'];
		$max_price = $data['max_price'];
		$data = $this->db->query("");

		return $data->result_array();
	}
}
 ?>