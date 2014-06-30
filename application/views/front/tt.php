@@ -17,31 +17,24 @@
        </div>
    </div>
    <div class="all margintsixtytop">
		<div class="halftwo floatleft">
		<?php foreach($awardwinner as $winner) 
		{
		?>
   	  <div class="halftwo floatleft">
      		<div class="heading rotate margintfourtytop">
				<h1>
					<span class="clrgry">AWARD</span> <br>
					<span class="clrorg">WINNER</span>
				</h1>
			<img src="<?php echo base_url(); ?>images/v.png"> 
			</div>
			
        	<div class="circsmall"><img src="<?php echo base_url(); ?><?php echo $winner->image;  ?>" alt="chic"></div>
              <h1 class="hide">
                    <span class="clrgry">AWARD</span> <br>
                    <span class="clrorg">WINNER</span>
                </h1>
                <img src="<?php echo base_url(); ?>images/v.png" class="hide"> 
            	<img src="<?php echo base_url(); ?>images/award-winner.png" alt="award winner"> 
            </div>
        	<div class="circsmall"><img src="<?php echo base_url(); ?>images/chic.jpg" alt="chic"></div>
            <div class="circbig">
            	<h3><?php echo $winner->username;  ?></h3>
                <h4><?php echo $winner->company;  ?></h4>
					<?php echo $winner->description;  ?>
                
				<a href="#" class="viewprofile">View Profile</a> <!--A page for read more Link should be created --->
            	<h3>Jacqueline Sparrow</h3>
                <h4>Kilifi Secondary School</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros. Aenean eu lacus facilisis tellus ultricies auctor. Nam augue purus, tincidunt id eleifend sed, ullamcorper et metus. Nullam molestie ultricies ipsum non scelerisque. </p>
                <a href="#" class="viewprofile">View Profile</a>
            </div>
            <div class="circsmaller">Quiz <br>Winner</div>
		<?php 
		}
		?>	
		</div>
        </div>
      <div class="halftwo floatright bgwht">
       	<h2><span class="clrorg spacelefttop">LEAGUE TABLE</span></h2>
        <img src="<?php echo base_url(); ?>images/fam.jpg" alt="family"> 
@@ -88,6 +81,9 @@
                <div class="position"><img src="<?php echo base_url(); ?>images/static.gif" alt="no change"></div>
            </div>
            <div class="line"></div>
            <div class="all">
            	<a href="#" class="readmorethree floatright">View Full Table</a>
            </div>
        </div>
      </div>
    </div>
@@ -96,85 +92,66 @@
        	<div class="half floatleft"></div>
            <div class="half floatright">
            	<div class="heading rotatetwo margintfourtytop">
                    <h1>
                    <h1 class="hide">
                        <span class="clrgry">LATEST</span> <br>
                        <span class="clrorg">NEWS</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png"> 
                	<img src="<?php echo base_url(); ?>images/v-p.png" class="hide"> 
                    <img src="<?php echo base_url(); ?>images/latest-news.png">
        		</div>
            </div>
        </div>
    	<div class="flexslider">
	    <ul class="slides">
		
		<?php foreach($posts as $news) 
		{
		?>
	    	<li>
            	<div class="half">
				<img src="<?php echo base_url(); ?><?php echo $news->post_image; ?>" alt=""></div>
            	<div class="half"><img src="<?php echo base_url(); ?>images/tag-of-war.jpg" alt="tag of war"></div>
                <div class="flex-caption">
                	<h2>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. </h2>
                    <h3>Tuesday, November 12, 2013</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros. Aenean eu lacus facilisis tellus ultricies auctor. Nam augue purus, tincidunt id</p>
                </div>
	    	</li>
          <li>
            	<div class="half"><img src="<?php echo base_url(); ?>images/track-and-field.jpg" alt="track and field"></div>
                <div class="flex-caption">
                	<h2><?php echo $news->title; ?> </h2>
                    <h3><?php 
							$newdate=$news->date_created; 
							echo date('l , F d  , Y', strtotime($newdate));
						?>
					</h3>
                    <p><?php echo $news->content; ?></p>
                	<h2>CONSECTETUR ADIPISCING ELIT, LOREM IPSUM DOLOR SIT AMET. </h2>
                    <h3>Monday, January 12, 2014</h3>
                    <p>Nam augue purus, tincidunt id. Aenean eu lacus facilisis tellus ultricies auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros.  </p>
                </div>
	    	</li>
		<?php
		} 
		?>
	    </ul>
	  </div>
    </div>
	
<!-- The Latest News Sections -->	
    <div class="all margintfourtytop">
		<div class="half floatleft">
			<div class="heading rotate">
						<h1>
							<span class="clrgry" style="font-size:17px;">UPCOMING</span> <br>
							<span class="clrorg">EVENTS</span>
						</h1>
						<img src="<?php echo base_url(); ?>images/v-p.png"> 
			</div>
		</div>
		<div class="all">
		
		<?php foreach($sepevents as $event) 
		{
		?>
				<div class="halftwo floatleft text-center">
					<img src="<?php echo base_url(); ?>images/science-symposia.png" alt="science symposia" class="eventsimg"> 
					<h2><span class="clrpurp "><?php echo $event->image_desc; ?></span></h2>
				</div>
				<div class="halftwo floatright clrgry">
					<div class="all"> 
						<div class="eventdate">
								<?php 
								$newdate=$event->start_date; 
								echo date('l , F ', strtotime($newdate));
								?>
							<span><?php echo date('d', strtotime($newdate)); ?></span>
						</div>
						<div class="eventdatetxt">
							<p>Time: <?php echo $event->etime; ?></p>
							<p>Venue: <?php echo $event->venue; ?></p>
							<p>Hangout URL: <a href=" <?php echo $event->hangout_link; ?>" target="_blank"> <?php echo $event->hangout_link; ?></a></p>
						</div>
					</div>
					<h2 class="capittal"><?php echo $event->title; ?></h2>
					<p><?php echo $event->description; ?></p>
				</div>
		<?php
		}
		?>
		</div>
    	<div class="half floatleft"><div class="heading rotate">
                    <h1 class="hide">
                        <span class="clrgry" style="font-size:17px;">UPCOMING</span> <br>
                        <span class="clrorg">EVENTS</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png" class="hide"> 
                    <img src="<?php echo base_url(); ?>images/upcoming-events.png">
        </div></div>
   	  <div class="all">
            <div class="halftwo floatleft text-center">
       	  		<img src="<?php echo base_url(); ?>images/science-symposia.png" alt="science symposia" class="eventsimg"> 
                <h2><span class="clrpurp">SCIENCE SYMPOSIA</span></h2>
          	</div>
            <div class="halftwo floatright clrgry">
            	<div class="all">
                	<div class="eventdate">
                    	Wednesday Mar
						<span>19</span>
                    </div>
                    <div class="eventdatetxt">
                    	<p>Time: 11:00 AM - 2:00 PM</p>
                        <p>Venue: Kilifi Primary Ampitheater</p>
                        <p>Hangout URL: <a href="https://www.kemri-wellcome.org" target="_blank">https://www.kemri-wellcome.org</a></p>
                    </div>
                </div>
            	<h2>CONSECTETUR ADIPISCING ELIT, LOREM IPSUM DOLOR SIT AMET. </h2>
                <p>Nam augue purus, tincidunt id. Aenean eu lacus facilisis tellus ultricies auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros.  </p>
            </div>
        </div>
    </div>
</div>
