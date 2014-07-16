<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard: Edit Profile</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">

            	<div class="row-fluid">
            	<h3>Profile</h3>

            	<h4>Edit: Basic Details</h4>

            	<?php 

            	echo validation_errors("<li>","</li>");

            	echo form_open_multipart('people/edit/basic/1/submit',"class='form' enctype='multipart/form-data' ");  
            	echo form_hidden("pid",$basic->pid);
            	echo form_label("Full Name","first_name");
            	echo form_dropdown("title",$titles,$basic->title);
            	echo form_input("first_name",set_value('first_name',$basic->first_name),"placeholder='First Name' required");
            	echo form_input("last_name",set_value('last_name',$basic->last_name),"placeholder='Last Name' required"); 

            	echo form_label("Contacts","email");
				echo "<input type='email' name='email' value='".set_value('email',$basic->email)."' placeholder='Email' required/>"; //html5
				echo form_input("tel",set_value('tel',$basic->tel),"placeholder='Phone number'");

				echo form_label("Social Media Links");
				echo form_input("facebook",set_value('facebook',$basic->fb),"placeholder='Facebook'");
				echo form_input("twitter",set_value('twitter',$basic->twitter),"placeholder='Twitter'");
				echo form_input("linkedin",set_value('linkedin',$basic->linkedin),"placeholder='LinkedIn'");
				echo form_input("research_gate",set_value('research_gate',$basic->researchgate),"placeholder='Google Scholar'");

				echo form_label("Bio","bio");
				echo form_textarea("bio",set_value('bio',$basic->bio),"placeholder='' required");
				
				echo form_label("Image","image");
				echo "<input type='file' name='image' id='file'>";
				echo "<br>";
                echo form_label("Deparment");
                echo "<select name='cid'>";
                foreach($clusters->result() as $row){
                    if($row->cid==$basic->cid){
                        echo "<option selected='selected' value='$row->cid'>$row->name</option>";
                    }else{
                        echo "<option value='$row->cid'>$row->name</option>";
                    }
                }
                echo "</select>";
				echo "<br>";
				echo form_submit("submit","Update","class='btn btn-success'");
				echo form_close();

				?>
            </div>

            
            
        </div>
        </div>
        
    </div>
</div>
