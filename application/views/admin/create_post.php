<?php
	echo validation_errors();
?>
<div class="span8">
	<h4>Create A New Post Below</h4>
	<form action="posts/create" method="post" enctype="multipart/form-data" >
		<label class="control-label">Title:</label>
		
		<input type="text" name="title" size="50" class="m-wrap span8"/><br/>	

		<label  class="control-label">Department:</label>

		<select name="department_id">
		<?php
			foreach($departs as $result)
			{
				if($resourc['resource_category'] === $result[dept_id])
				{ ?>
					<option value="<?php echo $result['dept_id']; ?>" selected><?php echo $result['dept_name']; ?></option>			 
				  <?php
				}
				else{			
				?>
					<option value="<?php echo $result['dept_id']; ?>"><?php echo $result['dept_name']; ?></option>
				<?php
				}
			}
		?>
		</select>	


		
		<label class="control-label">Post Content:</label>
		
		<textarea name="content" rows="6" cols="50" class="m-wrap span8"></textarea><br/>		
		
		
		<label  class="control-label">Upload Image:</label>
		<input type="file" name="news_image"   class="m-wrap span8"><br>
			
		<br>
		
		<input type="hidden" name="published" value="0">
		<div class="submit-btn">
			<input type="submit" value="Save"  name="news_create" class="btn green" />		
			<?php 
				$Css_class = array('class' => 'btn');
				echo anchor('Blog/index','Cancel',$Css_class);
			?>
		</div>
	</form>
	

</div>
