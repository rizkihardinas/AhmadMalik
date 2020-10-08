<?php
class M_menu extends CI_Model
 {
     public function menu(){
     	return $this->db->get('t_menu')->result();
     }
}              
 ?>