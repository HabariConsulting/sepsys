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
                                    <h3 class="block">Test : <?php echo $quizdet_fetch['Quiz_title'];?>
                                    <a href="<?php echo base_url();?>index.php/auth/edit_quiz/<?php echo $quizdet_fetch['Quiz_id'];?>"><input type="button" class="btn blue" value="Edit Test" style="float:right; width:150px; padding:10px;"/></a>
                                    </h3>
                                    <hr style="margin-top:-10px;margin-bottom:20px"><br/>
                                    <div><table width="1088" border="0">
  <tr>
    <td width="54" height="25" valign="top"><img src="<?php echo base_url();?>assets/img/icon/title.png" height="25"/></td>
    <td width="618" style="font-weight:bold; font-size:18px"><?php echo $quizdet_fetch['Quiz_title'];?></td>
    <td width="117" align="right" style="font-weight:600">Active on:</td>
    <td width="103" align="center"><?php echo $quizdet_fetch['Quiz_active_date'];?></td>
    <td width="174" valign="top"><img src="<?php echo base_url();?>assets/img/icon/calendar.png"/></td>
  </tr>
  <tr>
    <td width="54"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td valign="top"><img src="<?php echo base_url();?>assets/img/icon/infor.png" height="25"/></td>
    <td><?php echo $quizdet_fetch['Quiz_desc'];?></td>
    <td align="right" valign="top" style="font-weight:600">Expiry:</td>
    <td align="center" valign="top" ><?php echo $quizdet_fetch['Quiz_expiry_date'];?></td>
    <td valign="top"><img src="<?php echo base_url();?>assets/img/icon/calendar.png"/></td>
  </tr>
</table>
  
                                    <br/>
                                   <div style="margin-left:60px"> 
                                    <?php echo $quizdet_fetch['quiz_test_video'];?>
                                   </div>
                                   </div>
                                </div>
                                
                           </div><br/><br/>
                           <?php foreach ($quiz_question_fetch->result() as $row) { ?>
                                    <div style="background-color:#ddd; min-width:10px; padding:30px; font-size:30px; margin-top:20px; position:absolute; right:20%; text-align:center; border:solid 3px #aaa;color:#fff;">
                                          <?php echo $row->answer;?>
                                       </div>
                                    <div class="control-group">
                                       <label class="control-label"><?php echo $row->question_number;?></label>
                                       <div class="controls" style="margin-top:6px">
									   <?php echo $row->question;?>
                                        </div>
                                    </div>
                                    <div style="padding-left:40px">
                                    <div class="control-group">
                                       <label class="control-label"><img src="<?php echo base_url();?>assets/img/icon/A.png" height="5"/> </label>
                                       <div class="controls" style="margin-top:10px">
                                         <?php echo $row->A_option;?>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label"><img src="<?php echo base_url();?>assets/img/icon/B.png" height="5"/> </label>
                                       <div class="controls" style="margin-top:10px">
                                         <?php echo $row->B_option;?>
                                          
                                          </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label"><img src="<?php echo base_url();?>assets/img/icon/C.png" height="5"/> </label>
                                       <div class="controls" style="margin-top:10px">
                                          <?php echo $row->C_option;?>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label"><img src="<?php echo base_url();?>assets/img/icon/D.png" height="5"/> </label>
                                       <div class="controls" style="margin-top:10px">
                                          <?php echo $row->D_option;?>
                                          
                                       </div>
                                    </div>
									
                                      <br/>
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
                                
                                  
                                 
                                  
                                 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         
   