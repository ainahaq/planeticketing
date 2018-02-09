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
		$this->cek_sessionfalse();
		$data['sql1'] = $this->m_members->getmembers();
		$this->load->view('v_admin' , $data);
	}

	public function adduser(){
		$this->cek_sessionfalse();
		$data['op'] = 'add';
		$this->load->view('adduser',$data);
	}
	public function save(){
		$this->cek_sessionfalse();
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'id' => $id, 
			'username' => $username, 
			'password' => $password, 
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
		$this->cek_sessionfalse();
		$data['op'] = 'edit';
		$data['sql'] = $this->m_members->edit($id);
		$this->load->view('adduser',$data);
	}

	public function delete($id){
		$this->cek_sessionfalse();
		$this->m_members->delete($id);
		redirect('admin');
	}

	public function routes()
	{
		$this->cek_sessionfalse();
		$data['sql1'] = $this->m_members->getroutes();
		$this->load->view('routes' , $data);
	}

	public function addroutes(){
		$this->cek_sessionfalse();
		$data['op'] = 'add';
		$this->load->view('addroutes',$data);
	}

	public function saveroutes(){
		$this->cek_sessionfalse();
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$routes_from = $this->input->post('routes_from');
		$routes_to = $this->input->post('routes_to');
		$price = $this->input->post('price');
		$data = array(
			'id' => $id, 
			'depart_at' => $depart_at, 
			'routes_from' => $routes_from, 
			'routes_to' => $routes_to,
			'price' => $price, 
			);
		if($op=="add"){
			$this->m_members->saveroutes($data);
		}
		else{
			$this->m_members->updateroutes($id,$data);
		}

		redirect('admin/routes');

	}

	public function editroutes($id){
		$this->cek_sessionfalse();
		$data['op'] = 'editroutes';
		$data['sql'] = $this->m_members->editroutes($id);
		$this->load->view('addroutes',$data);
	}

	public function deleteroutes($id){
		$this->cek_sessionfalse();
		$this->m_members->deleteroutes($id);
		redirect('admin/routes');
	}

	public function plane()
	{
		$this->cek_sessionfalse();
		$data['sql1'] = $this->m_members->getplane();
		$this->load->view('plane' , $data);
	}

	public function addplane(){
		$this->cek_sessionfalse();
		$data['op'] = 'add';
		$this->load->view('addplane',$data);
	}

	public function saveplane(){
		$this->cek_sessionfalse();
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$data = array(
			'id' => $id, 
			'code' => $code, 
			'name' => $name, 
			'description' => $description, 
			'seat_qty' => $seat_qty, 
			);
		if($op=="add"){
			$this->m_members->saveplane($data);
		}
		else{
			$this->m_members->updateplane($id,$data);
		}

		redirect('admin/plane');

	}

	public function editplane($id){
		$this->cek_sessionfalse();
		$data['op'] = 'editplane';
		$data['sql'] = $this->m_members->editplane($id);
		$this->load->view('addplane',$data);
	}

	public function deleteplane($id){
		$this->cek_sessionfalse();
		$this->m_members->deleteplane($id);
		redirect('admin/plane');
	}
	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'admin');
    	}
    }
    public function cek_session(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
    	  	return 0;
    	}else{
    		return 1;
    	}
  	}
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'login');
         }
     }
}
