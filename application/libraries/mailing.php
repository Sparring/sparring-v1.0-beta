<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailing {

	var $CI;

    public function __construct()
    {
        // Do something with $params
		$this->CI =& get_instance();
    	
		
		$config['protocol'] = 'mail';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		
		$this->CI->load->library('email');
		$this->CI->email->initialize($config);
	}
	
	public function contact(){
		$configuration = $this->CI->db->get('setting');
		$content = '';
		foreach($this->CI->input->post() as $key=>$val):
			$content .= ucfirst(str_replace('_',' ',$key)).': '.$val.' <br />';
		endforeach;
        $this->CI->email->to($configuration->row()->email); 
		
        $this->CI->email->subject('Feedback');
		//$content = $this->CI->load->view('email/feedback',$data,TRUE);
		$this->CI->email->from($configuration->row()->email, "Nathansport System");
		$this->CI->email->message($content);  
        $this->CI->email->send();
		echo $this->CI->email->print_debugger();
	}
	
	
}

?>