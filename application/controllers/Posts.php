<?php 
/**
 * 
 */
class Posts extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$data['judul'] = "Article";
		$data['contents'] = $this->load->view('main/article/article',null, TRUE);
		$this->load->view('index',$data);
	}
	public function add(){
		$data['judul'] = "Add Article";
		$data['contents'] = $this->load->view('main/article/add_article',null, TRUE);
		$this->load->view('index',$data);
	}
	public function edit(){
		$data['judul'] = "Edit Article";
		$data['contents'] = $this->load->view('main/article/edit_article',null, TRUE);
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
}
 ?>