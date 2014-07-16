<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard: People Profiles</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-

home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
               <div class="row-fluid">              

						<div class="heading">
							<h3><?php echo $basic->title." ".$basic->first_name." ".$basic->last_name; ?> 
							</h3>
						</div>
				</div>
					
				<div class="row-fluid">
					<div class="span3">	
						<div class="widget-box">
							<div class="widget-title">

								<h4><center>Basic Information &nbsp&nbsp&nbsp
									<?php echo anchor("people/edit/basic/$basic->pid","Edit","class='btn btn-success btn-mini'"); ?>
								</h4>
							</div>
							<div class="widget-content">
											<?php
											echo "<img src='"  . base_url() . $basic->image . "' style='height:150px;' >";
											echo form_label("<h5>Bio</h5>");
											echo "<p>$basic->bio</p>";
											echo "<p><strong>Phone Number: </strong>$basic->tel</p>";
											echo "<p><strong>Email:</strong> $basic->email</p>";
											echo "<p><strong></strong>".anchor($basic->fb,"Facebook","target=_blank");
											echo "<p><strong></strong>".anchor($basic->twitter,"Twitter","target=_blank");
											echo "<p><strong></strong>".anchor($basic->linkedin,"LinkedIn","target=_blank");
											echo "<p><strong></strong>".anchor($basic->researchgate,"Google Scholar","target=_blank"); 
											?> 
						</div>
					</div>
					</div>
				
					<div class="span3">	
						<div class="widget-box">
						<div class="widget-title">

							<h4><center>Featured Publications 
								<?php echo anchor("people/pub/add/all/0/$basic->pid","Add","class='btn btn-success btn-mini'"); ?>
							</h4>
						</div>
						<div class="widget-content">
							
							<?php foreach($featured_pub->result() as $row){ ?>
								<li class="ext"><?php echo anchor("publications/view_detail/$row->pubid",$row->title,"target=_blank"); ?>
									<?php echo "<br/>".anchor("people/pub/del/featured/$row->ppid/$row->pid","<i class='icon-remove'></i>","class='del'"); ?>
								</li>
							<?php } ?>	
										
						</div>
			</div>
					</div>
					
					
					<div class="span3">	
						<div class="widget-box">
						<div class="widget-title">

							<h4><center>Accolades 
								<?php echo anchor("people/acc/add/$basic->pid","Add","class='btn btn-success btn-mini'"); ?></center> 
							</h4>
						</div>
						<div class="widget-content nopadding">
							<ul class="acc">
								 <?php
										foreach($accolades->result() as $row){
											echo "<li>$row->type : $row->title ";
											if($row->link != '') echo "&rarr; ".anchor($row->link,"link","target=_blank")." ";
											echo "<br/>";
											echo "<i>Awarded by $row->awarding_institution</i><br/>";
											echo anchor("people/acc/edit/$row->pid/$row->aid","<i class='icon-edit'></i>","class='edit'")." ".anchor("people/acc/del/$basic->pid/$row->aid","<i class='icon-remove'></i>","class='del'");
											echo "</li>";
										}
										?>	
							</ul>
					</div>
				</div>
					</div>
					
					<div class="span3">	
						<div class="widget-box">
						<div class="widget-title">

							<h4><center>Institution 
								<?php echo anchor("people/inst/add/$basic->pid","Add","class='btn btn-success btn-mini'"); ?></center> 
							</h4>
						</div>
						<div class="widget-content nopadding">
							<ul class="acc">
								 <?php
										foreach($institutions->result() as $row){
											echo "<li>$row->institution : $row->degree ";
											//if($row->link != '') echo "&rarr; ".anchor($row->link,"link","target=_blank")." ";											
											//echo "<br/>";											
											//echo anchor("people/acc/edit/$row->pid/$row->aid","<i class='icon-edit'></i>","class='edit'")." ".anchor("people/acc/del/$basic->pid/$row->aid","<i class='icon-remove'></i>","class='del'");
											echo anchor("people/inst/edit/$row->pid/$row->eid","<i class='icon-edit'></i>","class='edit'")." ".anchor("people/inst/del/$basic->pid/$row->eid","<i class='icon-remove'></i>","class='del'");
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
        
    </div>
</div>


