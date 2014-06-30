<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 * @year	2014
 *
 */	

class  Staff_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	function get_staff(){
	        $query=$this->db->get('staff');
			return $query->result();
	}
}
