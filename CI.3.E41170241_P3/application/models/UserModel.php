<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function getAll()
    {
        return $this->db->get('user')->result();
    }

    public function store($data, $table)
    {
        $this->db->insert($table, $data);
        
    }

    public function delete($id, $table)
    {
        $this->db->delete($table, $id);
    }

    public function getById($id, $table)
    {
        return $this->db->get_where($table, $id)->result();
        
    }

    public function update($table, $id, $data)
    {
        $this->db->update($table, $data, $id);
        
    }
}

/* End of file ModelName.php */
