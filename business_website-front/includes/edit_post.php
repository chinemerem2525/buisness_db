<?php
	if(!isset($_GET['post_id']))
	{
		header('location: dashboard.php');
		exit();
	}
	
	$post_id = $_GET['post_id'];
	$_SESSION['post_id'] = $post_id;
	
	$select = mysqli_query($conn, "SELECT * FROM posts WHERE id='$post_id'");
	
	if(mysqli_num_rows($select)>0)
	{
		
		$row = mysqli_fetch_array($select);
		
		$id = $row['id'];
		$post_title = $row['post_title'];
		$post_category_id = $row['post_category_id'];
		$post_category = get_post_category($post_category_id);
		$post_author = $row['post_author'];
		$post_content = $row['post_content'];
		$post_image = $row['post_image'];
		$post_tags = $row['post_tags'];
		$post_status = $row['post_status'];
		$post_date = $row['post_date'];
		$post_time = $row['post_time'];
	
	}

?>


<div class="form_container">
	<form method="POST" id="edit_post_form" enctype="multipart/form-data">
		<div class="input_box">
			<label for="post_title">Post Title:</label>
			<input type="text" class="form_input" name="post_title" id="post_title" value="<?php echo $post_title; ?>" required>
		</div>
		<div class="input_box">
			<label for="post_category">Post Category:</label>
			<select class="form_input" name="post_category" id="post_category" required>
				<option value="">Select</option>
				<?php echo fetch_post_categories(); ?>
			</select>
		</div>
		<div class="input_box">
			<label for="author">Author:</label>
			<input type="text" class="form_input" name="author" id="author" value="<?php echo $post_author; ?>" required>
		</div>
		<div class="input_box">
			<label for="post_content">Post Content:</label>
			<textarea name="post_content" class="form_input summernote" id="post_content" cols="20" rows="15" required> <?php echo $post_content; ?></textarea>
		</div>
		<div class="input_box">
			<label for="post_image">Post Image:</label>
			<small>Allowed: jpg, gif, png, JPEG</small>
			<input type="file" class="form_input" name="post_image" id="post_image" required>
		</div>
		
		<div class="input_box">
			<label for="post_tags">Post tags:</label>
			<input type="text" class="form_input" name="post_tags" id="post_tags" value="<?php echo $post_tags; ?>" required>
		</div>
		
		<div class="input_box">
			<label for="post_status">Post Status:</label>
			<select class="form_input" name="post_status" id="post_status" required>
				<option value="">Select</option>
				<option value="Published">Published</option>
				<option value="Draft">Draft</option>
			</select>
		</div>
		
		<div class="input_box">
			<button type="submit" name="submit" id="post_button" class="form_button">Update Post</button>
		</div>
	</form>
</div>