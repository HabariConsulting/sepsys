 <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN EXTRAS PORTLET-->
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <?php
              $string = $question['title']; 
              $string = character_limiter($string, 40);
              ?>
                        <h4><i class="icon-reorder"></i>Question Asked : <?php echo $string;?></h4>
                        <div class="tools">
                           
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo site_url();?>/auth/edit_ask/<?php echo $question['ask_id']; ?>" class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
                           
                           <div class="control-group">
                              <label class="control-label">Title<span class="required">*</span></label>
                              <div class="controls">
                                 <input type="text" name="title" id="title" data-required="1" class="span6 m-wrap" value="<?php echo $question['title'];?>" />
                                 
                              </div>
                           </div> 
                           <div class="control-group">
                              <label class="control-label">Question<span class="required">*</span></label>
                              <div class="controls">

                                 <textarea class="span12 ckeditor m-wrap" name="editor1" id="editor1" rows="6"><?php echo $question['question'];?></textarea>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Tags<span class="required">*</span></label>
                              <div class="controls">
                                 <input id="tags_1" name="tags_1" type="text" class="m-wra tags" value="<?php echo $question['tags'];?>" />
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" class="btn blue">Edit Question</button>
                              <button type="button" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END EXTRAS PORTLET-->
               </div>
            </div>
           