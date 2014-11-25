<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Venue extends CI_Controller {

    function __construct() {
        parent::__construct();
		
    }

    public function index() {
		$this->load->library('facebook/Facebook');
		$data['login_url'] = $this->facebook->get_login_url();
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		$data['pageType'] = 'lobi';
		$data['content'] = 'vVenue';
		
		
        if($this->session->userdata('username') == '' && !isset($data['user_me']['id'])):
            $this->load->view("front/login", $data);
        else:
            $this->load->view("front/template", $data);
        endif;
    }
	
	public function profil() {
		$this->load->library('facebook/Facebook');
		$data['login_url'] = $this->facebook->get_login_url();
		$data['user_me'] =  $this->facebook->get_user();
		$data['logout_url'] = $this->facebook->get_logout_url();
		$data['pageType'] = 'lobi';
		$data['content'] = 'vProfil';
		
		
        if($this->session->userdata('username') == '' && !isset($data['user_me']['id'])):
            $this->load->view("front/login", $data);
        else:
            $this->load->view("front/template", $data);
        endif;
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */