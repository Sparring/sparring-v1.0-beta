<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration {

	var $CI;

    public function __construct()
    {
        // Do something with $params
		$this->CI =& get_instance();
		
		$this->CI->load->helper('url');
    }
	
	public function get_profile(){
		$row = $this->CI->M_root->get_profile();
		return $row;
	}
	
	public function get_menu(){
		$row = $this->CI->M_root->get_menu();
		return $row;
	}
	
	public function get_sub_menu($id_menu){
		$row = $this->CI->M_root->get_sub_menu($id_menu);
		return $row;
	}
}

?>