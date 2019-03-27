<?php
defined("BASEPATH") OR die("No Direct Access Allowed");

Class Test extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_test');
    }
    public function index(){
        $data['user'] = $this->M_test->getUser()->result();
        $this->load->view('v_user',$data);
    }
}