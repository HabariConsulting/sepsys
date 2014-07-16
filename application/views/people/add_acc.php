
<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard : Add Profile</h1>
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
                        Step 3 of 3: 
                        <?php } ?>
                        Add Accolades</h4>


                        <?php
                        echo validation_errors("<li>","</li>");

                        echo form_open("people/add/acc/submit","class='form pub'");
                        echo form_hidden("pid",$people->pid);

                        echo form_label("Accolade Type");
                        echo "<br>";
                        echo form_dropdown("type",$acc_types);
                        echo "<br>";

                        echo form_textarea("title","","placeholder='Title of the accolade' required");
                        echo "<br>";
                        echo form_input("link","","placeholder='Link to more info'");
                        echo "<br>";
                        echo form_input("date_awarded",set_value("date_awarded"),"placeholder='Date awarded'");
                        echo "<br>";
                        echo form_input("awarding_institution",set_value("awarding_institution"),"placeholder='Awarding instition'");
                        echo "<br>";

                        echo form_submit("submit","Add Accolade","class='btn btn-success'");
						

                        if(!isset($v2)){
                           //echo anchor("people/profile/$people->pid","Finish","class='btn btn-success'");
						   echo anchor("people/add/inst","Next &#187;","class='btn btn-success'");
                       }else{
                           echo form_hidden("v2","1");
                       }
					   
					   
                       echo form_close();
                       ?>

                   </div>

                   <div class="span6">
                    <h5>Added Accolades</h5>

                    <ul class="acc">
                       <?php
                       foreach($accolades->result() as $row){
                          echo "<li>$row->type : $row->title ";
                          if($row->link != '') echo "&rarr; ".anchor($row->link,"link","target=_blank");
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
