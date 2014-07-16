	<div class="tophead">
    	<h1>CAREERS</h1>
        <a href="<?php echo base_url(); ?>index.php/front/health_research_careers" >Careers In Health Research</a>
        <a href="<?php echo base_url(); ?>index.php/front/meet_the_staff" class="current">Meet The Staff </a>
        <a href="#">SLAS</a>
    </div>
	<div class="all margintfourtytop clrgry">
    	<div class="third">
				<div class="heading rotate" style="width:50%;">
          			<h1 class="hide">
                        <span class="clrgry" style="font-size:17px;">MEET THE</span> <br>
                        <span class="clrorg">STAFF</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png" class="hide"> 
                    <img src="<?php echo base_url(); ?>images/meet-the-staff.png">
				</div>
		</div>
        <div  id="demo" class="all margintfourtytop bgwht"  class="box jplist">
        	<div class="searchtop panel" data-sticky="true">
            	<div class="quater floatleft drop-down" 
							 data-control-type="drop-down" 
							 data-control-name="paging" 
							 data-control-action="paging">
						 <ul>
							<li><span data-number="3"> 3 per page </span></li>
							<li><span data-number="9"> 9 per page </span></li>            
							<li><span data-number="15" data-default="true"> 15 per page </span></li>
							<li><span data-number="21"> 21 per page </span></li>
							<li><span data-number="all"> view all </span></li>
						 </ul>
                </div>
				
				  <div 
					 class="drop-down quater floatleft" 
					 data-control-type="drop-down" 
					 data-control-name="sort" 
					 data-control-action="sort">
					 <ul>
						<li><span data-path="default" data-default="true">Search by</span></li>
						<li><span data-path=".nameorder" data-order="asc" data-type="text">Name A-Z</span></li>
						<li><span data-path=".nameorder" data-order="desc" data-type="text">Name Z-A</span></li>
						
					 </ul>
				  </div>
				  

						  <!-- filter -->
			  <div class="filter quater floatleft">	

				 <!--[if IE]><div class="search-title left">Filter by title: </div><![endif]-->
				 <input 
					data-path=".nameorder" 
					type="text" 
					value="" 
					placeholder="Filter by Name" 
					data-control-type="textbox" 
					data-control-name="title-filter" 
					data-control-action="filter" />
				 
				 <!--[if IE]><div class="search-title left">Filter by description: </div><![endif]-->			
				 <!--
				 <input 
					data-path=".desc" 
					type="text" 
					value="" 
					placeholder="Filter by description" 
					data-control-type="textbox" 
					data-control-name="desc-filter" 
					data-control-action="filter" />	
					-->
			  </div> 
				

			  <div 
				 class="paging-results floatleft" 
				 data-type="Page {current} of {pages}" 
				 data-control-type="label" 
				 data-control-name="paging" 
				 data-control-action="paging">
			  </div>
	 
			  <div 
				 class="paging floatleft" 
				 data-control-type="placeholder" 
				 data-control-name="paging" 
				 data-control-action="paging">
			  </div>
            </div>
			
            <div class="all itemouter">
					<?php foreach($people->result() as $row){ ?>				
					
							<div class="career">
								<div class="pic"><img src="
													<?php if(strlen($row->image) > 15){?>
													<?php echo base_url($row->image);?>

													<?php }elseif($row->gender=='M'){ ?>
													 <?php echo base_url();?>people_images/profile-man.png
														<?php }else{ ?>  
													<?php echo base_url();?>people_images/profile-woman.png 
													<?php } ?>
													" alt="">
								</div>
								<div class="txt">
									<h3 class="nameorder"><?php echo $row->title . " " .$row->first_name . " " .$row->last_name; ?></h3>
									<div class="line"></div>
								  <p><?php echo $row->email; ?> </br> <?php echo $row->name; ?></p>
								</div>
								<div class="all">
								<?php 
									$css_class = array('class' => 'readmorethree');	
									echo anchor('front/staff_profile/'.$row->pid, ' View Full Profile',$css_class); 
								?>
									<!--<a href="careers-inside.html" class="readmorethree">view full profile</a> -->
								</div>
							</div>
				   
					<?php 	
					} 
					?>
			</div>
			
			
		</div>
    </div>
   
</div>
