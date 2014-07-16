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
		$this->load->model('people_model');
		$this->load->model('sep_departments_model');

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
		$data['content']='front/meet_staff_outer';
        $data['people'] = $this->people_model->get_all_people();
		$this->load->view('front/includes/template',$data);
	}
	
    function health_research_careers() {
		$data= array();
		$data['content']='front/careers_in_health';
        $data['careers'] = $this->sep_departments_model->get_departments();
		$this->load->view('front/includes/template',$data);
    }	
	
	
  /*  function people() {
		
		$data= array();
		$data['content']='front/meet_staff_outer';
        $data['people'] = $this->people_model->get_all_people();
		$this->load->view('front/includes/template',$data);
    }	*/
	
	function staff_profile($id) {
        $profile = $this->people_model->get_person($id)->result();
        if(sizeof($profile)>0){
            if($profile[0]->profiled != '1'){
                //redirect to people landing
                redirect('front/people');
            }
        }else{
            redirect('front/people');
        }
        $data['title'] = 'People Profile';
        $data['people'] = $this->people_model->get_person($id);
        $data['study'] = $this->people_model->get_study($id);
        $data['study2'] = $this->people_model->get_study2($id);
        $data['accolades'] = $this->people_model->get_accolades($id);
        $data['inst'] = $this->people_model->get_institution($id); 
		$data['content']='front/meet_staff_inner';		
		$this->load->view('front/includes/template',$data);
    }
	
	
}

/* End of file front.php */
/* Location: ./application/controllers/index.php */