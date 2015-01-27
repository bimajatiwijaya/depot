<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index($msg = null)
	{
		$data['message']= ($msg==null)?null:$msg;
		$this->load->view('header/headerhome');
		$this->load->view('content/login',$data);
		$this->load->view('footer/footeruser');
	}
	public function isiUlang()
	{
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */