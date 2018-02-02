<?php 

/**
* 
*/
class Login extends CI_Controller
{
	function __construct(){
		parent:: __construct();

		$this->load->model('m_crud');
	}
	
	function index(){
		$status = $this->session->userdata("status");
		if($status == "login"){
			redirect(base_url('admin'));
		}
		$this->load->view('v_login');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password			);
		$cek = $this->m_crud->cek_login('usertabs', $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url('admin'));
		}else{
			echo "<script type='text/javascript'
			alert ('Maaf username dan password Anda salah!');
			document.write ('<center><h1> Harap masukan username dan password dengan benar </h1></center>');
			</script>";
			redirect(base_url("login"));
		}

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

