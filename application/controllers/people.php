<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class People extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('people_model');
		//$this->is_logged_in();
	}
	public function index()
	{
		$this->data['content'] = 'people/index';
		$this->data['people'] = $this->people_model->get_people();
		$this->load_view();
	}

	public function load_view(){
		$this->load->view('include/back_template',$this->data);
	}

	function is_logged_in(){
		if(!$this->session->userdata('is_logged_in')){
			redirect('user/login');
		}
	}

	function add($stage='basic',$action='view'){
		$this->data['title'] = 'Add Profile';
		if($stage=='basic'){
			//basic
			if($action=='view'){
				$this->data['titles'] = $this->people_model->get_titles();
				$this->data['content'] = 'people/add_basic';
				$this->data['clusters'] = $this->people_model->get_clusters(); //same as departments
				$this->load_view();
			}elseif($action=='submit'){
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('email','Email','trim|required|is_unique[people.email]');
				$this->form_validation->set_rules('tel','Phone Number','trim|numeric|rss_clean');
				$this->form_validation->set_rules('facebook','Facebook','trim|prep_url');
				$this->form_validation->set_rules('twitter','Twitter','trim|prep_url');
				$this->form_validation->set_rules('linkedin','Linkedin','trim|prep_url');
				$this->form_validation->set_rules('research_gate','Research Gate','trim|prep_url');
				$this->form_validation->set_rules('bio','Bio','trim|required');
					
					//file upload
					$doc = 'image';
					// this is for form field which is an image/pdf etc etc....
					$config['upload_path'] = './people_images';
					$config['allowed_types'] = 'jpg|png|gif';
					$config['max_size'] = '10000000';
					$config['max_width'] = '102400';
					$config['max_height'] = '7680';
					$data['view'] = 'upload';
					$this->upload->initialize($config);
					$this->upload->do_upload($doc);
					$fname2 = array('upload_data' => $this->upload->data());
					$image_path = $fname2['upload_data']['file_name'];
		
				if($this->form_validation->run()){
					$pid = $this->people_model->add_basic($image_path);
					$this->session->set_userdata('added_pid',$pid);
					redirect('people/add/pub/view');
				}else{
					$this->add('basic','view');
				}
			}
		}
		elseif($stage=='pub'){
			//publications
			if($action=='view'){
				$pid = $this->session->userdata('added_pid');
				if($action=='view'){
					if($pid > 0){
						$this->data['content'] = 'people/add_pub';
						$this->data['people'] = $this->people_model->get_basic($pid);
						$this->data['pub'] = $this->people_model->get_pub($pid);
						$this->data['ext_pub'] = $this->people_model->get_ext_pub($pid);
						$this->data['int_pub'] = $this->people_model->get_int_pub($pid);
						$this->data['featured_pub'] = $this->people_model->get_featured_pub($pid);
						$this->load_view();
					}
				}else{
					redirect('people/add/basic');
				}
			}
			if($action=='submit'){
				
					// $this->form_validation->set_rules('title','Title','trim|required');
					// $this->form_validation->set_rules('link','Link','trim|required|prep_url');
					// if($this->form_validation->run()){
					// 	$this->people_model->add_pub_ext();
					// }

				$this->people_model->add_featured_pub();
				redirect('people/pub/add/all/0/'.$this->input->post('pid'));
				
				// if($this->input->post('v2')==1) redirect('people/profile/'.$this->input->post('pid'));
				// redirect('people/add/pub/view');
			}
		}
		elseif($stage=='acc'){
			//accolades
			if($action=='view'){
				$pid = $this->session->userdata('added_pid');
				if($pid > 0){
					$this->data['content'] = 'people/add_acc';
					$this->data['people'] = $this->people_model->get_basic($pid);
					$this->data['acc_types'] = $this->people_model->get_acc_types();
					$this->data['accolades'] = $this->people_model->get_accolades($pid);
					$this->load_view();
				}
			}
			if($action=='submit'){
				$this->form_validation->set_rules('title','Title','trim|required');
				$this->form_validation->set_rules('link','First Name','trim|prep_url');
				$this->form_validation->set_rules('date_awarded','Date Awarded','trim');
				$this->form_validation->set_rules('awarding_institution','Awarding Institution','trim');
				if($this->form_validation->run()){
					$this->people_model->add_accolade();
					if($this->input->post('v2')==1) redirect('people/profile/'.$this->input->post('pid'));
					redirect('people/add/acc');
				}else{
					// $this->add('acc');
					if($this->input->post('v2')==1) redirect('people/profile/'.$this->input->post('pid'));
					redirect('people/add/acc');
				}
			}
		}
		elseif($stage=='inst'){
			//accolades
			if($action=='view'){
				$pid = $this->session->userdata('added_pid');
				if($pid > 0){
					$this->data['content'] = 'people/add_inst';
					$this->data['people'] = $this->people_model->get_basic($pid);
					$this->data['inst'] = $this->people_model->get_institution($pid);
					//$this->data['acc_types'] = $this->people_model->get_acc_types();
					//$this->data['accolades'] = $this->people_model->get_accolades($pid);
					$this->load_view();
				}
			}
			if($action=='submit'){
				$this->form_validation->set_rules('year_from','Year From','trim|required');
				$this->form_validation->set_rules('year_to','Year To','trim|required');
				$this->form_validation->set_rules('institution','Institution','trim|required');
				$this->form_validation->set_rules('degree','Degree','trim|required');
				if($this->form_validation->run()){
					$this->people_model->add_institution();
					if($this->input->post('v2')==1) redirect('people/profile/'.$this->input->post('pid'));
					redirect('people/add/inst');
				}else{
					// $this->add('acc');
					if($this->input->post('v2')==1) redirect('people/profile/'.$this->input->post('pid'));
					redirect('people/add/inst');
				}
			}
		}else{
			redirect('people/add');
		}
	}

	function profile($pid=''){
		if($pid>0){
			$this->data['basic'] = $this->people_model->get_basic($pid);
			// $this->data['ext_pub'] = $this->people_model->get_ext_pub($pid);
			// $this->data['int_pub'] = $this->people_model->get_int_pub($pid);
			$this->data['featured_pub'] = $this->people_model->get_featured_pub($pid);
			$this->data['accolades'] = $this->people_model->get_accolades($pid);
			$this->data['institutions'] = $this->people_model->get_institution($pid);			
			$this->data['content'] = 'people/profile_view';
			$this->load_view();
		}else{
			redirect('people');
		}
	}
	
	//.......Davy PRofile Delete

	function profile_delete($pid=''){

		$this->people_model->delete_people($pid);

		redirect("people/profile");

	}

	
//.......Davy Profile Delete

	function edit($stage,$pid,$action='view',$pubid=''){
		if($stage=='basic'){
			if($pid > 0 && $action=='view'){
				$this->data['titles'] = $this->people_model->get_titles();
				$this->data['basic'] = $this->people_model->get_basic($pid); #arg is pid
				$this->data['clusters'] = $this->people_model->get_clusters(); //same as departments
				$this->data['content'] = 'people/edit_basic';
				$this->load_view();
			}
			if($action=='submit'){
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('email','Email','trim|required');
				
				$this->form_validation->set_rules('facebook','Facebook','trim|prep_url');
				$this->form_validation->set_rules('twitter','Twitter','trim|prep_url');
				$this->form_validation->set_rules('linkedin','Linkedin','trim|prep_url');
				$this->form_validation->set_rules('research_gate','Research Gate','trim|prep_url');
				$this->form_validation->set_rules('bio','Bio','trim|required');

				$pid = $this->input->post('pid');
				
				//file upload
					$doc = 'image';
					// this is for form field which is an image/pdf etc etc....
					$config['upload_path'] = './people_images';
					$config['allowed_types'] = 'jpg|png|gif';
					$config['max_size'] = '10000000';
					$config['max_width'] = '102400';
					$config['max_height'] = '7680';
					$data['view'] = 'upload';
					$this->upload->initialize($config);
					$this->upload->do_upload($doc);
					$fname2 = array('upload_data' => $this->upload->data());
					$image_path = $fname2['upload_data']['file_name'];

				if($this->form_validation->run()){
					$this->people_model->update_basic($image_path);

					redirect("people/profile/$pid");
				}else{
					$this->edit('basic',$pid);
				}
			}
		}
		else{
			redirect("people");
		}
	}

	function pub($action='',$type='',$pubid='',$pid=''){
		if($action=='edit'){
			$this->data['content'] = 'people/edit_pub';
			$this->data['people'] = $this->people_model->get_basic($pid);
			$this->data['pub'] = $this->people_model->get_pub($pid);
			$this->data['ext_pub'] = $this->people_model->get_ext_pub($pid);
			$this->data['int_pub'] = $this->people_model->get_int_pub($pid);
			$this->data['type'] = $type;
			if($type=='ext'){
				$this->data['edit_pub'] = $this->people_model->get_ext_pub_($pubid);
			}
			$this->load_view();
		}
		elseif($action=='add'){
			#another version of add (people/add/pub)
			$this->data['content'] = 'people/add_pub';
			$this->data['v2'] = true; //version 2 of display --> add_pub
			$this->data['people'] = $this->people_model->get_basic($pid);
			$this->data['pub'] = $this->people_model->get_unfeatured_pub($pid);
			$this->data['featured_pub'] = $this->people_model->get_featured_pub($pid);
			$this->data['ext_pub'] = $this->people_model->get_ext_pub($pid);
			$this->data['int_pub'] = $this->people_model->get_int_pub($pid);
			$this->load_view();
		}
		elseif($action=='update'){
			$this->form_validation->set_rules("title","trim|required");
			$this->form_validation->set_rules("link","trim|required");
			if($this->form_validation->run()){
				$this->people_model->update_ext_pub();
				redirect("people/profile/".$this->input->post('pid'));
			}
		}
		elseif($action=='del'){
			if($type=='ext'){
				$this->people_model->delete_ext_pub($pubid);
				redirect("people/profile/$pid");
			}
			if($type=='int'){
				$this->people_model->delete_int_pub($pubid,$pid);
				redirect("people/profile/$pid");
			}
			if($type=='featured'){
				$ppid = $pubid;
				$this->people_model->remove_featured_pub($ppid);
				redirect("people/profile/$pid");
			}
		}
		else{
			redirect('people');
		}
	}


	function acc($action,$pid,$aid=''){
		if($action=='add'){
			$this->data['content'] = 'people/add_acc';
			$this->data['v2'] = true;
			$this->data['people'] = $this->people_model->get_basic($pid);
			$this->data['acc_types'] = $this->people_model->get_acc_types();
			$this->data['accolades'] = $this->people_model->get_accolades($pid);
			$this->load_view();
		}
		elseif($action=='edit'){
			$this->data['content'] = 'people/edit_acc';
			$this->data['people'] = $this->people_model->get_basic($pid);
			$this->data['acc'] = $this->people_model->get_accolade($aid);
			$this->data['acc_types'] = $this->people_model->get_acc_types();
			$this->data['accolades'] = $this->people_model->get_accolades($pid);
			$this->load_view();
		}
		elseif($action=='del'){
			$this->people_model->delete_accolade($aid);
			redirect("people/profile/$pid");
		}
		elseif($action=='update'){
			$this->people_model->update_accolade();
			redirect("people/profile/$pid");
		}
		else{
			redirect("people/profile/$pid");
		}
	}
	function inst($action,$pid,$eid=''){
		if($action=='add'){
			$this->data['content'] = 'people/add_inst';
			$this->data['v2'] = true;
			$this->data['people'] = $this->people_model->get_basic($pid);			
			$this->data['inst'] = $this->people_model->get_institution($pid);
			$this->load_view();
		}
		elseif($action=='edit'){
			$this->data['content'] = 'people/edit_inst';
			$this->data['people'] = $this->people_model->get_basic($pid);			
			$this->data['inst'] = $this->people_model->get_institution($pid);
			$this->data['institution'] = $this->people_model->get_institution_single($eid);
			$this->load_view();
		}
		elseif($action=='del'){
			$this->people_model->delete_institution($eid);
			redirect("people/profile/$pid");
		}
		elseif($action=='update'){
			$this->people_model->update_institution();
			redirect("people/profile/$pid");
		}
		else{
			redirect("people/profile/$pid");
		}
	}
	//TESTING FOR SEARCH
	public function index_test()
	{
		$this->data['content'] = 'people/index_test';
		$this->data['people'] = $this->people_model->get_people();
		$this->load_view();
	}
}
