<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    
    public function index( $offset = 0 )
    {
        $data['users'] = $this->UserModel->getAll();
        $this->load->view('users/index', $data);
        
    }

    // Add a new item
    public function add()
    {
        $this->load->view('users/add');
        
    }

    public function store()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $this->UserModel->store($data, 'user');

        
        redirect('user/index');
        
    }

    //Update one item
    public function edit( $id = NULL )
    {
        if ($id == NULL) {
            redirect('user/index');
        }
        $id = array('id' => $id);
        $data['user'] = $this->UserModel->getById($id, 'user');
        $this->load->view('users/edit', $data);
        

    }

    //Delete one item
    public function delete( $id = NULL )
    {
        if ($id == NULL) {
            redirect('user/index');
        }
        $id = array('id' => $id);
        $this->UserModel->delete($id, 'user');
        redirect('user/index');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $id = array(
            'id' => $id
        );

        $this->UserModel->update('user', $id, $data);
        redirect('user/index');
    }
}

/* End of file UserController.php */

