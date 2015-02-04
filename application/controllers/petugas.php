<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Petugas  extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('header/headerpetugas',$output);
		$this->load->view('petugas/content');
		$this->load->view('footer/footerpetugas');
	}
	public function index($msg=null)
	{
		$data['message'] = $msg==null?null:$msg;
		$this->load->view('header/headerloginpetugas');
		$this->load->view('petugas/loginAdmin',$data);
		$this->load->view('footer/footerpetugas');
	}
	public function isPetugas()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		// Validating Name Field
		$this->form_validation->set_rules('username', 'SK Dinas Kesehatan', 'required|min_length[4]|max_length[15]');
		// Validating Email Field
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|alpha_dash');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index("");
		}
		else
		{
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
	}
	public function homePetugas($msg=null)
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('usaha');
			$crud->set_subject('Data Depot Kota Semarang');
			$crud->required_fields('IDusaha');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function isiUlang()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('usaha');
		$crud->set_relation_n_n('isiulang', 'usaha', 'gantiair', 'gantiair.IDUsaha', 'IDUsaha', 'TglIsi','IDUsaha');
		$crud->set_subject('usaha');
		$crud->unset_columns('AlmUsaha','NmUsaha','KecUsaha','KtUsaha','TelpUsaha','NmPmlk','AlmPmlk','Tk','KecPmlk','isiulang');

		//$crud->fields('NmUsaha','isiulang');

		$output = $crud->render();

		$this->_example_output($output);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */