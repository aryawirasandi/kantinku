<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('login');
    }
    
    function masuk(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->ion_auth->login($username,$password)){
            redirect(base_url('welcome'));
        }else{
            $data['message'] = $this->ion_auth->errors();
            $this->load->view('login',$data);
        }
    }
    
    function logout(){
        $this->ion_auth->logout();
        redirect(base_url('login'));
    }
}

