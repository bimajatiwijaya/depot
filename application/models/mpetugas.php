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
	function newMember()
	{
		$new = $this->db->select_max('idmember', 'newmember');
		$query = $this->db->get('member');
		foreach($query->result() as $data)
		{
			$id = $data->newmember;
		}
		$this -> db -> select('*');
		$this -> db -> from('member');
		$this -> db -> where('idmember', $id);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return 0;
		}
	}
	function flagMember($idusaha)
	{
		$data = array(
               'member' => 1
		);
		$this->db->where('idusaha', $idusaha);
		$this->db->update('usaha', $data); 
	}
}
