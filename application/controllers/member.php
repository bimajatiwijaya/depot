<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index($msg = null)
	{
		/*$data['message']= ($msg==null)?null:$msg;*/
		// load the session library
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->library('session');
		$this->load->helper(array('captcha','url'));
		// Validating Name Field
		$this->form_validation->set_rules('username', 'SK Dinas Kesehatan', 'required|min_length[4]|max_length[15]');
		// Validating Email Field
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|alpha_dash');
        // if form was submitted and given captcha word matches one in session
        if ($this->form_validation->run() == TRUE && ($this->input->post('secutity_code') === $this->session->userdata('mycaptcha'))) {
			$this->load->model('mpetugas');
			$check = $this->mpetugas->checklogin($this->input->post('username'),$this->input->post('password'));
			if($check!=0)
			{
				$newdata = array(
				   'petugas'  => $this->input->post('username'),
				   'access'     => '3', // 1 user 2 member 3 acces
				   'logged_in' => date("Y-m-d H:i:s")
				);
				$this->session->set_userdata($newdata);
				redirect('petugas/homePetugas');
			}
			else
			{
				$this->index("Username / Password Salah!");
			}
        }
		else
		{
            // load codeigniter captcha helper
            $this->load->helper('captcha');
            $vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '150',
                'img_height' => 50,
                'border' => 0, 
                'expiration' => 7200
            );
 
            // create captcha image
            $cap = create_captcha($vals);
 
            // store image html code in a variable
            $data['image'] = $cap['image'];
 
            // store the captcha word in a session
            $this->session->set_userdata('mycaptcha', $cap['word']);
			$this->load->view('header/hmember');
			$this->load->view('member/login', $data);
			$this->load->view('footer/fmember');

        }
		
	}
	public function homeMember()
	{
		$this->load->view('header/hmember');
		$this->load->view('member/home');
		$this->load->view('footer/fmember');
	}
	/**
	history
	**/
}