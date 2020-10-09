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
		$min_price = $this->input->post('min_price');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		
		$data = array(
			'name' => $name,
			'min_price' => $min_price,
			'max_price' => $max_price,
			'description' => $description,
			'latitude' => $latitude,
			'longitude' => $longitude
		);

		$this->db_model->setInsertData('merchants',$data);
	}
}
 ?>