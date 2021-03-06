<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Dashboard extends CI_Controller
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
		$data['jumlah_merchants']=$this->db->query('SELECT id FROM merchants')->num_rows();
		$data['jumlah_users']=$this->db->query('SELECT id FROM users')->num_rows();
		$data['jumlah_artikels']=$this->db->query('SELECT id FROM posts')->num_rows();

		$data['last_rating'] = $this->db_model->getQuery("SELECT rating.*, users.name as user, merchants.name as merchant FROM users INNER JOIN (rating INNER JOIN merchants ON rating.idMerchant=merchants.id) ON users.id=rating.idUser ORDER BY rating.id DESC LIMIT 10");

		$data['top_merchant'] = $this->db_model->getQuery("SELECT merchants.name, rating.idMerchant, SUM(rating.rating) as rating, SUM(rating.rating) as rate, COUNT(rating.id) as count, merchants.photo FROM rating INNER JOIN merchants ON rating.idMerchant=merchants.id GROUP BY rating.idMerchant");

		$data['judul'] = "Dashboard";
		$data['contents'] = $this->load->view('main/dashboard',$data, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){

		$data['judul'] = "Add Admin";
		$data['contents'] = $this->load->view('main/admin/add_admin',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit(){

		$data['judul'] = "Edit Admin";
		$data['contents'] = $this->load->view('main/admin/edit_admin',null, TRUE);
		$this->load->view('index',$data);
	}
	public function access(){

		$data['judul'] = "Access Admin";
		$data['contents'] = $this->load->view('main/admin/access_admin',null, TRUE);
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
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'customer/edit/'.$r->id.'" target="_blank">Edit</a>
                <a class="dropdown-item" id="btnHapusAdmin" data-id="'.$r->id.'">Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
                    $r->name,
                    $r->username,
                    $r->password,
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

     function clear_notif(){
        $query = $this->db_model->emptyTable('notifikasi');
        
		redirect('dashboard');
      }
    
}
 ?>