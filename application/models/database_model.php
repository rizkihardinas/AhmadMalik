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
	function getMaxIdOrder(){
		$query = $this->db->query('SELECT MAX(id_order) as kode FROM t_order');
		return $query->result_array();
	}
	function getMaxIdOrderItem(){
		$query = $this->db->query('SELECT MAX(id_order_item) as kode FROM t_order_item');
		return $query->result_array();
	}
	function getMaxRMA(){
		$query = $this->db->query('SELECT MAX(rma_number) as kode FROM t_order_item');
		return $query->result_array();
	}
	function getAllData($table){
		$query = $this->db->get($table);
		return $query->result_array();
	}
	function getDetailData($table,$column,$id){
		$this->db->where($column,$id);
		$query = $this->db->get($table);
		return $query->result_array();
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
	function get($id) {
	  	$results = $this->db->get_where('t_produk', array('id_produk' => $id))->result();
	  	$result = $results[0];
	   
	  return $result;
	 }
	function getStock($id) {
	  	$results = $this->db->get_where('v_stock', array('id_stock' => $id))->result();
	  	$result = $results[0];
	   
	  return $result;
	 }
	function getKategori($anak,$induk){
		$this->db->where('kode_kategori',$anak);
		$this->db->where('kategori_induk',$induk);
		$query = $this->db->get('v_produk');
		return $query->result_array();
	}
	function getIdOrder($id) {
	  	$results = $this->db->get_where('v_order', array('id_order' => $id))->result();
	  	$result = $results[0];
	   
	  return $result;
	 }
	function getVadTelp($id,$field){
		$this->db->where('id_order',$id);
		$this->db->where('telp',$field);
		$query = $this->db->get('v_order');
		return $query->result_array();
	}
	function getDataCari($table,$kolom,$query){
		$this->db->like($kolom,$query);
		$query = $this->db->get($table);
		return $query->result_array();
	}

	function setInsertData($table,$data){
		$this->db->insert($table,$data);
	}
	function setUpdateData($table,$id,$id_data,$data){
		$this->db->where($id, $id_data);
		$this->db->update($table,$data);
	}
	function login($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('t_users');
		return $query->result_array();
	}
	function getVariant($id){
		$this->db->select('t_produk_stock.id_stock, t_produk_stock.id_produk, ref_produk_variant.variant, t_produk_stock.stock');    
		$this->db->from('t_produk_stock');
		$this->db->join('ref_produk_variant', 't_produk_stock.id_variant = ref_produk_variant.id_variant');
		$this->db->where('id_produk',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	function getVariant2($id) {
		$this->db->select('t_produk_stock.id_stock, t_produk_stock.id_produk, ref_produk_variant.variant, t_produk_stock.stock');
		$this->db->from('t_produk_stock');
		$this->db->join('ref_produk_variant', 't_produk_stock.id_variant = ref_produk_variant.id_variant');
		$this->db->where('id_stock',$id)->result();
		$result = $results[0];
	  	return $result;
	}

}
 ?>