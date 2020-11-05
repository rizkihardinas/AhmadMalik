<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class User extends CI_Controller
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
		$data['judul'] = "Data User";
		$data['contents'] = $this->load->view('main/users/user',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){
		$data['judul'] = "Add User";
		$data['contents'] = $this->load->view('main/users/add_user',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit($id){
		$data['judul'] = "Edit User";
		$data['users'] = $this->db_model->getDetailDatWhere('users',array('id'=>$id));
		$data['contents'] = $this->load->view('main/users/edit_user',$data, TRUE);
		$this->load->view('index',$data);
	}
	public function rating(){
		$data['judul'] = "Rating from User";
		$data['contents'] = $this->load->view('main/users/rating',null, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){
		$name = $this->input->post('name');
		$phone  = $this->input->post('phone');
		$email  = $this->input->post('email');

        $data = array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email
		);
        $insert  = $this->db_model->setInsertData('users',$data);
		$this->session->set_flashdata('msg','Berhasil');
		$this->session->set_flashdata('response','success');
		
		redirect('user');
	}
	
	function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		
		$data = array(
			'id' => $id,
			'name' => $name,
			'phone' => $phone,
			'email' => $email
		);
       	$this->db_model->update('users',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('user');
	}

	function update_password(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		
		$data = array(
			'id' => $id,
			'password' => md5($password)
		);
       	$this->db_model->update('users',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('user');
	}

	function dt_user(){

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $merchants = $this->db_model->getAllDataTable('users');

          $data = array();

          foreach($merchants->result() as $r) {
            $button = '
            <div class="dropdown">
              <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'user/edit/'.$r->id.'">Edit</a>
                <a class="dropdown-item" id="btnHapusUser" data-id="'.$r->id.'">Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
                    $r->name,
                    $r->phone,
                    $r->email,
                    $r->dateCreated,
                    $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $merchants->num_rows(),
                 "recordsFiltered" => $merchants->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     function delete_user(){
        $id = $this->input->post('id');
        $query = $this->db_model->deleteData('users','id',$id);
        echo "Data Deleted";
      }
}
 ?>