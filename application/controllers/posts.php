<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**********************************
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 *
 *
*************************************/

class Posts extends CI_Controller
{
	function __construct()
	{
		parent::__construct();			
			$this->load->model('posts_model');
	}
	
	
	// nEWS C

	function index() {

		
		$data['post'] = $this->posts_model->get_posts();
		$data['page_location']='Dashboard';	
		$data['content']='admin/post_index';
		$data['page_title']='SEP News ';
		$data['page_sub_title']='School Engagement Program News Management';
		$this->load->view('includes/template',$data);
			
		 
	}

	
	public function create()
	{		
		$data=array();
		
		$depts_query = $this->db->query('SELECT dept_id, dept_name FROM departments');		
		$data['departs'] = $depts_query->result_array();			
				
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$data['content']='admin/create_post';
			//$this->load->view('admin/create');
			$data['page_location']='Dashboard';	
			$data['page_title']='SEP News ';
			$data['page_sub_title']='School Engagement Program News Management';
			$this->load->view('includes/template',$data);
		}
		else
		{
	
			if($this->input->post('news_create'))
			{	
				
				//Upload Event Image and Save the upload location to Database
			   // Load the library - no config specified here
				$this->load->library('upload');
		 
				// Check if there was a file uploaded - there are other ways to
				// check this such as checking the 'error' for the file - if error
				// is 0, you are good to code
				
				if (!empty($_FILES['news_image']['name']))
				{
					// Specify configuration for Event Image Attachment
					$config['upload_path'] = 'uploads/news/';
					$config['allowed_types'] = 'png|jpg|jpeg|gif';
					$config['max_size'] = '2000';
			 
		 
					// Initialize config for Attach File
					$this->upload->initialize($config);
		 
					// Upload first File
					if ($this->upload->do_upload('news_image'))
					{
						$data = $this->upload->data();
						$fname = array('upload_data' => $this->upload->data());
						$image_path = 'uploads/news/'.$fname['upload_data']['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
					}
		 
				}
				
				$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'published'=>$this->input->post('published'),
					'post_image'=>$image_path,
					'dept_id'=>$this->input->post('department_id')
				);
			
			}
		
			$this->posts_model->insert_post($data);
			//$this->load->view('admin/create');
			echo "Done";
			redirect('posts/index');
		}
		

	}
		

	
	function edit($postId){	
		
		$postId=$this->uri->segment(3);
		$data['post'] = $this->posts_model->get_posts_by_id($postId);
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		
		$depts_query = $this->db->query('SELECT dept_id, dept_name FROM departments');		
		$data['departs'] = $depts_query->result_array();			
						

		if($this->form_validation->run()==FALSE)
		{
			//$this->load->view('admin/edit',$data);
			$data['content']='admin/edit_post';

		} else 
		{			
				
			if($this->input->post('news_edit'))
			{	
				
				//Upload Event Image and Save the upload location to Database
			   // Load the library - no config specified here
				$this->load->library('upload');
		 
				// Check if there was a file uploaded - there are other ways to
				// check this such as checking the 'error' for the file - if error
				// is 0, you are good to code
				
				if (!empty($_FILES['news_image_new']['name']))
				{
					// Specify configuration for Event Image Attachment
					$config['upload_path'] = 'uploads/news/';
					$config['allowed_types'] = 'png|jpg|jpeg|gif';
					$config['max_size'] = '2000';
			 
		 
					// Initialize config for Attach File
					$this->upload->initialize($config);
		 
					// Upload first File
					if ($this->upload->do_upload('news_image_new'))
					{
						$data = $this->upload->data();
						$fname = array('upload_data' => $this->upload->data());
						$image_path = 'uploads/news/'.$fname['upload_data']['file_name'];
					}
					else
					{
						echo $this->upload->display_errors();
						$image_path=$this->input->post('news_image_old');
					}
		 
				}else{
						$image_path=$this->input->post('news_image_old');				
				}				
																
				$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'post_image'=>$image_path,
					'dept_id'=>$this->input->post('department_id')
				);
			}
			$this->posts_model->update_post($this->uri->segment(3),$data);
			$data['content']='admin/post_index';
			$data['post'] = $this->posts_model->get_posts();
		}
		$data['page_location']='Dashboard';	
		$data['page_title']='Edit SEP News';
		$data['page_sub_title']='School Engagement Program News Management';
		$this->load->view('includes/template',$data);
		
	}
	

	function delete($postId){
		$this->posts_model->delete_post($postId);
		redirect('admin');
	}
	
	public function publish_post($postId){        
        $QUERY= $this->posts_model->publish_post($postId);
        $data= array();
		
		if($query=$this->posts_model->get_posts($postId)){
			$data['post']=$query;
		}        
       redirect('posts/index');
        //$data["content"]='projects';
       // $this->load->view('includes/admin_template',$data);            
    }
    public function unpublish_post($postId)
    {
        $QUERY= $this->posts_model->unpublish_post($postId);
		redirect('posts/index');
       // $data= array();
		
		//if($query=$this->Posts->get_posts($postId)){
			//$data['post']=$query;
		//}

           		   
    }				
		
	function logout(){
		redirect ('/auth/logout');
	}

}
