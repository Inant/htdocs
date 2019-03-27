<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Klx extends CI_Controller {
 
	public function warna(){
		echo "klx 1 adalah = " . $this->uri->segment('1') . "<br/>";		
		echo "mobil 2 adalah = " . $this->uri->segment('2') . "<br/>";		
		echo "mobil 3 adalah = " . $this->uri->segment('3') . "<br/>";		
		echo "Sepeda 4 adalah = " . $this->uri->segment('4') . "<br/>";		
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";	
	}
}