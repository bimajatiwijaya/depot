<?php
if(! defined("BASEPATH")) exit("Akses langsung tidak diperkenankan");
class Service_clients extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library("nuSoap_lib");
		$this->nusoap_client = new nusoap_client("http://localhost/depot/index.php/service?wsdl");
	}
	public function index(){
		 // // // service data penduduk service laporan w1 dari puskesmas
   //      if($this->nusoap_client->fault)
   //      {
   //           $text = 'Error: '.$this->nusoap_client->fault;
   //      }
   //      else
   //      {
   //          if ($this->nusoap_client->getError())
   //          {
   //               $text = 'Error: '.$this->nusoap_client->getError();
   //          }
   //          else
   //          {
   //              $row['data'] = $this->nusoap_client->call('DataMasterDepot',
   //              											array(),
   //              											'urn:ServiceDataDepot',
   //                  										'urn:ServiceDataDepot#DataMasterDepot');
   //              $row['request']=$this->nusoap_client->request;
   //              $row['respon']=$this->nusoap_client->response;
   //          }
            
   //      }
        // $this->load->view('show_service_client',$row);


        //  // service cari depot
        // if($this->nusoap_client->fault)
        // {
        //      $text = 'Error: '.$this->nusoap_client->fault;
        // }
        // else
        // {
        //     if ($this->nusoap_client->getError())
        //     {
        //          $text = 'Error: '.$this->nusoap_client->getError();
        //     }
        //     else
        //     {
        //         $row['data'] = $this->nusoap_client->call('CariDataDepot', array('searchby'=>'namadepot','keyword'=>'xxx'));
        //         $row['request']=$this->nusoap_client->request;
        //         $row['respon']=$this->nusoap_client->response;
        //     }
            
        // }
        // $this->load->view('show_service_client',$row);
        // service cari depot
        // if($this->nusoap_client->fault)
        // {
        //      $text = 'Error: '.$this->nusoap_client->fault;
        // }
        // else
        // {
        //     if ($this->nusoap_client->getError())
        //     {
        //          $text = 'Error: '.$this->nusoap_client->getError();
        //     }
        //     else
        //     {
        //         $row['data'] = $this->nusoap_client->call('DataUjiBakteriTerbaik', array());
        //         $row['request']=$this->nusoap_client->request;
        //         $row['respon']=$this->nusoap_client->response;
        //     }
            
        // }
        // $this->load->view('show_service_client',$row);
        if($this->nusoap_client->fault)
        {
             $text = 'Error: '.$this->nusoap_client->fault;
        }
        else
        {
            if ($this->nusoap_client->getError())
            {
                 $text = 'Error: '.$this->nusoap_client->getError();
            }
            else
            {
                $row['data'] = $this->nusoap_client->call('LaporDepot', array('namadepot'=>'Toyasae','alamatdepot'=>'Jl Indraprasta No 34','masalahdepot'=>'Ono uget uget e','namapelapor'=>'Fatkhur'));
                $row['request']=$this->nusoap_client->request;
                $row['respon']=$this->nusoap_client->response;
            }
            
        }
        $this->load->view('show_service_client',$row);
	}
}