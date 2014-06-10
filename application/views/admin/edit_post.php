<?php
	echo validation_errors();
?>

<div class="span8">

	<h3>Edit "<?php echo $post['title']; ?>" Below</h3>
	<form action="" method="post" enctype="multipart/form-data" >
		<label class="control-label">Title:</label>
		<input type="text" name="title" size="100" class="m-wrap span8" value="<?php echo $post['title']; ?>"/> <br/>	
		
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
		</select>	<br><br>		
		
		<label class="control-label">News:</label>
		<textarea name="content" rows="10" cols="100" class="m-wrap span8"><?php echo $post['content']; ?>
		</textarea><br/>
		
		<label  class="control-label">News Image:</label>
		<input type="hidden" name="news_image_old" value="<?php echo $post['post_image']; ?>">
		<input type="file" name="news_image_new"   class="m-wrap span8"><br>
			
		<br>
		<div class="submit-btn">
			<input type="submit" value="Save" name="news_edit" class="btn green" />
			<?php 
				$Css_class = array('class' => 'btn');
				echo anchor('Blog/index','Cancel',$Css_class);
			?>
		</div>
	</form>
</div>
