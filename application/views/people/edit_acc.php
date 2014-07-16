<div id="content">
    <div id="content-header">
        <h1>Admin Dashboard: Edit Profile</h1>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>
    <div class="container-fluid">

        
		
		<h3><?php echo $people->title." ".$people->first_name." ".$people->last_name; ?></h3>
		
		<div style="float:left;" class="row">
				<div class="span5">

            			<?php
            			echo validation_errors("<li>","</li>");

            			echo form_open("people/acc/update/$acc->pid","class='form pub'");
            			echo form_hidden("aid",$acc->aid);

            			echo form_label("Accolade Type");
            			echo form_dropdown("type",$acc_types,$acc->type);
						echo "<br>";
            			echo form_textarea("title",$acc->title,"placeholder='Title of the accolade' required");
						echo "<br>";
            			echo form_input("link",$acc->link,"placeholder='Link to more info'");
						echo "<br>";
            			echo form_input("date_awarded",set_value("date_awarded",$acc->date_awarded),"placeholder='Date awarded'");
						echo "<br>";
            			echo form_input("awarding_institution",set_value("awarding_institution",$acc->awarding_institution),"placeholder='Awarding instition'");

                        echo "<br/>";
            			echo form_submit("submit","Update Accolade","class='btn btn-success'");

            			echo form_close();
            			?>

            		</div>

            		<div class="span4">
            			<h5>Added Accolades</h5>

            			<ul class="acc">
            				<?php
            				foreach($accolades->result() as $row){
            					echo "<li><i class='icon-star'></i> $row->type : $row->title ";
            					if($row->link != '') echo "&rarr; ".anchor($row->link,"link","target=_blank");
            					echo "</li>";
            				}
            				?>
            			</ul>

            		</div>
					</div>
        
        
    </div>
</div>
