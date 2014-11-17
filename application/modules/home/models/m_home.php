<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Edwin
 * 20/09/2012
 * Front end
 */

class M_about extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    private $table = 'pages_nathanu';
    private $pict = 'slider_foto';


    function get_all() {
        
        $data = $this->db->get($this->table);
        
        return $data->result();
    }

    public function get_foto() {
        $this->db->where('label', 'about_us');
        $data = $this->db->get($this->pict);        
        return $data->result();
    }
    
    function get_par($person) {
        $this->db->where('naam', $person);
        $data = $this->db->get($this->table);
        return $data->result();
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */