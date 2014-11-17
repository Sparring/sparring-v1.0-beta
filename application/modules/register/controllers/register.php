<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		
    }

    public function index() {
		$this->load->library('facebook/Facebook');
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		$data['content'] = 'vRegister';
		$data['pageType'] = 'page';
		
        if(isset($data['user_me']['id'])):
            $userData = array(
				'email' => $data['user_me']->email,
				'nama_lengkap' => $data['user_me']->fullname,
				'tanggal_lahir' => $data['user_me']->birthdate,
				'kota' => $data['user_me']->city,
				'jenis_kelamin' => $data['user_me']->gender,
			);
        else:
            $userData = array(
				'email' => $this->input->post('email'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'password' => $this->input->post('password'),
				'repassword' => $this->input->post('repassword')
				
			);
        endif;
		
		$data['userData'] = $userData;
		$this->load->view("front/template", $data);
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */