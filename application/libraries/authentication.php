<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication {

	var $CI;

    public function __construct()
    {
        // Do something with $params
		$this->CI =& get_instance();
		
		$this->CI->load->helper('url');
		$this->CI->load->model('M_root');
    }
	
	public function check($menu = NULL){
		
		if($this->CI->session->userdata('name') == FALSE && $this->CI->session->userdata('name') == ''):	
			redirect('admin/login');
		else:
			
			if($menu != ''):
				$menu_id = $this->CI->M_root->get_id_menu($menu);
				$access = $this->CI->M_root->get_privilage($menu_id);
				
				if($access == false):
					redirect('adminDashboard/dashboard');
				endif;
			endif;
		endif;
	
	}
	
	public function rev_check(){
		
		if($this->CI->session->userdata('name') == TRUE && $this->CI->session->userdata('name') != ''):
			redirect('adminDashboard/dashboard');
		endif;
		
	}
}

?>