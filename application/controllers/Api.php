<?php 
/**
 * 
 */
class Api extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Api_model','api');
	}
	function getDatStore(){
		$min_price = $this->input->post('min_price');
		$max_price = $this->input->post('max_price');
		$latitide = $this->input->post('latitide');
		$longitude = $this->input->post('longitude');


		$this->dbm->
	}
}
 ?>