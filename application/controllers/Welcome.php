<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct(){
		parent::__construct();

		$this->load->model("m_members");
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->cek_sessiontrue();
		$this->load->view('home');
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

    public function search()
	{
		$this->cek_sessiontrue();
		$routes_from = $this->input->post('routes_from');
		$routes_to = $this->input->post('routes_to');
		$data = array(
			'data_routes' => $this->m_members->get_routes("where routes_from LIKE '%$routes_from%' AND routes_to LIKE '%$routes_to%'")->result_array()
		);
		$this->load->view('search' , $data);
	}
	public function cust()
	{
		$this->cek_sessiontrue();
		$this->load->view('cust');
	}
}
