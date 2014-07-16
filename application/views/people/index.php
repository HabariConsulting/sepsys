
<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard : People Profiles</h1>
    </div>
    <div id="breadcrumb">
        <a href="<?php echo base_url('index.php/people'); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="<?php echo base_url('index.php/people'); ?>" class="current">People</a>
    </div>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">

              
                <div class="row-fluid">
                    <div class="span12 center" style="text-align: left;">                 
                        <ul class="quick-actions-horizontal">
                            <li>
                                <a href="<?php echo base_url('index.php/people/add'); ?>">
                                    <i class="icon-people"></i>
                                    <span>Add Profile</span>
                                </a>
                            </li>                            
                        </ul>
                    </div>  
                </div>

                <h4>Added Profiles</h4>
                <p><span class="label label-important"><?php echo $people->num_rows; ?></span>&nbsp profiles added </p>

			  <div class="widget-box">
							<div class="widget-title">
								<span class="icon">
								<i class="icon-th"></i>
							</span>
								<h5>People Profiles</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered table-striped table-hover data-table">
									<thead>
									<tr>
									<th>Name</th>
									<th>Completeness</th>
									<th>Action</th>									
									</tr>
									</thead>
									<tbody>
									<?php
										foreach ($people->result() as $row) {
										  echo "<tr>";
										  echo "<td>$row->title $row->first_name $row->last_name</td>";
										  echo "<td>";

										  echo "</td>";
										  echo "<td class='center'>";
										  echo "<div class='btn-group'>";
										  echo anchor("people/profile/".$row->pid, "View", "class='btn btn-success btn-mini' ") ."&nbsp;&nbsp;".anchor					("people/profile_delete/".$row->pid, "Delete", "class='btn btn-danger btn-mini' "). "</td>";
										  echo "</div>";
										  echo "</tr>";
									  }
									?>
								
									
									</tbody>
									</table>  
							</div>
						</div>
          </div>
      </div>
  </div>
</div>

