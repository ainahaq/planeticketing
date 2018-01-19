<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_members extends CI_Model {

	public function getmembers()
	{
		
		$sql = $this->db->query("SELECT * FROM usertabs");
		return $sql;

	}	

	function save($data){
		$this->db->insert('usertabs',$data);

	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete('usertabs');
	}

	function edit($id){
		$this->db->where("id",$id);
		return $this->db->get('usertabs');
	}

	function update($id,$data){
		$this->db->where("id",$id);
		$this->db->update('usertabs',$data);
	}
}
