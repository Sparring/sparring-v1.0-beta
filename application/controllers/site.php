<!--author  : djonkwae
    date    : 20-09-13 -->
<?php
class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_email');
        $this->load->model('m_textpage');
        //$this->load->helper('dompdf');
    }

    function index() {
        $data['lang']= $this->m_textpage->lang();
        $data['page'] = 'homepage';
        $this->load->view('_main_content', $data);
    }

    
    

}