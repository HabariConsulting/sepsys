 <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN EXTRAS PORTLET-->
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>New Client</h4>
                        <div class="tools">
                           
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo site_url();?>/auth/save_client" class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
                           
                           <div class="control-group">
                              <label class="control-label">Client Name:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="client_name" id="client_name" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">E-mail Address:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="email" id="email" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Phone Number:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="p_number" id="p_number" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Physical Location:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="location" id="location" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Postal Address:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="address" id="address" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Contact Person:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="contact" id="contact" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Contact Person Number:<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="c_number" id="c_number" data-required="1" class="span6 m-wrap" />
                                 
                              </div>
                           </div> 
                          
                           
                           <div class="form-actions">
                              <button type="submit" class="btn blue">Save Client</button>
                              <a href="<?php echo site_url();?>/auth/departments"><button type="button" class="btn">Cancel</button></a>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END EXTRAS PORTLET-->
               </div>
            </div>
           