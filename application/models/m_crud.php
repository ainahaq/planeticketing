<?php 

 /**
 * 
 */
 class M_crud extends CI_Model
 {
 	
 	function cek_login($table,$where){
 		return $this->db->get_where($table, $where);
 	}
 	function GetData($data) {
        $query = $this->db->get_where('usertabs', $data);
        return $query;
    }
 }