<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mpetugas extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
	//cek ada di tabel tracer_alumni
	function checkLogin($username, $password)
	{
		$this -> db -> select('username,password,idadmin');
		$this -> db -> select('username,password');
		$this -> db -> from('admin');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return 0;
		}
	}
	function maxiddepot()
	{
		$this -> db -> select('max(IDUsaha) as maxid');
		$this -> db -> from('usaha');
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			foreach($query->result() as $data)
			{
				return $data->maxid;
			}
		}
		else
		{
			return 0;
		}
	}
	/** catat log petugas setiap aktifitas **/
	function insLogPtgs($kegiatan,$idPetugas,$pk)
	{
		$data = array(
               'idpetugas' => $idPetugas,
               'kegiatan' => $kegiatan,
               'primaryfield' => $pk,
			   'timeprocess' => date("Y-m-d H:i:s")
            );
		$this->db->insert('logpetugas', $data); 
	}
}
