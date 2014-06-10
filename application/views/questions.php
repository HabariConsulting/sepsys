
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid profile">
					<div class="span12">
						<!--BEGIN TABS-->
						 <div class="portlet">
							<div class="portlet-title">
								<h4><i class="icon-shopping-cart"></i>Advance Table</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th></th>
                                            <th class="hidden-phone"><i class="icon-question-sign"></i> Title</th>
											<th><i class="icon-briefcase"></i> Date Published</th>
											<th><i class="icon-bookmark"></i> Inquirer</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									$num=1;
									 foreach ($question_fetch->result() as $row) { ?>
										<tr>
											<td><?php echo $num;?></td>
                                            <td>
<?php
              $string = $row->title; 
              $string = character_limiter($string, 40);
              ?>
                                            	<?php echo $string; ?></td>
											<td><?php echo $row->date_asked; ?></td>
											<td><?php echo $row->username; ?></td>
											<td><a href="<?php echo base_url();?>index.php/auth/view_question/<?php echo $row->ask_id; ?>" class="btn mini blue-stripe">View</a>&nbsp;&nbsp;&nbsp;
	<?php if($row->answered==0){?>
    		<a href="#" class="btn mini red-stripe">Unanswered</a>
    <?php } else{?>
   			 <a href="#" class="btn mini green-stripe">Answered</a>
    <?php }?>&nbsp;&nbsp;&nbsp;
    <?php if($row->is_redundant==0){?>
    		<a href="#" class="btn mini green-stripe">Valid</a>
    <?php } else{?>
   			 <a href="#" class="btn mini red-stripe">Redundant</a>
    <?php }?>&nbsp;&nbsp;&nbsp;
     <a href="<?php echo base_url();?>index.php/auth/delete_question/<?php echo $row->ask_id; ?>" class="btn mini red-stripe">Delete</a>
                                            </td>
										</tr>
										 
										 <?php $num++;}
										  ?>
									</tbody>
								</table>
							</div>
						</div>
						<!--END TABS-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
