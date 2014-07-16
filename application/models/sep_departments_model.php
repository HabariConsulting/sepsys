<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 * @year	2014
 *
 */	

class  Sep_departments_model extends CI_Model
{


		function __construct()
		{
				parent::__construct();

		}		
			

		
		public function get_departments(){
			$query=$this->db->get('sep_careers');
			return $query->result();
		}	
		
		

			
}