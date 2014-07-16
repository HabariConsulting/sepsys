<div id="content">
	<div id="content-header">
		<h1>Admin Dashboard: Add Profile</h1>
	</div>
	<div id="breadcrumb">
		<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		<a href="#" class="current">Dashboard</a>
	</div>
	<div class="container-fluid">

		<div class="row-fluid">
			<div class="span12">		

				<div class="row-fluid">
					<h3>Profile</h3>
					
					<h4><i class="icon-user"></i>
									<strong><?php echo $people->title." ".$people->first_name." ".$people->last_name; ?></strong></h4>
								
				</div>

					<div class="row-fluid">
						<div class="span6">
							<h4><?php if(!isset($v2)){ ?>Step 2 of 3: <?php }?>Publications</h4>
							<p>Publications to be featured on the Profile (select Only five Publications)</p>
							<p><?php echo anchor("people/profile/$people->pid","<i class='icon-share'></i> Go to Profile"); ?></p>
							<p><em>Note that the <strong>profile</strong> must be added to the publication before they appear on the list</em></p>

							<?php
							echo form_open("people/add/pub/submit","class='form-horizontal pub'");
							echo form_hidden("pid",$people->pid);

							echo "<select class='span6' name='pubid'>";

							foreach($pub->result() as $row){
								echo "<option value=$row->pubid>$row->title</option>";
							}

							echo "</select>";
                          
                                                        //CHANGED BY DAVID
							echo "</br>";
							echo "</br>";
							
								echo "<div class='form-group'>";
									echo "<label class='control-label'>Rate Publication</label>";
									echo "<div class='controls'>";
									echo "<label><input type='radio' name='order' value='1'/> One</label>";
									echo "<label><input type='radio' name='order' value='2' /> Two</label>";
									echo "<label><input type='radio' name='order' value='3' /> Three</label>";
									echo "<label><input type='radio' name='order' value='4' /> Four</label>";
									echo "<label><input type='radio' name='order' value='5' /> Five</label>";
									echo "</div>";
									echo "</div>";
							//CHANGE BY DAVID	

							echo "</br>";
							echo form_submit("submit","Add","class='btn btn-success'");

							if(!isset($v2)){
								echo " ".anchor("people/add/acc","Next &#187;","class='btn btn-success'");
							}else{
								echo form_hidden("v2","1");
							}

							echo form_close();
							?>
							

						</div>

						<div class="span6">
							<h5>Added Publications</h5>

							<ul class="pub">
								<?php $cnt = 1; foreach($featured_pub->result() as $row){ ?>
								<li class="ext"><?php echo $cnt."&nbsp;&nbsp;". anchor("publications/view_detail/$row->pubid",$row->title,"target=_blank"); ?>
                                                                 &nbsp;&nbsp;<?php echo 'Order No. '.$row->order; ?></li>
								<?php $cnt++;  } ?>

							</ul>
						</div>

					</div>
				</div>
			</div>
			
		</div>
	</div>