<?php 
/**
 * 
 */
class Api extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->load->model('Api_model','api');
		$this->load->model('Database_model','api');
	}
	function getDataStore(){
		$min_price = $this->input->post('min_price');
		$max_price = $this->input->post('max_price');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');

		$data = array(
			'min_price' => $min_price,
			'max_price' => $max_price,
			'latitude' => $latitude,
			'longitude' => $longitude
		);
		$store = $this->api->getStore($data);
		echo json_encode($store);
	}
	function insertUlasan(){
		$idUser = $this->input->post('idUser');
		$idMerchant = $this->input->post('idMerchant');
		$rating = $this->input->post('rating');
		$rating = $this->input->post('rating');


	}
}
 ?>