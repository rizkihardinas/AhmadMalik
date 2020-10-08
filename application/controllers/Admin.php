<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->library(['encryption']);
		
	}
	
	public function index(){
		$data['contents'] = $this->load->view('main/dashboard',null, TRUE);
		$this->load->view('index',$data);
	}
    
}
 ?>