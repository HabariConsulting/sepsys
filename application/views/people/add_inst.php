
<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard: Add Profile</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">People Profile</a>
    </div>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
            	
                <div class="row-fluid">
                    <h3>Profile</h3>                
                    <div class="widget-box span3" >

                        <div class="widget-content nopadding ">
                            <ul class="activity-list">
                                <li><a href="#">
                                    <i class="icon-user"></i>
                                    <strong><?php echo $people->title." ".$people->first_name." ".$people->last_name; ?></strong> 
                                </a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">

                  <div class="span6">

                     <h4>
                        <?php if(!isset($v2)){ ?>
                        Step 4 of 4: 
                        <?php } ?>
                        Add Institutions</h4>


                        <?php
                        echo validation_errors("<li>","</li>");

                        echo form_open("people/add/inst/submit","class='form pub'");
                        echo form_hidden("pid",$people->pid);

                        echo form_label("Institutions Attended");
                   
						echo form_input("year_from",set_value("year_from"),"placeholder='Year From'");
                        echo "<br>";
						echo form_input("year_to",set_value("year_to"),"placeholder='Year To'"); 
						echo "<br>";
						echo form_input("institution",set_value("institution"),"placeholder='Institution'"); 
						echo "<br>";
						echo form_input("degree",set_value("degree"),"placeholder='Degree'"); 
						echo "<br>";

                        

                        echo form_submit("submit","Add Institution","class='btn btn-success'"); 
						
						

                        if(!isset($v2)){
                           echo anchor("people/profile/$people->pid","Finish","class='btn btn-success'");
                       }else{
                           echo form_hidden("v2","1");
                       }
					   
					   
                       echo form_close();
                       ?>

                   </div>

                   <div class="span6">
                    <h5>Added Institutions</h5>

                    <ul class="acc">
                       <?php
                       foreach($inst->result() as $row){
                          echo "<li>$row->degree : $row->institution";                           
                          echo "</li>";
                      }
                      ?>
                  </ul>

              </div>

          </div>
          
      </div>
  </div>
  
</div>
</div>
