<?php 
/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['data'] = $data;
		$data['contents'] = $this->load->view('main/',$data, TRUE);
		$this->load->view('index',$data);
	}
}
 ?>