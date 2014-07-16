
	<div class="tophead">
    	<h1>CAREERS</h1>
        <a href="#" class="current">Careers In Health Research</a>
        <a href="<?php echo base_url(); ?>index.php/front/meet_the_staff">Meet The Staff </a>
        <a href="#">SLAS</a>
    </div>
	<div class="all margintfourtytop clrgry">
    	<div class="third"><div class="heading rotate" style="width:50%;">
          			<h1 class="hide">
                        <span class="clrgry" style="font-size:17px;">MEET THE</span> <br>
                        <span class="clrorg">STAFF</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png" class="hide"> 
                    <img src="<?php echo base_url(); ?>images/meet-the-staff.png">
        </div></div>
<div class="careerinside margintfourtytop">
		<?php foreach($people->result() as $row1) {?>

        	<div class="third bgblu">
       	    	<div class="abtimg"><!--<img src="<?php //echo base_url(); ?>images/person1.jpg" alt="person">-->
				<img src="
                <?php if(strlen($row1->image) > 15){?>
                <?php echo base_url($row1->image);?>

                <?php }elseif($row1->gender=='M'){ ?>
                 <?php echo base_url();?>components/front/images/profile-man.png
					<?php }else{ ?>  
				<?php echo base_url();?>components/front/images/profile-woman.png 
				<?php } ?>">

				</div>
                <div class="careertxt">
                	<h2><?php echo $row1->first_name.' '.$row1->last_name; ?></h2>
                    <div class="line"></div>
                    <p><?php echo $row1->name; ?></p>
                    <p><?php echo $row1->email; ?></p>
				<?php } ?>
                </div>
            </div>
    <div class="fourth">
		<div id="tabs">
				  <ul>
					<li><a href="#tabs-1">Biography</a></li>
					<li><a href="#tabs-2">Studies</a></li>
					<li><a href="#tabs-3">Accolades</a></li>
					<!--<li><a href="#tabs-4">Publications</a></li>-->
				  </ul>
			<div id="tabs-1">
				<div class="txt">
						<h4>Educational Background</h4>
						
						<?php
						$count=0;
						foreach($inst->result() as $row){ 
						$count++;
						
						if($count&1){
							?>
							<div class="half floatleft">
							<?php
						}else{
						?>
							<div class="half floatright">
							<?php
						}
						?>
						
							<div class="fromyear">
								<?php echo $row->year_from; ?> <br> &ndash; <br> <?php echo $row->year_to; ?>
								
							</div>
							<div class="txt">
								<p>Institution:</p>
								<p><?php echo $row->institution; ?></p>
								<p>Deg:</p>
								<p><?php echo $row->degree; ?> </p>
								
							</div>					
						</div>
						
						<?php
						} 
						?>
					
					<?php foreach($people->result() as $row) {?>
						<h4><!--<img src="<?php echo base_url(); ?>components/front/images/icon-work.png" alt="icon work"> --><?php echo strtoupper($row->title." ".$row->first_name." ".$row->last_name); ?><?php if(($row->pid)==22){ ?> - CHAIRMAN MALARIA PUBLIC HEALTH<?php }?></h4>
						<p><?php echo $row->bio; ?></p>
					<?php } ?>
					<!---	<h4>Some more stuff</h4>
						<p>Donec fermentum elit et metus congue elementum. Aenean ac mi nulla, et cursus neque. Cras porta interdum felis sed aliquet. Phasellus ut odio est, ut lacinia erat. Aliquam eget tellus et enim bibendum facilisis sit amet ut sem. Curabitur vitae nunc libero, a aliquet augue. </p>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur eu augue arcu, nec adipiscing odio. Fusce nec felis lectus. Pellentesque ac tempus enim. Nullam fermentum rhoncus velit eget auctor.</p>
					-->
					</div>
				
			</div>
			<div id="tabs-2">
				<div class="txt">
					<?php $cnt = 1; ?>
					<ul class="listone">
					<?php
					foreach($study->result() as $study){ ?>
							<li>
								<?php //echo substr($study->hypothesis, 0, 300);
									echo $study->name;
									echo " &mdash; <em>Principal Investigator (PI)</em>";					
								?>
							</li>
					<?php
					}
					?>
					</ul>
					
					<?php
					//studies where pid is team-member
					?>

					<ul class="listone">
					<?php
					foreach($study2->result() as $study){ ?>
						<li>
						<?php
								echo $study->name;
								echo " &mdash; <em>Team Member</em>";
						}
						?>
						</li>
					</ul> 
				</div>
			</div>
			<div id="tabs-3">
					<div class="txt">
						<ul class="listone">
						<?php $cnt1 = 1; foreach($accolades->result() as $accolates){ ?>
							<li>
								<?php echo $accolates->awarding_institution; ?></strong>-
								<?php echo $accolates->title; ?> <br/>
								<?php echo $accolates->description; ?>
							</li>
						<?php
						}
						?>
						</ul>
					</div>
			</div>
		 <!--   <div id="tabs-4">
					<div class="txt">
						<ul class="listone">
							<li>Legislative drafting and review of county laws;</li>
							<li>General advisory on legal and regulatory frameworks that govern the operations of the county government whilst promoting and accelerating investments within the county;</li>
							<li>Audit of legal instruments and county legislation to ensure compliance;</li>
							<li>preparation of a practice manual and/or a legal &amp; regulations manual to guide our clients’ officers actions and omissions;</li>
							<li>conduct training on the laws and regulations affecting our clients to ensure compliance and where necessary, provide legal clinics</li>
							<li>preparation of standard contracts for use by our clients’ various departments and agencies</li>
						</ul>
						<p>We humbly opine that we are best place to scout for suitable economic partners for our clients so as to enable them promote [and protect] social and economic development as well as provide proximate, relevant and easily accessible services.</p>
					</div>
				</div> -->
			

		</div>
	</div>
</div>
</div>
    
    

