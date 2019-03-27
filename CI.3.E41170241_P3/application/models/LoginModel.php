<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function cekLogin($table, $where)
    {
        return $this->db->get_where($table, $where)->num_rows();
    }

}

/* End of file LoginModel.php */
