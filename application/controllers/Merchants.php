<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Merchants extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('Database_model','db_model');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->library(['encryption']);
		
	}
	
	public function index(){
		$data['contents'] = $this->load->view('main/merchants/merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){
		$data['contents'] = $this->load->view('main/merchants/add_merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function rating(){
		$data['contents'] = $this->load->view('main/merchants/rating',null, TRUE);
		$this->load->view('index',$data);
	}
	public function gallery(){
		$data['contents'] = $this->load->view('main/merchants/gallery',null, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){

		
		$name = $this->input->post('name');
		$address  = $this->input->post('address');
		$min_price = $this->input->post('min_price');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latLng = $this->input->post('latitude');

		$latLng = str_replace('LngLat(', '', $latLng);
		$latLng = str_replace(')', '', $latLng);
		$dataLatLng = explode(',', $latLng);
		$latitude = $dataLatLng[0];
		$longitude = $dataLatLng[1];
		
		$data = array(
			'name' => $name,
			'min_price' => $min_price,
			'max_price' => $max_price,
			'description' => $description,
			'latitude' => $latitude,
			'longitude' => $longitude
		);

		$insert  = $this->db_model->setInsertData('merchants',$data);
		if ($insert) {
			echo 1;
		}else{
			echo 0;
		}
	}
}
 ?>