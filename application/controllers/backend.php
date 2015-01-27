<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	
	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
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