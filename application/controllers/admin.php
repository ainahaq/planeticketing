<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		$this->load->model("m_members");
}
	function index(){
		$data['sql1'] = $this->m_members->getmembers();
		$this->load->view('v_admin' , $data);
	}

	public function adduser(){
		$data['op'] = 'add';
		$this->load->view('adduser',$data);
	}
	public function save(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'id' => $id, 
			'username' => $username, 
			'password' => md5($password), 
			'fullname' => $fullname,
			'level' => $level, 
			);
		if($op=="add"){
			$this->m_members->save($data);
		}
		else{
			$this->m_members->update($id,$data);
		}

		redirect('admin');

	}
	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_members->edit($id);
		$this->load->view('adduser',$data);
	}
}
