<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Costumer_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    function getDepot10Terbaik(){
    	$this -> db -> select('*');
		$this -> db -> from('usaha');
		$this -> db -> limit(10);

		return $this -> db -> get();

    }

}