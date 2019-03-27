<?php
defined("BASEPATH") OR die("No Direct Access");

Class M_test extends CI_Model{
    public function getUser(){
        return $this->db->get('user');
    }
}