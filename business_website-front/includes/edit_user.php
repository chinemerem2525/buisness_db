<?php
	if(isset($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$_SESSION['id'] = $id;
		
		$select = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'"); 
		if(mysqli_num_rows($select)>0)
		{
			$row = mysqli_fetch_array($select);
			$full_name = $row['full_name'];
			$email = $row['email'];
			$phone_number = $row['phone_number'];
		}
	}
	else
	{
		header('location:http://localhost/students_websites/business_website/dashboard.php?file=home.php&title=home');
	}
?>

<form action="#" method="POST" id="profile_update_form">
	<input type="text" class="input_control" name="full_name" id="full_name" placeholder="Enter Full Name" value="<?php echo $full_name; ?>" required>
	<input type="email" class="input_control" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
	<input type="tel" class="input_control" name="phone_number" id="phone_number" placeholder="Enter Phone Number" value="<?php echo $phone_number; ?>" required>
	<p>Upload profile image (Allowed: *.jpg, *.png)<p>
	<input type="file" class="input_control profile" name="profile" id="profile_img" required>
	<button name="register" class='primary_button' id="profile_update_button">Update</button>
</form>