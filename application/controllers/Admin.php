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
		$this->load->model('Database_model','db_model');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->library(['encryption']);
		
	}
	
	public function index(){

		$data['judul'] = "User Admin";
		$data['contents'] = $this->load->view('main/admin/admin',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){

		$data['judul'] = "Add Admin";
		$data['contents'] = $this->load->view('main/admin/add_admin',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit($id){
		$data['judul'] = "Edit Admin";
		$data['admins'] = $this->db_model->getDetailDatWhere('admin',array('id'=>$id));
		$data['contents'] = $this->load->view('main/admin/edit_admin',$data, TRUE);
		$this->load->view('index',$data);
	}
	public function database(){

		$data['judul'] = "Database";
		$data['contents'] = $this->load->view('main/admin/access_admin',null, TRUE);
		$this->load->view('index',$data);
	}
	public function profile(){

		$data['judul'] = "Profile Admin";
		$data['contents'] = $this->load->view('main/admin/profile',null, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){
		$name = $this->input->post('name');
		$username  = $this->input->post('username');
		$password = $this->input->post('password');

        $data = array(
			'name' => $name,
			'username' => $username,
			'password' => md5($password)
		);
        $insert  = $this->db_model->setInsertData('admin',$data);
		$this->session->set_flashdata('msg','Berhasil');
		$this->session->set_flashdata('response','success');
		
		redirect('admin');
	}

	function update(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		
		$data = array(
			'id' => $id,
			'name' => $name,
			'username' => $username
		);
       	$this->db_model->update('admin',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('admin');
	}

	function update_password(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		
		$data = array(
			'id' => $id,
			'password' => md5($password)
		);
       	$this->db_model->update('admin',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('admin');
	}

	function dt_admin(){

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $admin = $this->db_model->getAllDataTable('admin');

          $data = array();

          foreach($admin->result() as $r) {
            $button = '
            <div class="dropdown">
              <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'admin/edit/'.$r->id.'" target="_blank">Edit</a>
                <a class="dropdown-item" id="btnHapusAdmin" data-id="'.$r->id.'">Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
                    $r->name,
                    $r->username,
                    $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $admin->num_rows(),
                 "recordsFiltered" => $admin->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     function delete_admin(){
        $id = $this->input->post('id');
        $query = $this->db_model->deleteData('admin','id',$id);
        echo "Data Deleted";
      }

     function clear_merchants(){
        $query = $this->db_model->emptyTable('merchants');
		redirect('merchants');
      }
     function clear_posts(){
        $query = $this->db_model->emptyTable('posts');
		redirect('posts');
      }
     function clear_users(){
        $query = $this->db_model->emptyTable('users');
		redirect('user');
      }

    function backup_db(){
        // Load the DB utility class
	    $this->load->dbutil();

	    $aturan =  $arrayName = array(
	    	'format' => 'zip',
	    	'filename' => 'my_db_vape.sql'
	    );
	    $backup = $this->dbutil->backup($aturan);

	    $nama_database = 'backup-on-'.date("Y-m-d-H-i-s").'.zip';
	    $simpan = '/backup'.$nama_database;

	    $this->load->helper('file');
	    write_file($simpan, $backup);

	    $this->load->helper('download');
	    force_download($nama_database, $backup);
      }
}
 ?>