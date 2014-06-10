<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 * @year	2014
 *
 */	

class  Events extends CI_Controller
{
       
	function __construct()
	{
			parent::__construct();
			$this->load->model('events_model');
	}

	// Events View All
    public function index()
    {
		$data=array();
		
		if($query = $this->events_model->get_events())
		{
			$data['records']=$query;			
		}
		
		$data['page_location']='Dashboard';	
		$data['content']='admin/events_options';
		$data['page_title']='Events ';
		$data['page_sub_title']='School Engagement Program Events';
		$this->load->view('includes/template',$data);
		
    }		
	
	
	// Events Create
    public function create_event()
    {
		// Store department data in an array for use in category dropdown
		
		$depts_query = $this->db->query('SELECT dept_id, dept_name FROM departments');		
		$data['departs'] = $depts_query->result_array();	
		
		//set validation rules
		$this->form_validation->set_rules('title', 'Title', 'required');

		
		if ($this->form_validation->run() === FALSE){
			$data['content']='admin/events_create';
			//$this->load->view('admin/eve');
			$data['page_location']='Dashboard';	
			$data['page_title']='SEP News ';
			$data['page_sub_title']='School Engagement Program News Management';
			$this->load->view('includes/template',$data);
		}
		else
		{

			if($this->input->post('event_post'))
			{	
				
				//Upload Event Image and Save the upload location to Database
			   // Load the library - no config specified here
				$this->load->library('upload');
		 
				// Check if there was a file uploaded - there are other ways to
				// check this such as checking the 'error' for the file - if error
				// is 0, you are good to code
				
				if (!empty($_FILES['event_image']['name']))
				{
					// Specify configuration for Event Image Attachment
					$config['upload_path'] = 'uploads/events/';
					$config['allowed_types'] = 'png|jpg|jpeg|gif';
					$config['max_size'] = '2000';
			 
		 
					// Initialize config for Attach File
					$this->upload->initialize($config);
		 
					// Upload first File
					if ($this->upload->do_upload('event_image'))
					{
						$data = $this->upload->data();
						$fname = array('upload_data' => $this->upload->data());
						$image_path = 'uploads/events/'.$fname['upload_data']['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
					}
		 
				}
				else
				{
						echo $this->upload->display_errors();				
				}
			
					
				$data=array(
					'title'=>$this->input->post('title'),
					'start_date'=>$this->input->post('start_date'),
					'end_date'=>$this->input->post('end_date'),
					'description'=>$this->input->post('description'),
					'venue'=>$this->input->post('venue'),
					'published'=>$this->input->post('published'),
					'event_image'=>$image_path,
					'dept_id'=>$this->input->post('department_id')
				);
			}
			$this->events_model->create_event($data);
		
			redirect('events/index');
		}		
		
		
		
    }	
	
	function edit_event($eventId){	
		
		$eventId=$this->uri->segment(3);
		$data['event'] = $this->events_model->get_event_by_id($eventId);
		
		$depts_query = $this->db->query('SELECT dept_id, dept_name FROM departments');		
		$data['departs'] = $depts_query->result_array();			
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('start_date', 'start date', 'required');	
		$this->form_validation->set_rules('end_date', 'end date', 'required');		
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run()==FALSE)
		{
			//$this->load->view('admin/edit',$data);
			$data['content']='admin/events_edit';
		} else {

			if($this->input->post('edit_event'))
			{	
				
				//Upload Event Image and Save the upload location to Database
			   // Load the library - no config specified here
				$this->load->library('upload');
		 
				// Check if there was a file uploaded - there are other ways to
				// check this such as checking the 'error' for the file - if error
				// is 0, you are good to code
				
				if (!empty($_FILES['event_image_new']['name']))
				{
					// Specify configuration for Event Image Attachment
					$config['upload_path'] = 'uploads/events/';
					$config['allowed_types'] = 'png|jpg|jpeg|gif';
					$config['max_size'] = '2000';
			 
		 
					// Initialize config for Attach File
					$this->upload->initialize($config);
		 
					// Upload first File
					if ($this->upload->do_upload('event_image_new'))
					{
						$data = $this->upload->data();
						$fname = array('upload_data' => $this->upload->data());
						$image_path = 'uploads/events/'.$fname['upload_data']['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
						$image_path = $this->input->post('event_image_current');
					}
		 
				}
				else
				{
						$image_path = $this->input->post('event_image_current');
				}
			
					
				$data=array(
					'title'=>$this->input->post('title'),
					'start_date'=>$this->input->post('start_date'),
					'end_date'=>$this->input->post('end_date'),
					'description'=>$this->input->post('description'),
					'venue'=>$this->input->post('venue'),
					'published'=>$this->input->post('published'),
					'event_image'=>$image_path,
					'dept_id'=>$this->input->post('department_id')
				);
			}
			$this->events_model->update_event($this->uri->segment(3),$data);
			$data['records'] = $this->events_model->get_events();
			$data['content']='admin/events_options';
		}
		$data['page_location']='Dashboard';	
		$data['page_title']='Edit Events';
		$data['page_sub_title']='School Engagement Program News Management';
		$this->load->view('includes/template',$data);
		
	}
			
	
	// Events Delete
    public function delete_event($data)
    {
		$id=$this->uri->segment(3);
		$this->events_model->delete_event($data);
    }	
		

	
	// Events View Single
    public function view_events_single()
    {
		$data=array();
		
		if($query = $this->events_model->get_events())
		{
			$data['records']=$query;			
		}
		
		$data['page_location']='Dashboard';	
		$data['content']='admin/events_options';
		$data['page_title']='Events ';
		$data['page_sub_title']='School Engagement Program Events';
		$this->load->view('includes/template',$data);
		
    }		
		
		
	public function publish_event($eventsId)
    {        
        $QUERY= $this->events_model->publish_event($eventsId);
        $data= array();      
		redirect('events/index');

    }
    public function unpublish_event($eventsId)
    {
        $QUERY= $this->events_model->unpublish_event($eventsId);
		redirect('events/index');

           		   
    }	
}