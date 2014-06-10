
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
											<th><i class="icon-briefcase"></i> Active From</th>
											<th><i class="icon-bookmark"></i> Valid Until</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									$num=1;
									 foreach ($db_quiz_fetch->result() as $row) { ?>
										<tr>
											<td><?php echo $num;?></td>
                                            <td><?php echo $row->Quiz_title; ?></td>
											<td><?php echo $row->Quiz_active_date; ?></td>
											<td><?php echo $row->Quiz_expiry_date; ?></td>
											<td><a href="<?php echo base_url();?>index.php/auth/view_quiz/<?php echo $row->Quiz_id; ?>" class="btn mini blue-stripe">View</a>&nbsp;&nbsp;&nbsp;
	<?php if($row->is_activated==0){?>
    		<a href="<?php echo base_url();?>index.php/auth/acivate/<?php echo $row->Quiz_id; ?>" class="btn mini green-stripe">Activate</a>
    <?php } else{?>
   			 <a href="<?php echo base_url();?>index.php/auth/deacivate/<?php echo $row->Quiz_id; ?>" class="btn mini red-stripe">Deactivate</a>
    <?php }?>&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url();?>index.php/auth/delete_quiz/<?php echo $row->Quiz_id; ?>" class="btn mini red-stripe">Delete Test</a>
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
