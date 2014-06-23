<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Debates extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		}
		
		function get_award_winner() {
		
		$data['post'] = $this->Debate_participants->get_posts();
		$data['page_location']='Dashboard';	
		$data['content']='admin/index';
		$data['page_title']='SEP News ';
		$data['page_sub_title']='School Engagement Program News Management';
		$this->load->view('includes/template',$data);
			
		 
	}
		
}