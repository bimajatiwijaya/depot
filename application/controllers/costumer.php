<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Costumer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('costumer_m');
	}
	
	public function index()
	{
		// $data['message']= ($msg==null)?null:$msg;
		$data['depot']=$this->costumer_m->getDepot10Terbaik();
		$this->load->view('costumer/header_v');
		$this->load->view('costumer/home_v',$data);
		$this->load->view('costumer/footer_v');
	}
	public function registrasi()
	{
		// $data['message']= ($msg==null)?null:$msg;
		// $data['depot']=$this->costumer_m->getDepot10Terbaik();
		$this->load->view('costumer/header_v');
		$this->load->view('costumer/registrasi_v');
		$this->load->view('costumer/footer_v');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */