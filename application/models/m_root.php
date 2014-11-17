<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_root extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function get_profile(){
		return $this->db->get('setting');	
	}
	
	public function get_privilage($menu_id){
		$user_id = $this->session->userdata('user_id');
		$group_id = $this->session->userdata('group_id');
		
		$this->db->select('group_menu.id_menu');
		$this->db->where_in('group_menu.id_group',$group_id);
		$this->db->where('user_group.id_user',$user_id);
		$this->db->where('group_menu.id_menu',$menu_id);
		$this->db->where('menu.active','1');
		$this->db->join('user_group','user_group.id_group = group_menu.id_group');
		$this->db->join('menu','menu.id_menu = group_menu.id_menu');
		$result = $this->db->get('group_menu');
		
		if($result->num_rows() > 0):
			return true;
		else:
			return false;
		endif;
	}
	
	public function get_menu($user_id = NULL, $group_id = NULL){
		if($user_id == '' && $group_id == ''):
			$user_id = $this->session->userdata('user_id');
			$group_id = $this->session->userdata('group_id'); 
		endif;	
		
		$this->db->select('menu.menu_name, menu.id_menu, menu.route, menu.icon, group_menu.is_read, group_menu.is_write,(SELECT 1 FROM menu sub WHERE menu.id_menu = sub.id_parent_menu LIMIT 1) as sub_menu',FALSE);
		$this->db->where_in('group_menu.id_group',$group_id);
		$this->db->where('user_group.id_user',$user_id);
		$this->db->where('menu.id_parent_menu','0');
		$this->db->where('menu.active','1');
		$this->db->join('user_group','user_group.id_group = group_menu.id_group');
		$this->db->join('menu','menu.id_menu = group_menu.id_menu');
		$this->db->group_by('menu.id_menu');
		$this->db->order_by('menu.display_order');
		$result = $this->db->get('group_menu');
		
		return $result->result();
	}
	
	public function get_sub_menu($id_menu, $user_id = NULL, $group_id = NULL){
		if($user_id == '' && $group_id == ''):
			$user_id = $this->session->userdata('user_id');
			$group_id = $this->session->userdata('group_id'); 
		endif;	
		
		$this->db->select('menu.menu_name, menu.route, menu.icon, group_menu.is_read, group_menu.is_write');
		$this->db->where_in('group_menu.id_group',$group_id);
		$this->db->where('user_group.id_user',$user_id);
		$this->db->where('menu.id_parent_menu',$id_menu);
		$this->db->where('menu.active','1');
		$this->db->join('user_group','user_group.id_group = group_menu.id_group');
		$this->db->join('menu','menu.id_menu = group_menu.id_menu');
		$this->db->group_by('menu.id_menu');
		$this->db->order_by('menu.display_order');
		$result = $this->db->get('group_menu');
		
		return $result->result();
	}
	
	public function get_id_menu($route){
		$this->db->select('id_menu');
		$this->db->where('route',$route);
		$result = $this->db->get('menu');
		
		return $result->row()->id_menu;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */