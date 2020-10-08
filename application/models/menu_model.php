<?php
class Menu_model extends CI_Model
 {
     public function menu(){
		$query = $this->db->get('t_menu')->result();
     }
}              
 ?>