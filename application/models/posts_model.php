<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**********************************
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 *
 */
class Posts_model extends CI_Model
{
       
        function __construct()
        {
                parent::__construct();
 
        }
 		
		function get_posts()
		{
			return $this->db->get('posts')->result();
		}		
		
		function get_posts_by_id($postId)
		{
            $query = $this->db->get_where('posts', array('id' => $postId));
			return $query->row_array();
		}
 
        function insert_post($data){
			$this->db->insert('posts', $data);
			return;
        }
 
        function update_post($postId, $data){
                $id = $postId;         
                $this->db->where('id',$id);
                $this->db->update('posts', $data);
                return;
        }
 
        function delete_post($postId){
                $id = $postId;         
                $this->db->delete('posts',array('id' => $id));
                return;
        }
			
		function publish_post($postId){
		  $sql = "UPDATE posts
			SET published=1 
			WHERE id=".$postId;
		  
		  $query = $this->db->query($sql);
		  
		  if ($query){
		   return 0;
		  }
		  else{
		   return 1;
		  }
		 }
		 
		 function unpublish_post($postId){
		  $sql = "UPDATE posts
			SET published=0 
			WHERE id=".$postId;
		  
		  $query = $this->db->query($sql);
		  
		  if ($query){
		   return 0;
		  }
		  else{
		   return 1;
		  }
		 }	

				
		
}