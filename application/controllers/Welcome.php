<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
        
        //http://localhost/appkaryawan/welcome/name/agus
        public function name(){
            echo urldecode($this->uri->segment("3"));
        }
        
        public function cari(){
            $this->load->view('karyawan/cari');
        }
        
        public function cari_action(){
            $this->load->model('karyawan_model','karyawan');
            $nama = $this->input->post('nama');
            $data['records'] = $this->karyawan->find_by_name($nama);
            $this->load->view('karyawan/cari',$data);
        }
        
}
