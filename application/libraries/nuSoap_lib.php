<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
      class nuSoap_lib{
          function Nusoap_lib(){
              //If we are executing this script on a Windows server
               require_once(str_replace("\\","/",APPPATH).'libraries/NuSOAP/lib/nusoap'.EXT); 
          }
      }
