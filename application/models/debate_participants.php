<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 * @year	2014
 *
 */	

class  Debate_participants extends CI_Model
{

	function __construct()
	{
			parent::__construct();

	}
			
	public function get_quiz_winner(){		
		$sql="SELECT * FROM `users` u 
		INNER JOIN `debate_participants` p 
		ON u.`id`=p.`user_id` 
		WHERE debate_points = (SELECT MAX(debate_points) FROM debate_participants)";
		
		$query = $this->db->query($sql);
		
		return $query->result();
		
	}
}
