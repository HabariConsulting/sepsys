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
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i>Create Quiz <span class="step-title">Step 1 of 2</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form"> 

 
                        <form action="<?php echo base_url();?>index.php/auth/save_question" class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Quiz Registration</span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab2" data-toggle="tab" class="step">
                                          <span class="number">2</span>
                                          <span class="desc"><i class="icon-ok"></i> Setting Quiz Q & A</span>   
                                          </a>
                                       </li>
                                       
                                      
                                    </ul>
                                 </div>
                              </div>
                              <div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Enter Quiz Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Title</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" name="Quiz_title"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Provide a title for the quiz</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">About</label>
                                      <div class="controls">
                                          <textarea class="span6 m-wrap" rows="3" name="Quiz_desc"></textarea>
                                        
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Provide a short desc. about the quiz</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Active As From</label>
                                       <div class="controls">
                                          <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" name="Quiz_active_date" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                 </div>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Enter date when quiz will be active</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Pull Down Date</label>
                                       <div class="controls">
                                          <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" name="Quiz_expiry_date" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                 </div>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Enter date when quiz will expire</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="block">Create Quiz Q & A's</h3>
                                    <!--Start of question -->
                                    <div class="control-group">
                              <label class="control-label">Test Video</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="test_video" class="default" />
                                    </span>
                                    <span class="fileupload-preview"></span>
                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
                                 </div>
                              </div>
                           </div>
                                    <div class="control-group">
                                       <label class="control-label">Question 1</label>
                                       <div class="controls">
                                          <input type="hidden" name='question_number[]' value="1" class="span6 m-wrap" /> 
                                          <input type="text" name='question[]' class="span6 m-wrap" />
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in question</span>
                                       </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option A</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option B</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" />
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option C</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' name='optionA' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                          <span class="help-inline" style="color:#35AA47;font-size:11px">Fill in answer option D</span>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
                                    </div>
                                    <!--End of Part --> 
                                    <!--Start of question -->
                                    <div class="control-group">
                                       <label class="control-label">Question 2</label>
                                       <div class="controls">
                                          <input type="text" name='question[]' class="span6 m-wrap" />
                                          <input type="hidden" name='question_number[]' value="2" class="span6 m-wrap" /> 
                                       </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" />
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
                                    </div>
                                    <!--End of Part --> 
                                    <!--Start of question -->
                                    <div class="control-group">
                                       <label class="control-label">Question 3</label>
                                       <div class="controls">
                                       <input type="hidden" name='question_number[]' value="3" class="span6 m-wrap" /> 
                                          <input type="text" name='question[]' class="span6 m-wrap" />
                                          
                                       </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" />
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
                                    </div>
                                    <!--End of Part --> 
                                    <!--Start of question -->
                                    <div class="control-group">
                                       <label class="control-label">Question 4</label>
                                       <div class="controls">
                                       <input type="hidden" name='question_number[]' value="4" class="span6 m-wrap" /> 
                                          <input type="text" name='question[]' class="span6 m-wrap" />
                                           
                                       </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" />
                                           
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                           
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
                                    </div>
                                    <!--End of Part --> 
                                     
                                    <!--Start of question -->
                                    <div class="control-group">
                                       <label class="control-label">Question 5</label>
                                       <div class="controls">
                                       <input type="hidden" name='question_number[]' value="5" class="span6 m-wrap" /> 
                                          <input type="text" name='question[]' class="span6 m-wrap" />
                                        </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label">A. </label>
                                       <div class="controls">
                                          <input type="text" name='A_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">B. </label>
                                       <div class="controls">
                                          <input type="text" name='B_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">C. </label>
                                       <div class="controls">
                                          <input type="text" name='C_option[]' class="span6 m-wrap" style="background-color:#f2f2f2" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">D. </label>
                                       <div class="controls">
                                          <input type="text" name='D_option[]' class="span6 m-wrap" style="background-color:#f2f2f2"/>
                                        </div>
                                    </div>
                                    
 <div class="control-group">
                                       <label class="control-label" style="color:#35AA47;font-weight:bold;text-transform:uppercase;font-size:11px">Answer</label>
                                       <div class="controls">
                                          <select class="small m-wrap" name="answer[]" tabindex="1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </div>
                                    </div><br/>
 
<div id="text">

</div>
                                    </div>
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
         
   