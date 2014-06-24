<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class About extends CI_Model
{
       
        function __construct()
        {
                parent::__construct();
 
        }
 		
		function get_about_pages()
		{
			return $this->db->get('about_us')->result();
		}	

		function get_kemri_page()
		{
			return $this->db->get('about_us')->result();
		}	

		function get_kemriwelcometrust_page()
		{
			return $this->db->get('about_us')->result();
		}			
	
		
}