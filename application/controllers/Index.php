<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->library(['encryption']);
	}
	 
	public function index(){		
		$data['data'] = $data;
		$data['contents'] = $this->load->view('main/',$data, TRUE);
		$this->load->view('index',$data);
	}
	 
}