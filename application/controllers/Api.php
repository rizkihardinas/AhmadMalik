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

		$check = $this->api->countDetailData("rating",array('idUser' =>$idUser,'idMerchant' => $idMerchant));
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
			$this->api->setInsertData('rating',$dataInsert);
			$array = array('code' => 200);
			echo json_encode($array);
		}
	}
	function checkUlasan(){
		$idUser = $this->input->post('idUser');
		$idMerchant = $this->input->post('idMerchant');
		$check = $this->api->countDetailData("rating",array('idUser' =>$idUser,'idMerchant' => $idMerchant));
		if ($check > 0) {
			$array = array('code' => 200);
		}else{
			$array = array('code' => 400);	
		}
		echo json_encode($array);
	}
	function checkEmail(){
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$name = $this->input->post('name');

		$check = $this->api->countDetailData("users",array('email' => $email));
		if ($phone == null) {
			$array = array('code' => 400,'message' => 'No Telp tidak boleh kosong');
		}else if ($email == '') {
			$array = array('code' => 400,'message' => 'Email tidak boleh kosong');
		}else{
			if ($check > 0) {
				$dataUser = $this->api->getDetailDatWhere("users",array('email' => $email));
				$array = array('code' => 200,'data'=> $dataUser);
			}else{
				$data = array(
					'phone' => $phone,
					'email' => $email,
					'name' => $name
				);
				$id = $this->api->setInsertDataGetId('users',$data);
				$data['id'] = $id;
				$array = array('code' => 200,'data'=> $data);
			}
		}
		
		
		echo json_encode($array);
	}
	function checkPhone(){
		$phone = $this->input->post('phone');

		$check = $this->api->countDetailData("users",array('phone' => $phone));
		if ($phone == null) {
			$array = array('code' => 400,'message' => 'No Telp tidak boleh kosong');
		}else{
			if ($check > 0) {
				$dataUser = $this->api->getDetailDatWhere("users",array('phone' => $phone));
				$array = array('code' => 200,'data'=> $dataUser);
			}else{
				$array = array('code' => 301,'message' => 'Data tidak ditemukan');
				
			}
		}
		
		
		echo json_encode($array);
	}
	function daftar(){
		$phone = $this->input->post('phone');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		if ($phone == null) {
			$array = array('code' => 400,'message' => 'No Telp tidak boleh kosong');
		}else if ($email == '') {
			$array = array('code' => 400,'message' => 'Email tidak boleh kosong');
		}else{
			$data = array(
				'phone' => $phone,
				'name' => $name,
				'email' =>$email
			);
			$id = $this->api->setInsertDataGetId('users',$data);
			$data['id'] = $id;
			$array = array('code' => 200,'message'=> 'Daftar berhasil','data' => $data);
			
		}
		echo json_encode($array);
	}
	function getPost(){
		$post = $this->api->getPost();
		echo json_encode($post);
	}
	function getMinPriceStore(){
		$post = $this->api->getMinPriceStore();
		echo json_encode($post);
	}
	function getMaxPriceStore(){
		$post = $this->api->getMaxPriceStore();
		echo json_encode($post);
	}
	function updateProfile(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');

		if ($id == 0 || $id == '') {
			$array = array('code' => 400,'message'=> 'Gagal');
		}else{
			$data = array(
				'name' => $name,
				'phone' => $phone,
				'email' => $email
			);
			$this->api->update("users",$data,array('id' => $id));
			$array = array('code' => 200,'message'=> 'Berhasil');
		}
		echo json_encode($array);
	}
}
 ?>