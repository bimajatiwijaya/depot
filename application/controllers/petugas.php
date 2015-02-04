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
		//var_dump($this->session->all_userdata());
		$this->load->view('header/headerpetugas',$output);
		$this->load->view('petugas/content');
		$this->load->view('footer/footerpetugas');
	}
	public function index($msg=null)
	{
		$this->session->userdata('access')!=null? $this->homePetugas('') : '';
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
				foreach($check as $data){
					$newdata = array(
						'idadmin'  => $data->idadmin,
						'petugas'  => $this->input->post('username'),
						'access'     => '3', // 1 user 2 member 3 acces
						'logged_in' => date("Y-m-d H:i:s")
					);
				}
				$this->session->set_userdata($newdata);
				redirect('petugas/homePetugas');
			}
			else
			{
				$this->index("Username / Password Salah!");
			}
		}
	}
	/** tabel usaha : data depot **/
	public function homePetugas($msg=null)
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('usaha');
			$crud->set_subject('Data Depot Kota Semarang');
			$crud->required_fields('IDusaha');
			$crud->callback_after_insert(array($this,'log_b_usaha_add'));
			$crud->callback_before_delete(array($this,'log_b_usaha_del'));
			$crud->callback_before_update(array($this,'log_b_usaha_update'));
			$output = $crud->render();
			$this->_example_output($output);			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	/** (function callback before) log petugas setiap kegiatan berkaitan table usaha **/
	public function log_b_usaha_add()
	{
		 $this->load->model('mpetugas');
		 $maxId = $this->mpetugas->maxiddepot();
		 $this->mpetugas->insLogPtgs("add depot",$this->session->userdata('idadmin'),$maxId);
		return true;
	}
	public function log_b_usaha_del()
	{
		$primary_key = $this->uri->segment(4);
		 $this->load->model('mpetugas');
		 $maxId = $this->mpetugas->maxiddepot();
		 $this->mpetugas->insLogPtgs("delete depot",$this->session->userdata('idadmin'),$maxId);
		return true;
	}
	public function log_b_usaha_update()
	{
		$primary_key = $this->uri->segment(4);
		$this->load->model('mpetugas');
		$this->mpetugas->insLogPtgs("update depot",$this->session->userdata('idadmin'),$primary_key);
		return true;
	}
	/** end catat log petugas **/
	/** tabel usaha : data depot **/
	public function dataMember($msg=null)
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('member');
			$crud->set_subject('Member Depot Kota Semarang');
			$crud->required_fields('idmember');
			$crud->callback_after_insert(array($this,'log_b_member_add'));
			$crud->callback_before_delete(array($this,'log_b_member_del'));
			$crud->callback_before_update(array($this,'log_b_member_update'));
			$output = $crud->render();
			$this->_example_output($output);			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	/** (function callback before) log petugas setiap kegiatan berkaitan table member **/
	public function log_b_member_add()
	{
		 $this->load->model('mpetugas');
		 $maxId = $this->mpetugas->maxiddepot();
		 $this->mpetugas->insLogPtgs("add member",$this->session->userdata('idadmin'),$maxId);
		return true;
	}
	public function log_b_member_del()
	{
		$primary_key = $this->uri->segment(4);
		 $this->load->model('mpetugas');
		 $maxId = $this->mpetugas->maxiddepot();
		 $this->mpetugas->insLogPtgs("delete member",$this->session->userdata('idadmin'),$maxId);
		return true;
	}
	public function log_b_member_update()
	{
		$primary_key = $this->uri->segment(4);
		$this->load->model('mpetugas');
		$this->mpetugas->insLogPtgs("update member",$this->session->userdata('idadmin'),$primary_key);
		return true;
	}
	/** end catat log petugas **/
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
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index("Logout Sukses");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */