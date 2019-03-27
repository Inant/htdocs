
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Koding extends CI_Controller {
	
	function index(){
		$this->load->library('perpusku');
		$this->perpusku->namaku();
                echo "<br/>";
                $this->perpusku->nama_kamu("dia");
	}
 
}