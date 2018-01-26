<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("m_members");
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function register()
	{
		$data['sql1'] = $this->m_members->getmembers();
		$this->load->view('header');
		$this->load->view('members',$data);
		$this->load->view('footer');
	}

	public function add(){
		$data['op'] = 'add';
		$this->load->view('header');
		$this->load->view('form',$data);
		$this->load->view('footer');
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

		redirect('home');

	}
	public function delete($id){
		$this->m_members->delete($id);
		redirect('home');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_members->edit($id);
		$this->load->view('header');
		$this->load->view('form',$data);
		$this->load->view('footer');
	}
}
