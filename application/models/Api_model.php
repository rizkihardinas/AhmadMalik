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
		$data = $this->db->query("
			SELECT 
			merchants.*, 
			round(  ( 6371  * acos( least(1.0,cos( radians(".$latitude.") )* cos( radians(merchants.latitude) ) * cos( radians(merchants.longitude) - radians(".$longitude.") ) + sin( radians(".$latitude.") ) * sin( radians(merchants.latitude) ) ) )), 1) as jarak, IFNULL(SUM(rating.rating),0) as rating, COUNT(idUser) as reviewer
			FROM merchants LEFT JOIN rating ON merchants.id = rating.idMerchant 
			GROUP BY merchants.id HAVING jarak <= 50 ORDER BY distance");

		return $data->result_array();
	}
}
 ?>