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
	}
	
	
	public function index()
	{
		$data= array();
		$data['posts'] = $this->posts_model->get_posts();
		$data['content']='front/home';
		$this->load->view('front/includes/template',$data);
	}
}

/* End of file front.php */
/* Location: ./application/controllers/index.php */