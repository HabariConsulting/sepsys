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
		
			// Pick Quiz Winner from Quiz Participants Table 
	public function get_quiz_winner(){		
		$sql="SELECT * FROM `users` u 
				INNER JOIN `quiz_participants` q 
				ON u.`id`=q.`user_id` 
				WHERE score = (SELECT MAX(score) FROM quiz_participants)";
		
		$query = $this->db->query($sql);
		
		return $query->result();
		
	}
	
	
}
