<?php 
/**
* 
*/
class Database_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function Query($query){
		$query = $this->db->query($query);
		return $query->result_array();
	}
	
	function getAllData($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function getAllDataTable($table){
		return $this->db->get($table);
	}
	function getDetailDatWhere($table,$data){
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query->row_array();
	}
	function getDetailData($table,$column,$id){
		$this->db->where($column,$id);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function countDetailData($table,$data){
		$this->db->where($data);
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	function getQuery($q){
		$query = $this->db->query($q);
		return $query->result_array();
	}
	function getDataLimit($table,$column,$limit){
		$this->db->order_by($column,'desc');
		$this->db->limit($limit);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	
	function getDataCari($table,$kolom,$query){
		$this->db->like($kolom,$query);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function update($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function setInsertData($table,$data){
		$this->db->insert($table,$data);
	}
	function setInsertDataGetId($table,$data){
		$this->db->insert($table, $data); 
		$last_id = $this->db->insert_id();

		return $last_id;
	}
	function setUpdateData($table,$id,$id_data,$data){
		$this->db->where($id, $id_data);
		$this->db->update($table,$data);
	}
	function deleteData($table,$kolom,$id){
		$this->db->where($kolom,$id);
		$this->db->delete($table);
	}
	function login($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('t_users');
		return $query->result_array();
	}
	
	function getStore($data){
		$latitude = $data['latitude'];
		$longitude = $data['longitude'];
		$min_price = $data['min_price'];
		$max_price = $data['max_price'];
		$data = $this->db->query("
			SELECT 
			merchants.*, 
			round(  ( 6371  * acos( least(1.0,cos( radians(".$latitude.") )* cos( radians(merchants.latitude) ) * cos( radians(merchants.longitude) - radians(".$longitude.") ) + sin( radians(".$latitude.") ) * sin( radians(merchants.latitude) ) ) )), 1) as jarak, IFNULL(SUM(rating.rating),0) as rating, COUNT(idUser) as reviewer
			FROM merchants LEFT JOIN rating ON merchants.id = rating.idMerchant WHERE merchants.min_price >= ".$min_price." OR merchants.max_price <= ".$max_price."
			GROUP BY merchants.id HAVING jarak <= 50 ORDER BY jarak");

		return $data->result_array();
	}
	function getUlasan($idMerchant){

		$this->db->select('users.name,rating.*');
		$this->db->from('users');
		$this->db->join('rating','users.id = rating.idUser');
		$this->db->where('rating.idMerchant',$idMerchant);
		$query = $this->db->get();
		return $query->result_array();
	}
	function getAllRating(){

		$this->db->select('users.name as user, merchants.name as merchant,rating.*');
		$this->db->from('users');
		$this->db->join('rating','users.id = rating.idUser');
		$this->db->join('merchants','rating.idMerchant = merchants.id');
		return $this->db->get();
	}
	function getPost(){
		$this->db->select('posts.*,admin.name as user,IFNULL(SUM(ratingpost.rating),0) as rating, COUNT(ratingpost.idUser) as reviewer');
		$this->db->from('posts');
		$this->db->join('admin','posts.idUser = admin.id');
		$this->db->join('ratingpost','posts.id = ratingpost.idPost');
		
		$this->db->group_by('posts.id');
		$this->db->order_by('posts.id','DESC');
		return $this->db->get()->result_array();
	}

	function emptyTable($table){
		$this->db->empty_table($table);
	}
	function getBannerStore(){
		$data = $this->db->query("
			SELECT 
			merchants.*,IFNULL(SUM(rating.rating),0) as rating, COUNT(idUser) as reviewer
			FROM merchants LEFT JOIN rating ON merchants.id = rating.idMerchant
			GROUP BY merchants.id ORDER BY rating DESC LIMIT 4 ");
		return $data->result_array();
	}
	function getUlasanPost($idPost){

		$this->db->select('users.name,ratingpost.*');
		$this->db->from('users');
		$this->db->join('ratingpost','users.id = ratingpost.idUser');
		$this->db->where('ratingpost.idPost',$idPost);
		$query = $this->db->get();
		return $query->result_array();
	}
}
 ?>