	<div class="tophead">
    	<h1>ABOUT US</h1>
        <a href="<?php echo base_url(); ?>index.php/front/about_kwtrp">KEMRI &ndash; Wellcome Trust Research Programme</a>
        <a href="<?php echo base_url(); ?>index.php/front/about_kemri">KEMRI </a>
        <a href="<?php echo base_url(); ?>index.php/front/about_sep">Schools Engagement Programme</a>
    </div>
<?php foreach($aboutcontent as $abcontent) 
{
?>		

    <div class="alltwo margintfourtytop">
    	<div class="ttle">
        	<div class="heading rotate margintfourtytop">
        	<h1 class="hide">
            	<span class="clrorg">WATCH</span> <br>
                <span class="clrlime">VIDEO</span>
            </h1>
            <img src="<?php echo base_url(); ?>images/v.png" class="hide">
            
        </div><img src="<?php echo base_url(); ?>images/watch-video.png" class="rotate">
        	<p>A short description of what  we do.</p>
        </div>
        <div class="vido">
        	<iframe style="width:100%;"  height="315"  src="<?php echo $abcontent->video_link; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="all margintfourtytop">
    	<div class="half clrgry floatleft">
        	<div class="heading rotate margintfourtytop">
                <h1 class="fontsisteen hide">
                    <span class="clrgry">GET TO</span> <br>
                    <span class="clrorg">KNOW US</span>
                </h1>
                <img src="<?php echo base_url(); ?>images/v.png" class="hide">
                <img src="<?php echo base_url(); ?>images/get-to-know-us.png"> 
            </div>
        	<h2><?php echo $abcontent->main_content_title; ?></h2>
            <?php echo $abcontent->main_content; ?>
        </div>
        <div class="half floatright">
        	<div class="testimony">
            	<div class="alltxt"><?php echo $abcontent->quote; ?></div>
            </div>
        </div>
    </div>
    <div class="all margintsixtytop clrgry">
    	<div class="third floatleft">
            	<div class="abtimg"><img src="<?php echo base_url(); ?><?php echo $abcontent->about_us_image; ?>" alt="chic"></div>
        </div>
        <div class="fourth floatright margintsixtytop">
        	<?php echo $abcontent->about_us_image_desc; ?>
            <a href="<?php echo $abcontent->about_us_read_more; ?>" class="readmoretwo">Read More</a>
        </div>
    </div>
	
<?php
}
?>