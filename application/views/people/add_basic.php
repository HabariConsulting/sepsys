<div id="content">

    <div id="content-header">

        <h1>Admin Dashboard: Add Profile </h1>

    </div>

    <div id="breadcrumb">

        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>

        <a href="#" class="current">Dashboard</a>

    </div>

    <div class="container-fluid">



        <div class="row-fluid">

            <div class="span12">

            	<h3>Add Profile</h3>



				<!--  start-->

				<div class="widget-box">  

					<div class="widget-title">  

					<span class="icon"><i class="icon-align-justify"></i></span>

					<h5>Step 1 of 3: Basic Details</h5>

                    </div> 

					<div class="widget-content nopadding">



            	<?php 



            	echo validation_errors("<li>","</li>");
            	echo form_open_multipart('people/add/basic/submit',"class='form-horizontal' enctype='multipart/form-data' " );

            	//echo form_label("<h5>Full Name: </h5>","first_name", "class='control-label' ");

				echo "<div class='control-group'>";


				echo form_label("<h5>Name &amp; Gender </h5>","title", "class='control-label' ");

				echo "<div class='controls basic'>";

            	echo form_dropdown("title",$titles);

            	echo form_input("first_name",set_value('first_name'),"placeholder='First Name' required");

            	echo form_input("last_name",set_value('last_name'),"placeholder='Last Name' required");  	
            	echo form_dropdown("gender",array('M'=>'Male','F'=>'Female'));

				echo "</div>";

				echo "</div>"; 

				echo "<div class='control-group'>";	


                echo form_label("<h5>Contacts </h5>","email");

				echo "<div class='controls basic'>";

				echo "<input type='email' name='email' value='".set_value('email')."' placeholder='Email' required/>"; //html5

				echo form_input("tel",set_value('tel'),"placeholder='Phone number'");

				echo "</div>"; 

				echo "</div>";	

				echo "<div class='control-group'>";	


				echo form_label("<h5>Social Media Links</h5>");

				echo "<div class='controls social'>";

				echo "<p>";   echo '<img src="http://deveint.webfactional.com/kemri/components/back/img/facebook.png" >';   echo "&nbsp;" ; echo "&nbsp;" ;  echo form_input("facebook",set_value('facebook'),"placeholder='Facebook'  "); echo"</p>";


				echo "<p>";   echo '<img src="http://deveint.webfactional.com/kemri/components/back/img/twitter.png" >';   echo "&nbsp;" ; echo "&nbsp;" ;  echo form_input("twitter",set_value('twitter'),"placeholder='Twitter'  "); echo"</p>";

				echo "<p>";   echo '<img src="http://deveint.webfactional.com/kemri/components/back/img/linkedin.png" >';   echo "&nbsp;" ; echo "&nbsp;" ;  echo form_input("linkedin",set_value('linkedin'),"placeholder='Linked In'  "); echo"</p>";


				echo form_input("research_gate",set_value('research_gate'),"placeholder='Google Scholar'");

				echo "</div>"; 

				echo "</div>";



				echo "<div class='control-group'>";	

				echo form_label("<h5>Bio","bio</h5");

				echo "<div class='controls'>";

				echo form_textarea("bio",set_value('bio'),"placeholder='' class='textarea' width:200px; required");

				echo "</div>"; 

				echo "</div>";
				
				echo "<div class='control-group'>";	

				echo form_label("<h5>Image","image</h5");

				echo "<div class='controls'>";

				//echo form_input("file",""," type='file'  required");
				echo "<input type='file' name='image' id='file'>";

				echo "</div>"; 

				echo "</div>";

				echo "<div class='control-group'>";	

				echo form_label("<h5>Deparment</h5");

				echo "<div class='controls'>";

				echo "<select name='cid'>";
				foreach($clusters->result() as $row){
					echo "<option value='$row->cid'>$row->name</option>";
				}
				echo "</select>";

				echo "</div>"; 

				echo "</div>";

				echo "<div class='form-actions'>";					

                echo form_submit("submit","Next","class='btn btn-success'" );

				echo "</div>";

                echo form_close();



                



                ?>	

				</div>

			</div>

          </div>

      </div>



  </div>

</div>

