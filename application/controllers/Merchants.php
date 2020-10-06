<?php 
/**
 * 
 */
class Merchants extends CI_Controller
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
		$data['contents'] = $this->load->view('main/merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	}
	function insertOutlets(){
		$id = $this->input->post('id');
		$name = ucwords($this->input->post('name'));
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$reciept_header = $this->input->post('reciept_header');
		$receipt_footer = $this->input->post('receipt_footer');
		$description = $this->input->post('description');
		
		if (isset($id) == 0) {
			$check = $this->Constants_model->getNumRowsWhere('outlets',array('name' => $name));
		}else{
			$check = $this->Constants_model->getNumRowsWhere('outlets',array('id' => $id));
		}
		if ($check == 1) {
			$data_update = array(
				'name' => $name,
				'address' => $address,
				'phone' => $phone,
				'reciept_header' => $reciept_header,
				'receipt_footer' => $receipt_footer,
				'last_update' => $this->last_update,
				'user_last_update' => $this->idUser
			);
			$id_menu = $this->Constants_model->doUpdate('outlets',$data_update,array('id' =>$id));
			$this->response(200,"Data berhasil diupdate",0);
		}else{
			$data = array(
				'name' => $name,
				'address' => $address,
				'phone' => $phone,
				'reciept_header' => $reciept_header,
				'receipt_footer' => $receipt_footer,
				'date_created' => $this->created_date,
				'user_id_created' => $this->idUser,
				'last_update' => $this->last_update,
				'user_last_update' => $this->idUser
			);
			$idp = $this->Constants_model->doinsertGetId('outlets',$data);
			$this->response(200,"Data berhasil dimasukan",0);
		}
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