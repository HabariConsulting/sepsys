
	<div class="tophead">
    	<h1>CAREERS</h1>
        <a href="<?php echo base_url(); ?>index.php/front/health_research_careers" >Careers In Health Research</a>
        <a href="<?php echo base_url(); ?>index.php/front/meet_the_staff" class="current">Meet The Staff </a>
        <a href="#">SLAS</a>
    </div>
    <div class="alltwo margintfourtytop">
		<?php foreach($careers as $row) {?>
    	<div class="ttle">
        	<div class="heading rotate margintfourtytop">
        	<h1 class="hide">
            	<span class="clrorg">ABOUT THE</span> <br>
                <span class="clrlime">INDUSTRY</span>
            </h1>
            <img src="<?php echo base_url(); ?>images/v.png" class="hide">
            
        </div><img src="<?php echo base_url(); ?>images/about-the-indeustry.png" class="rotate">
        	<p><?php echo $row->video_side_quote; ?></p>
        </div>
        <div class="vido">
        	<iframe style="width:100%;" height="315" src="<?php echo $row->video_link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="all margintfourtytop">
    	<div class="third">
   	    	<img src="<?php echo base_url(); ?><?php echo $row->main_content_image; ?>" alt="health research"> 
        </div>
        <div class="fourth clrgry margintfourtytop">
        	<?php echo $row->main_content; ?>
        </div>
	<?php
	}
	?>
  </div>