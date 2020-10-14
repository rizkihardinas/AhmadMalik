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
		$data['contents'] = $this->load->view('main/merchants/merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){
		$data['contents'] = $this->load->view('main/merchants/add_merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit(){
		$data['contents'] = $this->load->view('main/merchants/edit_merchants',null, TRUE);
		$this->load->view('index',$data);
	}
	public function rating(){
		$data['contents'] = $this->load->view('main/merchants/rating',null, TRUE);
		$this->load->view('index',$data);
	}
	public function gallery(){
		$data['contents'] = $this->load->view('main/merchants/gallery',null, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){

		
		$name = $this->input->post('name');
		$address  = $this->input->post('address');
		$min_price = $this->input->post('min_price');
		$address = $this->input->post('address');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latLng = $this->input->post('latitude');

		$latLng = str_replace('LngLat(', '', $latLng);
		$latLng = str_replace(')', '', $latLng);
		$dataLatLng = explode(',', $latLng);
		$latitude = $dataLatLng[0];
		$longitude = $dataLatLng[1];
		
		
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
		$address  = $this->input->post('address');
		$min_price = $this->input->post('min_price');
		$address = $this->input->post('address');
		$max_price = $this->input->post('max_price');
		$description = $this->input->post('description');
		$latLng = $this->input->post('latitude');

		$latLng = str_replace('LngLat(', '', $latLng);
		$latLng = str_replace(')', '', $latLng);
		$dataLatLng = explode(',', $latLng);
		$latitude = $dataLatLng[0];
		$longitude = $dataLatLng[1];
		
		
		
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


          $merchants = $this->db_model->getAllData('merchants');

          $data = array();

          foreach($merchants->result() as $r) {
            $button = '
            <div class="dropdown">
              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" no_faktur="'.$r->id.'" href="'. base_url().'customer/edit/'.$r->id.'" target="_blank">Edit</a>
                <a class="dropdown-item" id="btnHapusMerchants" data-id="'.$r->id.'">Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
                    $r->name,
                    $r->min_price,
                    $r->max_price,
                    $r->description,
                    $r->latitude,
                    $r->longitude,
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
     function delete_merchants(){
        $id = $this->input->post('id');
        $query = $this->db_model->deleteData('merchants','id',$id);
        echo "Data Deleted";
      }
}
 ?>