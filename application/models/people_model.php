<?php

class People_model extends CI_Model {

    function get_titles() {
        $result = $this->db->get('util_title')->result();
        $titles = array();
        foreach ($result as $row) {
            // array_push($titles, $row->title=>$row->title);
            $titles[$row->title] = $row->title;
        }

        return $titles;
    }

    function get_all_people() {
        $sql = "SELECT * FROM people
                LEFT JOIN cluster ON people.cid = cluster.cid
                WHERE profiled = 1 ORDER BY first_name asc";
        return $this->db->query($sql);
    }

    //-------------------------------anto
    function get_person($id) {
        $sql = "SELECT * FROM people
                LEFT JOIN cluster ON people.cid = cluster.cid
                WHERE pid = $id";
        return $this->db->query($sql);
    }

    function get_study($id) { //get list of studies where pid is PI
        $sql = "SELECT * FROM study
                WHERE pid = $id AND is_published=1 and is_deleted=0";
        return $this->db->query($sql);
    }

    function get_study2($pid){ //get list of studies where pid is team-member
        $sql = "SELECT distinct(study_id),study.name FROM study_team 
                LEFT JOIN study ON study_team.study_id=study.sid
                WHERE people_id = $pid AND is_published=1 and is_deleted=0";
        return $this->db->query($sql);
    }

      function get_accolades($id) {
        return $this->db->query("select * from people_accolades where pid = '$id' order by aid desc limit 10");
    }

    function get_clusters(){
        return $this->db->get('cluster');
    }

    //-------------------------------anto
    function add_basic($image_path) {
		$image="people_images/$image_path";
			
        $people = array(
            'ptid' => 1,
            'title' => $this->input->post('title'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'tel' => $this->input->post('tel'),
            'fb' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'linkedin' => $this->input->post('linkedin'),
            'researchgate' => $this->input->post('research_gate'),
            'bio' => $this->input->post('bio'),
			'image' => $image,
            'profiled' => 1,
            'cid'=>$this->input->post('cid')
        );

        $this->db->insert('people', $people);
        //get the id by selecting the latest entry
        $sql = "SELECT max(pid) as pid FROM people";
        $result = $this->db->query($sql)->result();
        return $result[0]->pid;
    }

    function update_basic($image_path) {
	$image="people_images/$image_path";
	
	if($image_path == true){
	$people = array(
            'title' => $this->input->post('title'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'tel' => $this->input->post('tel'),
            'fb' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'linkedin' => $this->input->post('linkedin'),
            'researchgate' => $this->input->post('research_gate'),
			'image' => $image,
            'bio' => $this->input->post('bio'),
            'cid' => $this->input->post('cid')
        );
	}else{
	
        $people = array(
            'title' => $this->input->post('title'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'tel' => $this->input->post('tel'),
            'fb' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'linkedin' => $this->input->post('linkedin'),
            'researchgate' => $this->input->post('research_gate'),
			//'image' => $image,
            'bio' => $this->input->post('bio'),
            'cid' => $this->input->post('cid')
        );
		
	}

        $this->db->where('pid', $this->input->post('pid'));
        return $this->db->update('people', $people);
    }

    function get_basic($pid) {
        $this->db->where('pid', $pid);
        $result = $this->db->get('people')->result();
        if (sizeof($result) == 1) {
            return $result[0];
        } else {
            return false;
        }
    }

    function get_pub($pid){
         $sql = "SELECT * FROM people_publication pp
                LEFT JOIN publication p ON pp.pubid=p.pubid
                WHERE pp.pid = $pid
                ORDER BY featured DESC
                LIMIT 5"; //picking only top 5
        return $this->db->query($sql);
    }

    function get_pub_TOP_FIVE($pid){
         $sql = "SELECT * FROM people_publication pp
                LEFT JOIN publication p ON pp.pubid=p.pubid
                WHERE pp.pid = $pid AND  pp.featured = 1 
                ORDER BY pp.order ASC
                LIMIT 5"; //picking only top 5
        return $this->db->query($sql);
    }

    function get_featured_pub($pid) { //strictly picking only featured publications
         $sql = "SELECT * FROM people_publication pp
                LEFT JOIN publication p ON pp.pubid=p.pubid
                WHERE pp.pid = $pid AND   pp.featured = 1 ORDER BY pp.order ASC";
        return $this->db->query($sql);
    }

    function get_unfeatured_pub($pid){
         $sql = "SELECT * FROM people_publication pp
                LEFT JOIN publication p ON pp.pubid=p.pubid
                WHERE pp.pid = $pid AND featured=0"; //picking only top 5
        return $this->db->query($sql);
    }

    function get_ext_pub($pid) {
        $this->db->where('pid', $pid);
        return $this->db->get('people_ext_publication');
    }

    function get_ext_pub_($pubid) {
        $this->db->where('epid', $pubid);
        $result = $this->db->get('people_ext_publication')->result();
        if (sizeof($result) > 0)
            return $result[0];
        return false;
    }

    function get_int_pub($pid) {
        $sql = "SELECT * FROM people_publication pp
				LEFT JOIN publication p ON pp.pubid=p.pubid
				WHERE pp.pid = $pid AND pp.featured=1";
        $result = $this->db->query($sql);
        return $result;
    }

    function add_pub_ext() {
        $ext_pub = array(
            'title' => $this->input->post('title'),
            'link' => $this->input->post('link'),
            'pid' => $this->input->post('pid'),
			'top'=> $this->input->post('top')
			
        );
        return $this->db->insert('people_ext_publication', $ext_pub);
    }

   // function add_featured_pub() {
  //      $this->db->where(
  //              array('pubid' => $this->input->post('pubid'),
   //                 'pid' => $this->input->post('pid'))
   //     );
  //      return $this->db->update('people_publication', array('featured' => 1));
   // }
   
	//DAVID CHANGE
	  function add_featured_pub() {
		$data = array(
				'featured' => 1,
				'order' => $this->input->post('order')
				);
        $this->db->where(
                array('pubid' => $this->input->post('pubid'),
                    'pid' => $this->input->post('pid'))
        );
        return $this->db->update('people_publication', $data);
    }
//DAVID CHANGE end

    function remove_featured_pub($ppid){
     $data = array(
				'featured' => 0,
				'order' => 0
				);
        $this->db->where('ppid',$ppid);
        return $this->db->update('people_publication',$data); 
    }

    function get_acc_types() {
        $result = $this->db->get("util_acc_type")->result();
        $acc_types = array();
        foreach ($result as $row) {
            $acc_types[$row->acc_type] = $row->acc_type;
        }

        return $acc_types;
    }

    function add_accolade() {
        $acc = array(
            'pid' => $this->input->post('pid'),
            'type' => $this->input->post('type'),
            'title' => $this->input->post('title'),
            'link' => $this->input->post('link'),
            'date_awarded' => $this->input->post('date_awarded'),
            'awarding_institution' => $this->input->post('awarding_institution')
        );
        return $this->db->insert('people_accolades', $acc);
    }

    function update_accolade() {
        $this->db->where('aid', $this->input->post('aid'));
        $acc = array(
            'type' => $this->input->post('type'),
            'title' => $this->input->post('title'),
            'link' => $this->input->post('link'),
            'date_awarded' => $this->input->post('date_awarded'),
            'awarding_institution' => $this->input->post('awarding_institution')
        );
        return $this->db->update('people_accolades', $acc);
    }

    function get_accolades_($pid) {
        $this->db->where('pid', $pid);
        return $this->db->get('people_accolades');
    }

    function get_accolade($aid) {
        $this->db->where('aid', $aid);
        $result = $this->db->get('people_accolades')->result();
        if (sizeof($result) == 1) {
            return $result[0];
        } else {
            return false;
        }
    }

    function delete_accolade($aid) {
        $this->db->where('aid', $aid);
        return $this->db->delete('people_accolades');
    }

    function get_people() {
        $this->db->where('profiled', 1);
        return $this->db->get('people');
    }

    function update_ext_pub() {
        $this->db->where('epid', $this->input->post('epid'));
        $pub = array(
            'title' => $this->input->post('title'),
            'link' => $this->input->post('link')
        );
        $this->db->update('people_ext_publication', $pub);
    }

    function delete_ext_pub($epid) {
        $this->db->where('epid', $epid);
        return $this->db->delete('people_ext_publication');
    }

    function delete_int_pub($pubid, $pid) {
        $this->db->where(array('pubid' => $pubid, 'pid' => $pid));
        return $this->db->delete('people_publication');
    }
	
	//......................Davy Institutions
	function add_institution() {
        $edu = array(
            'pid' => $this->input->post('pid'),
			'year_from' => $this->input->post('year_from'),
            'year_to' => $this->input->post('year_to'),            
			'institution'=> $this->input->post('institution'),
			'degree'=> $this->input->post('degree')
			
        );
        return $this->db->insert('people_education', $edu);
    }
	
	function get_institution($id) {
        return $this->db->query("select * from people_education where pid = '$id' order by eid desc limit 10");
    }
	
	 function get_institution_single($eid) {
        $this->db->where('eid', $eid);
        $result = $this->db->get('people_education')->result();
        if (sizeof($result) == 1) {
            return $result[0];
        } else {
            return false;
        }
    }
	 function update_institution() {
        $this->db->where('eid', $this->input->post('eid'));
        $inst = array(            
			'year_from' => $this->input->post('year_from'),
            'year_to' => $this->input->post('year_to'),            
			'institution'=> $this->input->post('institution'),
			'degree'=> $this->input->post('degree')
        );
        return $this->db->update('people_education', $inst);
    }
	function delete_institution($eid) {
        $this->db->where('eid', $eid);
        return $this->db->delete('people_education');
    }
	//......................Davy Institutions

	//......................Davy Delete People

	function delete_people($pid) {

        $this->db->where('pid', $pid);
 
       return $this->db->delete('people');
 
  	 }
	
	//......................Davy Delete People
	

}