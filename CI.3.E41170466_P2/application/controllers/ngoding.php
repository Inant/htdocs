<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding');
		$this->Ngoding->nama_saya();
                echo "<br/>";
                $this->Ngoding->nama_kamu("Andi");
	}
 
}
