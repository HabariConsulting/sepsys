<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class About extends CI_Model
{
       
        function __construct()
        {
                parent::__construct();
 
        }
 		
		function get_about_pages_by_pagemenu($pagemenu)
		{
			$this->db->where('page_menu_title',$pagemenu);
			return $this->db->get('about_us')->result();
		}	
	
}