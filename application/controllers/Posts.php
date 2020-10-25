<?php 
/**
 * 
 */
class Posts extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Database_model','db_model');
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
	public function edit($id){
		$data['judul'] = "Edit Article";
		$data['posts'] = $this->db_model->getDetailDatWhere('posts',array('id'=>$id));
		$data['contents'] = $this->load->view('main/article/edit_article',$data, TRUE);
		$this->load->view('index',$data);
	}
	function insert(){

		
		$title = $this->input->post('title');
		$description = $this->input->post('description');

		
		$config['upload_path']          = './uploads/posts/';
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
					'title' => $title,
					'foto' => $file['file_name'],
					'description' => $description,
					'idUser' => $this->session->userdata('id')
				);
                $insert  = $this->db_model->setInsertData('posts',$data);
				$this->session->set_flashdata('msg','Berhasil');
				$this->session->set_flashdata('response','success');
        }
		
		redirect('posts');
	}
	function update(){
		$title = $this->input->post('title');
		$id = $this->input->post('id');
		$description = $this->input->post('description');
		
        if ($this->input->post('customFile')) {
        	$config['upload_path']          = './uploads/posts';
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
	                $data['foto'] = $file['file_name'];
	        }
        }
        $data = array(
			'title' => $title,
			'description' => $description,
			'idUser' => $this->session->userdata('id')
		);
       	$this->db_model->update('posts',$data,array('id'=>$id));
		$this->session->set_flashdata('msg','Update Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('posts');
	}
	function delete($id){
		$this->db_model->deleteData('posts','id',$id);
		$this->session->set_flashdata('msg','Hapus Berhasil!');
		$this->session->set_flashdata('response','success');
		redirect('posts');
	}
	function dt_posts(){

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $posts = $this->db_model->getAllDataTable('posts');

          $data = array();

          foreach($posts->result() as $r) {
            $button = '
            <div class="dropdown">
              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" href="'. base_url().'posts/edit/'.$r->id.'" target="_blank">Edit</a>
                <a class="dropdown-item" href="'. base_url().'posts/delete/'.$r->id.'" >Hapus</a>
              </div>
            </div>
            ';
          $data[] = array(
          			$r->title,
                    substr($r->description, 0,100)."...",
                    $button
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $posts->num_rows(),
                 "recordsFiltered" => $posts->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
}
 ?>