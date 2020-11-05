<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Merchants extends CI_Controller
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
		$data['judul'] = "Data Merchants";
		$data['contents'] = $this->load->view('main/merchants/merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){
		$data['judul'] = "Add Merchants";
		$data['contents'] = $this->load->view('main/merchants/add_merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit($id){
		$data['judul'] = "Edit Merchants";
		$data['merchant'] = $this->db_model->getDetailDatWhere('merchants',array('id'=>$id));
		$data['contents'] = $this->load->view('main/merchants/edit_merchants',$data, TRUE);
		$this->load->view('index',$data);
	}
	public function rating(){
		$data['judul'] = "Rating Merchants";
		$data['contents'] = $this->load->view('main/merchants/rating',null, TRUE);
		$this->load->view('index',$data);
	}
	public function gallery(){
		$data['judul'] = "Gallery Merchants";
		$data['merchants'] = $this->db_model->getAllData('merchants'); 
		$data['contents'] = $this->load->view('main/merchants/gallery',$data, TRUE);
		$this->load->view('index',$data);
	}
	public function profile($id){
		$data['judul'] = "Profile Merchants";

		$data['all_rating'] = $this->db_model->getQuery("SELECT rating.*, users.name as user, merchants.name as merchant FROM users INNER JOIN (rating INNER JOIN merchants ON rating.idMerchant=merchants.id) ON users.id=rating.idUser WHERE rating.idMerchant = '".$id."' ORDER BY rating.id");
		$data['merchant'] = $this->db_model->getQuery("SELECT merchants.*, SUM(rating.rating) as rate, COUNT(rating.id) as count FROM merchants INNER JOIN rating ON merchants.id=rating.idMerchant WHERE merchants.id='".$id."'");
		$data['contents'] = $this->load->view('main/merchants/profile_merchants',$data, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){

		
		$name = $this->input->post('name');
		$min_price = $this->input->post('min_price');
		$address = $this->input->post('address');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('customFile'))
        {
                $this->session->set_flashdata('msg',$this->upload->display_errors());
				$this->session->set_flashdata('response','warning');
        }
        else
        {
                $file = $this->upload->data();
                $data = array(
					'name' => $name,
					'min_price' => $min_price,
					'max_price' => $max_price,
					'photo' => $file['file_name'],
					'description' => $description,
					'address' => $address,
					'latitude' => $latitude,
					'longitude' => $longitude
				);
                $insert  = $this->db_model->setInsertData('merchants',$data);
				$this->session->set_flashdata('msg','Berhasil');
				$this->session->set_flashdata('response','success');
        }
		
		redirect('merchants');
	}
	function update(){
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$min_price = $this->input->post('min_price');
		$address = $this->input->post('address');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		
		
		
        if ($this->input->post('customFile')) {
        	$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        // $config['max_size']             = 100;
	        // $config['max_width']            = 1024;
	        // $config['max_height']           = 768;
	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('customFile'))
	        {
	                $this->session->set_flashdata('msg',$this->upload->display_errors());
					$this->session->set_flashdata('response','warning');
	        }
	        else
	        {
	                $file = $this->upload->data();
	                $data['photo'] = $file['file_name'];
	        }
        }
        $data = array(
			'name' => $name,
			'min_price' => $min_price,
			'max_price' => $max_price,
			'description' => $description,
			'address' => $address,
			'latitude' => $latitude,
			'longitude' => $longitude
		);
       	$this->db_model->update('merchants',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('merchants');
	}
	function dt_merchants(){

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $merchants = $this->db_model->getAllDataTable('merchants');

          $data = array();

          foreach($merchants->result() as $r) {
          	$photo = '<a href="'. base_url().'merchants/profile/'.$r->id.'"><img src="'.base_url().'uploads/'.$r->photo.'" class="img-circle img-size-32 mr-2"></a>';
            $lokasi = $r->address.' <br> '.$r->latitude.' - '.$r->longitude;

            $button = '
            <div class="dropdown">
              <a class="btn btn-sm btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'merchants/profile/'.$r->id.'" >Cek Detail</a>
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'merchants/edit/'.$r->id.'" >Edit</a>
                <a class="dropdown-item" id="btnHapusMerchants" data-id="'.$r->id.'">Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
                    $photo,
                    $r->name,
                    $r->min_price,
                    $r->max_price,
                    $r->description,
                    $lokasi,
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
     function dt_rating(){

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $rating = $this->db_model->getAllRating();

          $data = array();

          foreach($rating->result() as $r) {
          	if ($r->rating == 1) {
          		$bintang = '<i class="fas fa-star text-warning"></i>';
          	}elseif ($r->rating == 2	) {
          		$bintang = '<i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>';
          	}elseif ($r->rating == 3	) {
          		$bintang = '<i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>';
          	}elseif ($r->rating == 4	) {
          		$bintang = '<i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>';
          	}elseif ($r->rating == 5	) {
          		$bintang = '<i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>';
          	}else{
          		$bintang = 'Error';
          	}
                        
            
          $data[] = array(
                    $r->user,
                    $r->merchant,
                    $bintang,
                    $r->review,
                    $r->dateCreated
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $rating->num_rows(),
                 "recordsFiltered" => $rating->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     function delete_merchants(){
        $id = $this->input->post('id');
        $query = $this->db_model->deleteData('merchants','id',$id);
        echo "Data Deleted";
      }
}
 ?>