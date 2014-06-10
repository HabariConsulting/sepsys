<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ask Model
*
* Author:  Ligono Eugene
* 		   ligonoeugene@gmail.com
*
*
*
* Created:  13.02.2014
**/

class ask_model extends CI_Model
{
 	
function question_fetch(){
	return $this->db->query("SELECT * FROM `ask` a INNER JOIN `users` u ON a.`asked_by`=u.`email` where a.`is_deleted`=0");
}
 function add_record($data){
        $this->db->insert('ask',$data);
    }
function delete_question($id){
		$sql = "UPDATE ask
				SET is_deleted=1 
				WHERE ask_id=".$id;
		
		$query = $this->db->query($sql);
		
		if ($query){
			return 0;
		}
		else{
			return 1;
		}	
}
function edit_question($id){
		$sql = "UPDATE ask
				SET title = '{$this->input->post('title')}', question = '{$this->input->post('editor1')}', tags = '{$this->input->post('tags_1')}'
				WHERE ask_id=".$id;
		
		$query = $this->db->query($sql);		
		
}
function view_question($id){
	return mysql_fetch_assoc(mysql_query("SELECT * FROM `ask` where ask_id='$id' order by ask_id desc limit 1" ));
}


}
