 <!-- BEGIN PAGE CONTENT-->
 <div class="row-fluid">
					<div class="span12">
						<!-- BEGIN ALERTS PORTLET-->
						<div class="portlet ">
							<div class="portlet-title">
								 
							</div>
							<div class="portlet-body">
							 
								<div class="alert alert-success">
									<button class="close" data-dismiss="alert"></button>
									<strong>Success!</strong> You have been registered into the system successfully.
								</div>
								 
							 
							</div>
						</div>
						<!-- END ALERTS PORTLET-->
					</div>
				</div>
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box red">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Complete Registration</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                   <form class="form-horizontal" action="<?php echo base_url();?>index.php/welcome/register_company" method="post" enctype="multipart/form-data">
                        
                           <div class="control-group">
                              <label class="control-label">Company Name</label>
                              <div class="controls">
                                 <input type="text" class="span6 m-wrap" name="company_name" value="<?php echo $this->session->userdata("company_name");?>" disabled="disabled" style="background-color:#eee"/>
                               </div>
                           </div>
                            <div class="control-group">
                              <label class="control-label">Brief Summary</label>
                              <div class="controls">
                                 <textarea class="span6 m-wrap" rows="3" name="summary"></textarea>
                              </div>
                           </div>
                            <div class="control-group">
                              <label class="control-label">P.O Box</label>
                              <div class="controls">
                                 <input type="text" class="span6 m-wrap" name="pobox"/>
                               </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Logo</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                       <div class="uneditable-input">
                                          <i class="icon-file fileupload-exists"></i> 
                                          <span class="fileupload-preview"></span>
                                       </div>
                                       <span class="btn btn-file">
                                       <span class="fileupload-new">Select file</span>
                                       <span class="fileupload-exists">Change</span>
                                       
                                       <input type="file" class="default" name="company_logo" id="company_logo"/>
                                       </span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            
                           <div class="form-actions">
                              <button type="submit" class="btn red">Submit</button>
                              <a href="<?php echo site_url();?>/welcome/home"><button type="button" class="btn green">Skip this step</button></a>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
            
             
            <!-- END PAGE CONTENT-->         