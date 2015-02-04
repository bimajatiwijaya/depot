<?php
class Service_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getDataDepot(){
		$this->db->select('*');
		$this->db->from('usaha');
		$query = $this->db->get();
		return $query;
	}
	public function cariDataDepot($row){
		// setting variael to lowercase
		$kolom=strtolower($row['searchby']);
		// setting clause buat query
		if($kolom=='namadepot'){
			$arwhere=array('NmUsaha LIKE '=>'%'.$row['keyword'].'%');
		}
		elseif ($kolom == 'alamatdepot') {
			$arwhere=array('AlmUsaha LIKE '=>'%'.$row['keyword'].'%');
		}
		// elseif ($kolom == 'statusdepot') {
		// 	# code...
		// }
		$this->db->select('*');
		$this->db->from('usaha');
		$this->db->where($arwhere);
		$query = $this->db->get();
		if($query -> num_rows() >= 1){
			return $query;
		}
		else{
			return 0;
		}
	}
	public function getDataUjiBakteriTerbaik(){
		$this->db->select('usaha.`NmUsaha`,usaha.`AlmUsaha`,ujibakteri.`Coliform`,ujibakteri.`Colifecal`,ujibakteri.`Esc_Coli`,ujibakteri.`Status`,ujibakteri.`Tgl_Uji`,SUM(ujibakteri.Colifecal+ujibakteri.`Coliform`+ujibakteri.`Esc_Coli`) AS rating');
		$this->db->from('ujibakteri');
		$this->db->join('usaha','ujibakteri.IDUsaha=usaha.IDUsaha');
		$this->db->order_by("rating","desc");
		$query = $this->db->get();
		if($query -> num_rows() >= 1){
			return $query;
		}
		else{
			return 0;
		}
	}
}