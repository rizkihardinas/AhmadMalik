<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('Constants_model','constants_model');

		if($this->session->userdata('status') != ""){
			redirect(base_url("admin"));
		}

		$this->load->library(['encryption']);
		
	}
	
	public function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->constants_model->cek_login("admin",$where)->num_rows();
		if($cek > 0){

 			$get = $this->constants_model->cek_login("admin",$where);
			foreach($get->result() as $r) {
		      	
				$data_session = array(
				'id' => $r->id,
				'name' => $r->name,
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
		    }
			echo 1;
 
		}else{
			echo 0;
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
 ?>