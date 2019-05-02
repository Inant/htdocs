<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        

    }

    public function index()
    {
        $this->load->view('login');
            
    }

    public function action()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password'=> md5($password)
        );

        $cek = $this->LoginModel->cekLogin("admin", $where);

        if ($cek > 0) {
            $dataSession = array(
                'username' => $username, 
                'status' => 'login'
            );
            
            $this->session->set_userdata( $dataSession );
            
            
            redirect('user/index');
            
        } else{
            echo "Username atau password salah";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('login');
        
    }
    
}

/* End of file Login.php */

