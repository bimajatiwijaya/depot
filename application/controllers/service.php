<?php
if(! defined("BASEPATH")) exit("Akses langsung tidak diperkenankan");
class Service extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library("nuSoap_lib");
		$this->nusoap_server = new soap_server();
		$this->nusoap_server->configureWSDL('ServiceDataDepot','urn:ServiceUserDepot');
		$this->load->model('service_model');
	}

	public function index(){
		// -------------------------------register service Data Usaha Depot Air----------------------------------
		$this->nusoap_server->register('DataMasterDepot',                // method name
		array(),        // input parameters
		array('output' => 'xsd:Array'),    // output parameters
		'urn:ServiceUserDepot',                    // namespace
		'urn:ServiceUserDepot#DataMasterDepot',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Data Usaha Depot Air'            // documentation
		);
		//fungsi yang akan mengambil data depot
		function DataMasterDepot(){
			// overriding objek global
			$obj =& get_instance();
			//mengambil model
			$data=$obj->service_model->getDataDepot();
			// setting output dalam array
			foreach ($data->result() as $value) {
				$dataDepot[]=array('namausaha'=>$value->NmUsaha,
									'skdisperindag'=>$value->SKPIDisperind,
									'skdinkes'=>$value->SKPDinkes,
									'alamatdepot'=>$value->AlmUsaha,
									'kecamatandepot'=>$value->KecUsaha,
									'kotadepot'=>$value->KtUsaha,
									'kodeposdepot'=>$value->KdPosUsaha,
									'telpdepot'=>$value->KdPosUsaha,
									'produk'=>$value->Produk,
									'kapasitas'=>$value->Kapasitas,
									'Satuan'=>$value->Satuan,
									'NIProd'=>$value->NIProd,
									'Invest'=>$value->Invest,
									'NoIjin'=>$value->NoIjin
									);
			}
			return $dataDepot;
		}
		//----------------------------- register service cari Data Usaha Depot Air----------------------------------
		$this->nusoap_server->register('CariDataDepot',                // method name
		array('searchby'=>'xsd:string','keyword'=>'xsd:string'),        // input parameters
		array('output' => 'xsd:Array'),    // output parameters
		'urn:ServiceUserDepot',                    // namespace
		'urn:ServiceUserDepot#CariDataDepot',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Pencarian Data Depot by setting parameter service sesuai dengan dengan -> NamaDepot, AlamatDepot, dan StatusDepot'            // documentation
		);
		function CariDataDepot($serachby,$keyword){
			// overriding objek global
			$obj =& get_instance();
			$row['searchby']=$serachby;
			$row['keyword']=$keyword;
			$data=$obj->service_model->cariDataDepot($row);
			if($data==0){
				$dataDepot[]=array('namausaha'=>'null',
									'skdisperindag'=>'null',
									'skdinkes'=>'null',
									'alamatdepot'=>'null',
									'kecamatandepot'=>'null',
									'kotadepot'=>'null',
									'kodeposdepot'=>'null',
									'telpdepot'=>'null',
									'produk'=>'null',
									'kapasitas'=>'null',
									'Satuan'=>'null',
									'NIProd'=>'null',
									'Invest'=>'null',
									'NoIjin'=>'null'
									);
			}
			else{
				foreach ($data->result() as $value) {
				$dataDepot[]=array('namausaha'=>$value->NmUsaha,
									'skdisperindag'=>$value->SKPIDisperind,
									'skdinkes'=>$value->SKPDinkes,
									'alamatdepot'=>$value->AlmUsaha,
									'kecamatandepot'=>$value->KecUsaha,
									'kotadepot'=>$value->KtUsaha,
									'kodeposdepot'=>$value->KdPosUsaha,
									'telpdepot'=>$value->KdPosUsaha,
									'produk'=>$value->Produk,
									'kapasitas'=>$value->Kapasitas,
									'Satuan'=>$value->Satuan,
									'NIProd'=>$value->NIProd,
									'Invest'=>$value->Invest,
									'NoIjin'=>$value->NoIjin
									);
				}
			}
			
			return $dataDepot;
		}
		//------------------------------register service uji bakteri tiga terbaik--------------------------------------
		$this->nusoap_server->register('DataUjiBakteriTerbaik',                // method name
		array(),        // input parameters
		array('output' => 'xsd:Array'),    // output parameters
		'urn:ServiceUserDepot',                    // namespace
		'urn:ServiceUserDepot#DataUjiBakteriTerbaik',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Service data melihat data hasil uji bakteri terbaik'            // documentation
		);
		function DataUjiBakteriTerbaik(){
			// overriding objek global
			$obj =& get_instance();
			$data=$obj->service_model->getDataUjiBakteriTerbaik();
			if($data=='0'){
				$dataDepot[]=array('namausaha'=>"null",
									'alamatdepot'=>"null",
									'kecamatandepot'=>"null",
									'skorcoliform'=>"null",
									'skorcolifecal'=>"null",
									'skoresc_coli'=>"null",
									'status'=>"null",
									'tanggaluji'=>"null"
									);
			}
			else{
				foreach ($data->result() as $value) {
				$dataDepot[]=array('namausaha'=>$value->NmUsaha,
									'alamatdepot'=>$value->AlmUsaha,
									'skorcoliform'=>$value->Coliform,
									'skorcolifecal'=>$value->Colifecal,
									'skoresc_coli'=>$value->Esc_Coli,
									'status'=>$value->Status,
									'tanggaluji'=>$value->Tgl_Uji
									);
				}
			}
			return $dataDepot;
		}
		//--------------------------register service Laporan depot bermasalah-----------------------------------
		$this->nusoap_server->register('LaporDepot',                // method name
		array('namadepot'=>'xsd:string','alamatdepot'=>'xsd:string','masalahdepot'=>'xsd:string','namapelapor'=>'xsd:string'),        // input parameters
		array('output' => 'xsd:string'),    // output parameters
		'urn:ServiceUserDepot',                    // namespace
		'urn:ServiceUserDepot#LaporDepot',                // soapaction
		'rpc',                                // style
		'encoded',                            // use
		'Service untuk mengirim laporan depot bermasalah'            // documentation
		);
		function LaporDepot($namadepot,$alamatdepot,$masalahdepot,$namapelapor){
			// overriding objek global
			$obj =& get_instance();
			$dataLaporan=array(
					'namadepot'=>$namadepot,
					'alamatdepot'=>$alamatdepot,
					'masalahdepot'=>$masalahdepot,
					'namapelapor'=>$namapelapor
				);
			$data=$obj->service_model->insertLaporanDepot($dataLaporan);
			
			return 'sukses';
		}

		//result as xml soap
		$GLOBALS['HTTP_RAW_POST_DATA'] = file_get_contents ('php://input');
		$HTTP_RAW_POST_DATA = $GLOBALS['HTTP_RAW_POST_DATA'];
		$this->nusoap_server->service($HTTP_RAW_POST_DATA);
	}
}