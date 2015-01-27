<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function isMember()
	{
		$this->load->model('user');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		// Validating Nim Field
		$this->form_validation->set_rules('login-nim', 'NIM', 'required|min_length[3]|max_length[15]');
		// Validating Password Field
		$this->form_validation->set_rules('login-password', 'Password', 'required|min_length[6]|max_length[15]|alpha_dash');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index("");
		}
		else
		{
			$res = $this->user->checkLogin($this->input->post('login-nim'),$this->input->post('login-password'));
			if($res != 0)
			{
				$newdata = array(
				   'skdinkes'  => $this->input->post('login-nim'),
				   'member'     => '1',
				   'logged_in' => date("Y-m-d H:i:s")
				);
				$this->session->set_userdata($newdata);
				redirect('member');
			}
			else
			{
				$this->index("SK Dinkes atau Password salah.");
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */