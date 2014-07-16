


<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard: Edit Profile</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                
            	<h3>Profile</h3>
            	<p><?php echo $people->title." ".$people->first_name." ".$people->last_name; ?></p>

            	<div class="row">

            		<div class="span6">

            			<h4>Edit Publication</h4>


            			<?php
            			echo form_open("people/pub/update","class='form pub'");
            			echo form_hidden("pid",$people->pid);

            			
            			echo "<div class='external'>";
            			
						echo form_hidden("pubid",$edit_pub->epid);
						echo form_hidden("epid",$edit_pub->epid);
						echo form_textarea("title",$edit_pub->title,"placeholder='Title of Publication' required");
						echo form_input("link",$edit_pub->link,"placeholder='Link to the publication, http://....'");
						echo "<br/>Top 5 ";
						echo form_checkbox("top","1",$edit_pub->top);
						echo "</div>";

            			echo form_submit("submit","Update Publication","class='btn btn-success'");


            			echo form_close();
            			?>

            		</div>

            		<div class="span6">
            			<h5>Added Publications</h5>

            			<ul class="pub">
            				<?php foreach($ext_pub->result() as $row){ ?>
            				<li class="ext"><?php echo anchor($row->link,$row->title,"target=_blank"); 
            				echo " ".anchor("people/pub/edit/ext/$row->epid/$row->pid","edit","class='edit'")." ".anchor("people/pub/del/ext/$row->epid/$row->pid","&times;","class='del'");// edit delete buttons
            				?>
            			</li>
            			<?php } ?>
            			<?php foreach($int_pub->result() as $row){ ?>
            			<li class="int"><?php echo anchor("",$row->title,""); 
            			echo " ".anchor("","&times;","class='del'");
            			?></li>
            			<?php } ?>

            		</ul>
            	</div>

            </div>		
            </div>
        </div>
        
    </div>
</div>
