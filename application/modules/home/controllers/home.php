<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
		
    }

    public function index() {
		$this->load->library('facebook/Facebook');
		$data['login_url'] = $this->facebook->get_login_url();
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		$data['pageType'] = 'lobi';
		$data['content'] = 'vHome';
		
		
        if($this->session->userdata('username') == '' && !isset($data['user_me']['id'])):
            $this->load->view("front/login", $data);
        else:
            $this->load->view("front/template", $data);
        endif;
    }
    
    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        if($email == 'test@sparring.co.id' && $password == 'asdasd'):
            $this->session->set_userdata('username','Test');
            redirect('/');
        endif;
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }

    

 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */