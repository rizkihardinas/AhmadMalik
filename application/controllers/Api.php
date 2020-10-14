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
	function getUlasan(){
		$id = $this->input->post('id');
		$data = $this->api->getUlasan($id);
		echo json_encode($data);
	}
	function insertUlasan(){
		$idUser = $this->input->post('idUser');
		$idMerchant = $this->input->post('idMerchant');
		$rating = $this->input->post('rating');
		$review = $this->input->post('review');

		$check = $this->api->countDetailData("rating",$data);
		if ($check > 0) {
			$array = array('code' => 400);
			echo json_encode($array);
		}else{
			$dataInsert = array(
				'idUser' =>$idUser,
				'idMerchant' =>$idMerchant,
				'rating' =>$rating,
				'review' =>$review
			);
			$this->api->setInsert('rating',$dataInsert);
			$array = array('code' => 200);
			echo json_encode($array);
		}
	}
}
 ?>