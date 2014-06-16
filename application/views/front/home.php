
	<div class="scientist">
    	<div class="img"><img src="<?php echo base_url(); ?>images/scientist.png" alt="scientist"></div>
        <div class="txt">
        	<h1>ASK A SCIENTIST</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros. Aenean eu lacus facilisis tellus ultricies auctor. Nam augue purus, tincidunt id eleifend sed, ullamcorper et metus. Nullam molestie ultricies ipsum non scelerisque.  </p>
          <p>LOREM IPSUM DOLOR SIT AMET.</p>
          <a href="#" class="readmore">START LEARNING</a>
        </div>
        <div class="pic">
        	<img src="<?php echo base_url(); ?>images/mwan-sayansi.png" alt="mwan sayansi"> 
            <span>
           		<h3>Mwan .A. Sayansi</h3>
                <p>Head Researcher </p>
                <p>Human, Pathogen, and Vector Biology</p>
            </span>
        </div>
    </div>
    <div class="all margintsixtytop">
   	  <div class="halftwo floatleft">
      		<div class="heading rotate margintfourtytop">
        	<h1>
            	<span class="clrgry">AWARD</span> <br>
                <span class="clrorg">WINNER</span>
            </h1>
        <img src="<?php echo base_url(); ?>images/v.png"> </div>
        	<div class="circsmall"><img src="images/chic.jpg" alt="chic"></div>
            <div class="circbig">
            	<h3>Jacqueline Sparrow</h3>
                <h4>Kilifi Secondary School</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna, ac tincidunt eros. Aenean eu lacus facilisis tellus ultricies auctor. Nam augue purus, tincidunt id eleifend sed, ullamcorper et metus. Nullam molestie ultricies ipsum non scelerisque. </p>
                <a href="#" class="viewprofile">View Profile</a>
            </div>
            <div class="circsmaller">Quiz <br>Winner</div>
        </div>
      <div class="halftwo floatright bgwht">
       	<h2><span class="clrorg spacelefttop">LEAGUE TABLE</span></h2>
        <img src="<?php echo base_url(); ?>images/fam.jpg" alt="family"> 
        <h3><span class="clrpurp spacelefttop">LEADING SCHOOL</span></h3>
        <div class="leaguetable clrlblu">
        	<div class="line"></div>
            <div class="all">
            	<div class="no">1</div>
                <div class="txt">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna.</p>
                    <div class="half floatleft">Points <span>25</span></div>
                    <div class="half floatright">Weeks Running <span>5</span></div>
                </div>
                <div class="position"><img src="<?php echo base_url(); ?>images/static.gif" alt="no change"></div>
            </div>
            <div class="line"></div>
            <div class="all">
           	  <div class="no">2</div>
              <div class="txt">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna.</p>
                    <div class="half floatleft">Points <span>25</span></div>
                    <div class="half floatright">Weeks Running <span>5</span></div>
                </div>
                <div class="position"><img src="<?php echo base_url(); ?>images/down.gif" alt="moved down"></div>
            </div>
            <div class="line"></div>
            <div class="all">
            	<div class="no">3</div>
                <div class="txt">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna.</p>
                    <div class="half floatleft">Points <span>25</span></div>
                    <div class="half floatright">Weeks Running <span>5</span></div>
                </div>
                <div class="position"><img src="<?php echo base_url(); ?>images/up.gif" alt="moved up"></div>
            </div>
            <div class="line"></div>
            <div class="all">
           	  <div class="no">4</div>
              <div class="txt">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet massa urna.</p>
                    <div class="half floatleft">Points <span>25</span></div>
                    <div class="half floatright">Weeks Running <span>5</span></div>
                </div>
                <div class="position"><img src="<?php echo base_url(); ?>images/static.gif" alt="no change"></div>
            </div>
            <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="all margintfourtytop">
    	<div class="all">
        	<div class="half floatleft"></div>
            <div class="half floatright">
            	<div class="heading rotatetwo margintfourtytop">
                    <h1>
                        <span class="clrgry">LATEST</span> <br>
                        <span class="clrorg">NEWS</span>
                    </h1>
                	<img src="<?php echo base_url(); ?>images/v-p.png"> 
        		</div>
            </div>
        </div>
    	<div class="flexslider">
	    <ul class="slides">
		
		<?php foreach($posts as $news) 
		{
		?>
	    	<li>
            	<div class="half"><img src="<?php echo base_url(); ?>images/tag-of-war.jpg" alt="tag of war"></div>
                <div class="flex-caption">
                	<h2><?php echo $news->title; ?> </h2>
                    <h3><?php echo $news->date_created; ?></h3>
                    <p><?php echo $news->content; ?></p>
                </div>
	    	</li>
		<?php
		} 
		?>
	    </ul>
	  </div>
    </div>
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

