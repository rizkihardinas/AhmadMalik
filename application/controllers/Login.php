<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('JobHistory','JobHistory');
	}
	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->JobHistory->cek_login("employee",$where)->num_rows();
		if($cek > 0){

 			$get = $this->JobHistory->cek_login("employee",$where);
			foreach($get->result() as $r) {
		      	
				$data_session = array(
				'id' => $r->id,
				'name' => $r->name,
				'username' => $username,
				'status' => "login"
				);
		    }

			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/index"));
 
		}else{
			echo $where;
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
 ?>