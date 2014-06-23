<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * @author	Vincent Mwagiru Kamoni
 * @email	vmwagiru@gmail.com
 * @year	2014
 *
 */	

class  Events_model extends CI_Model
{


		function __construct()
		{
				parent::__construct();

		}		
			
		//Insert Event
		public function create_event($data){
			$this->db->insert('events',$data);
			return;
		}
		
		public function delete_event(){
			$this->db->where('id',$this->uri->segment(3));
			$this->db->delete('events');
			return;
		}
		
		public function update_event($eventId, $data){
			$id = $eventId;         
			$this->db->where('id',$id);
			$this->db->update('events', $data);
			return;
		}	

		
		
		public function get_events(){
			$query=$this->db->get('events');
			return $query->result();
		}	
		
		public function get_latest_event(){
			$sqll="SELECT *
					FROM events
					ORDER BY start_date DESC
					LIMIT 1";
			$query = $this->db->query($sqll);
			return $query->result();	;
		}

		public function get_event_by_id($eventId){		
			$query = $this->db->get_where('events', array('id' => $eventId));
			return $query->row_array();		
		}		


		function publish_event($eventsId){
		  $sql = "UPDATE events
			SET published=1 
			WHERE id=".$eventsId;
		  
		  $query = $this->db->query($sql);
		  
		  if ($query){
		   return 0;
		  }
		  else{
		   return 1;
		  }
		 }
		 function unpublish_event($eventsId){
		  $sql = "UPDATE events
			SET published=0 
			WHERE id=".$eventsId;
		  
		  $query = $this->db->query($sql);
		  
		  if ($query){
		   return 0;
		  }
		  else{
		   return 1;
		  }
		 }			
}