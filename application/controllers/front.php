<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

/**
*
*
*Controller authoured by : Vincent M -> vmwagiru@gmail.com
*
*/



	function __construct(){
		parent::__construct();
		$this->load->model('posts_model');
		$this->load->model('events_model');
		$this->load->model('debate_participants');
		$this->load->model('about');
		$this->load->model('staff_model');
	}
	
	
	public function index()
	{
		$data= array();
		$data['posts'] = $this->posts_model->get_posts();
		$data['awardwinner'] = $this->debate_participants->get_quiz_winner();
		$data['sepevents'] = $this->events_model->get_latest_event();
		$data['content']='front/home';
		$this->load->view('front/includes/template',$data);
	}
	
	/*** About Us Page Menus ****/
	
	// About Us - Kemri Wellcome Trust
	public function about_kwtrp()
	{
		$data= array();
		$pagemenu='KEMRI - Wellcome Trust Research Programme';
		$data['aboutcontent'] = $this->about->get_about_pages_by_pagemenu($pagemenu);
		$data['content']='front/about';
		$this->load->view('front/includes/template-about',$data);
	}
	
	//About Us- KEMRI
	public function about_kemri()
	{
		$data= array();
		$pagemenu='KEMRI';
		$data['aboutcontent'] = $this->about->get_about_pages_by_pagemenu($pagemenu);
		$data['content']='front/about';
		$this->load->view('front/includes/template-about',$data);
	}
	// About Us - SEP
	public function about_sep()
	{
		$data= array();
		$pagemenu='SEP';
		$data['aboutcontent'] = $this->about->get_about_pages_by_pagemenu($pagemenu);
		$data['content']='front/about';
		$this->load->view('front/includes/template-about',$data);
	}
	
	public function meet_the_staff()
	{
		$data= array();
		$data['stafflist'] = $this->staff_model->get_staff();
		$data['content']='front/meet_staff_outer';
		$this->load->view('front/includes/template',$data);
	}
	
	
}

/* End of file front.php */
/* Location: ./application/controllers/index.php */