<?php 

	
	class Reserv extends CI_Controller
	{
	public function __construct(){
		parent::__construct();

		$this->load->model("m_members");
	}
	public function reservation($kode = 0){
		$data_rute = $this->m_members->get_routes("where routes.id ='$kode' AND routes.id_transport = transportation.id")->result_array();
		$data = array(
			'id_routes' => $kode,
			'id' => $data_rute[0]['id'],
			'depart_at' => $data_rute[0]['depart_at'],
			'landing_at' => $data_rute[0]['landing_at'], 
			'depart_date' => $data_rute[0]['depart_date'],
			'routes_from' => $data_rute[0]['routes_from'],
			'routes_to' => $data_rute[0]['routes_to'],
			'id_transport' => $data_rute[0]['id_transport'],
			'price' => $data_rute[0]['price'],
			'seat_qty' => $data_rute[0]['seat_qty'],
			'name' => $data_rute[0]['name']
			);
		$this->load->view('reservation', $data);
		}
	public function savecust(){
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$id = $this->input->post('id');
		$data = array(
			'name' => $name, 
			'address' => $address, 
			'phone' => $phone, 
			'email' => $email,
			'gender' => $gender, 
			);
		$this->m_members->savecust($data);
		$data_cust = $this->m_members->getcust("where phone = '$phone' AND email = '$email'")->result_array();
		$id_cust = $data_cust[0]['id'];
		redirect(base_url('reserv/seat/'.$id).'/'.$id_cust);
	}
	public function seat($kode = 0, $kode1 = 0){
		$data_rute = $this->m_members->get_routes("where routes.id ='$kode' AND routes.id_transport = transportation.id")->result_array();
		$data_cust = $this->m_members->getcust("where id = '$kode1'")->result_array();
		$data = array(
			'id' => $data_rute[0]['id'],
			'depart_at' => $data_rute[0]['depart_at'],
			'landing_at' => $data_rute[0]['landing_at'], 
			'depart_date' => $data_rute[0]['depart_date'],
			'routes_from' => $data_rute[0]['routes_from'],
			'routes_to' => $data_rute[0]['routes_to'],
			'id_transport' => $data_rute[0]['id_transport'],
			'price' => $data_rute[0]['price'],
			'seat_qty' => $data_rute[0]['seat_qty'],
			'name' => $data_rute[0]['name'],
			'namecust' => $data_cust[0]['name'],
			'address' => $data_cust[0]['address'],
			'phone' => $data_cust[0]['phone'],
			'email' => $data_cust[0]['email'],
			'gender' => $data_cust[0]['gender'],
			);
		$this->load->view('seat', $data);
		}
}

?>