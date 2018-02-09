<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_members extends CI_Model {

	public function getmembers()
	{
		
		$sql = $this->db->query("SELECT * FROM usertabs");
		return $sql;

	}	
	public function getroutes()
	{
		
		$sql = $this->db->query("SELECT * FROM routes");
		return $sql;

	}
	public function getplane()
	{
		
		$sql = $this->db->query("SELECT * FROM transportation");
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

	function saveroutes($data){
		$this->db->insert('routes',$data);

	}

	function deleteroutes($id){
		$this->db->where("id",$id);
		$this->db->delete('routes');
	}

	function editroutes($id){
		$this->db->where("id",$id);
		return $this->db->get('routes');
	}

	function updateroutes($id,$data){
		$this->db->where("id",$id);
		$this->db->update('routes',$data);
	}

	function saveplane($data){
		$this->db->insert('transportation',$data);

	}

	function deleteplane($id){
		$this->db->where("id",$id);
		$this->db->delete('transportation');
	}

	function editplane($id){
		$this->db->where("id",$id);
		return $this->db->get('transportation');
	}

	function updateplane($id,$data){
		$this->db->where("id",$id);
		$this->db->update('transportation',$data);
	}
	function get_routes($where=" "){
		$data =$this->db->query('select * from routes ' .$where);
		return $data;
	}
}

