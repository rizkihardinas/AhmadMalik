<?php 
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_utama','model_utama');
		$this->load->helper('text');
		
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		// }

		// $this->load->library(['encryption']);
		
	}
	
	function index(){
		$data['contents'] = $this->load->view('main/dashboard',null, TRUE);
		$this->load->view('index',$data);
	}
	// function menu(){
	// 	$data['parent_menu'] = $this->model_utama->getAllData('menu');

	// 	$data['contents'] = $this->load->view('admin/menu/menu',$data, TRUE);
	// 	$this->load->view('admin/index',$data);
	// }
	// function access_level(){
	// 	$data['parent_menu'] = $this->model_utama->getAllDataWhere('parentmenu',array('status' => 1));
	// 	$data['department'] = $this->model_utama->getAllDataWhere('department',array('status' => 1));
	// 	$data['contents'] = $this->load->view('admin/menu/access_level',$data, TRUE);
	// 	$this->load->view('admin/index',$data);
	// }
	
    
}
 ?>