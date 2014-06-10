<script language="javascript">
fields = 0;
num=6;
function addInput() {
if (fields != 15) {

 

document.getElementById('text').innerHTML += "<div class='control-group'><label class='control-label'>Question "+num+"<span id='demo'></span></label><div class='controls'><input type='hidden' value='"+num+"' class='span6 m-wrap' name='question_number[]'/><input type='text' class='span6 m-wrap' name='question[]'/></div></div><div style='padding-left:40px'><div class='control-group'><label class='control-label'>A. </label><div class='controls'><input type='text' name='A_option[]' class='span6 m-wrap' style='background-color:#f2f2f2'/></div></div><div class='control-group'><label class='control-label'>B. </label><div class='controls'><input type='text' name='B_option[]' class='span6 m-wrap' style='background-color:#f2f2f2'/></div></div><div class='control-group'><label class='control-label'>C. </label><div class='controls'><input type='text' name='C_option[]' class='span6 m-wrap' style='background-color:#f2f2f2' /></div></div><div class='control-group'><label class='control-label'>D. </label><div class='controls'><input type='text' name='D_option[]' class='span6 m-wrap' style='background-color:#f2f2f2'/></div></div><div class='control-group'><label class='control-label' style='color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px'>Answer</label><div class='controls'><select class='small m-wrap' name='answer[]' tabindex='1'>'<option value='A'>A</option>'<option value='B'>B</option><option value='C'>C</option><option value='D'>D</option></select></div></div><br/></div>";
fields += 1;
num += 1;
} else {
document.getElementById('text').innerHTML += "<br />Only 10 upload fields allowed.";
document.form.add.disabled=true;
}
}
</script>
<style>
	#text{
		margin-left:-40px;	
		}
</style>
<!-- END HEAD -->
 
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box  " id="form_wizard_1">
                     
                     <div class="portlet-body form"> 

 
                        <form action="<?php echo base_url();?>index.php/auth/save_question" class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
                           <div class="form-wizard">
                               
                               
                              <div class="tab-content">
                                 <div class="tab-pane active" >
                                    <h3 class="block">Basic information set : <?php echo $quizdet_fetch['Quiz_title'];?></h3>
                                    <hr style="margin-top:-10px;margin-bottom:20px"><br/>
                                    <div class="control-group">
                                       <label class="control-label">Title</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" name="Quiz_title" value="<?php echo $quizdet_fetch['Quiz_title'];?>"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Provide a title for the quiz</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">About</label>
                                      <div class="controls">
                                          <textarea class="span6 m-wrap" rows="3" name="Quiz_desc"><?php echo $quizdet_fetch['Quiz_desc'];?></textarea>
                                        
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Provide a short desc. about the quiz</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Active As From</label>
                                       <div class="controls">
                                          <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" name="Quiz_active_date" value="<?php echo $quizdet_fetch['Quiz_active_date'];?>" /><span class="add-on"><i class="icon-calendar"></i></span>
                                 </div>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Enter date when quiz will be active</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Pull Down Date</label>
                                       <div class="controls">
                                          <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" name="Quiz_expiry_date" size="16" type="text" value="<?php echo $quizdet_fetch['Quiz_expiry_date'];?>" /><span class="add-on"><i class="icon-calendar"></i></span>
                                 </div>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Enter date when quiz will expire</span>
                                       </div>
                                    </div><br/><br/>
                         <h3 class="block">Questions set</h3>
                                    <hr style="margin-top:-10px;margin-bottom:20px"><br/>
                                    <div class="control-group">
                              <label class="control-label">Test Video</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="test_video" class="default" value="<?php echo $quizdet_fetch['quiz_test_video'];?>"/>
                                    </span>
                                    <span class="fileupload-preview"></span>
                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
                                 </div>
                              </div>
                           </div>
                           <?php foreach ($quiz_question_fetch->result() as $row) { ?>
                                    <div class="control-group">
                                       <label class="control-label"><?php echo $row->question_number;?></label>
                                       <div class="controls">
                                          <input type="hidden" name='question_number[]' value="1" class="span6 m-wrap" /> 
                                          <input type="text" name='question[]' class="span6 m-wrap" value="<?php echo $row->question;?>"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in question</span>
                                       </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" value="<?php echo $row->A_option;?>"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option A</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" value="<?php echo $row->B_option;?>"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option B</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" value="<?php echo $row->C_option;?>" />
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option C</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' name='optionA' class="span6 m-wrap" style="background-color:#f2f2f2" value="<?php echo $row->D_option;?>"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option D</span>
                                       </div>
                                    </div>
									
                                     <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="<?php echo $row->answer;?>"><?php echo $row->answer;?></option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
                                    </div>
                                    <?php } ?>
                                    <!--End of Part --> 
                                    <!--Start of question -->
                                     
 
                                    <!--End of Part --> 
                                    <div align="right" style="width:630px;padding-bottom:50px;">
                                        <a href="javascript:;" class="btn blue button-submit" onclick="addInput()" name="add">
                                            More Questions <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                    
                                 </div>
               
                               
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <input type="submit" class="btn green button-submit" value="Submit"/>
                                  
                                 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         
   