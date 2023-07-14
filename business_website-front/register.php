<!DOCTYPE html>
<html>
	<?php require "includes/header1.php"; ?>
	<body>
		<?php require "includes/header2.php";  ?>
		<div class="title">Register</div>
		<div class="main_container">
			<div class="main_body">

            <div class="form_container">

                <form method="POST" action="functions/reg_function.php">
                   
                <?php 
                 if(isset($_GET['success']))
                 {
                      echo "<span class='success_message'>Successfully Registered!</span>";
                 }


                 if(isset($_GET['error']))
                 {
                    if($_GET['error'] == "failed")
                    {
                         echo "<span class='error_message'>Registeration failed!</span>";
                    }

                    elseif($_GET['error'] == "wrong-password")
                    {
                         echo "<span class='error_message'>Password mismatch</span>";
                    }
                    elseif($_GET['error'] == "user-exist")
                    {
                         echo "<span class='error_message'>You are already registered</span>";
                    }
                 }
                 ?>
                
                
                <h2>REGISTER</h2>

                    <!-- Name -->
                   <div class="form_control">
                        <p>Full Name:</p>
                        <input type="text" name="full_name" class="form_input" required>
                   </div>
                   <!-- Phone Number -->
                   <div class="form_control">
                        <p>Phone Number:</p>
                        <input type="tel" name="phone_number" class="form_input" required>
                   </div>
                   <!-- Email -->
                   <div class="form_control">
                        <p>Email:</p>
                        <input type="email" name="email" class="form_input" required>
                   </div>
                   <!-- password -->
                   <div class="form_control">
                        <p>Password:</p>
                        <input type="password" name="password" class="form_input" required>
                   </div>
                    <!-- Confirm password -->
                    <div class="form_control">
                        <p>Confirm Password:</p>
                        <input type="password" name="confirm_password" class="form_input" required>
                   </div>
                   <!-- submit -->
                   <div class="form_control">
                        <input type="submit" name="register" class="form_button" value="register">
                   </div>
                </form>

                <p class="right">Already registerd? <a href="login.php">Login here</a></p>
            </div>


            </div>
		</div>
		<?php include "includes/footer.php"; ?>
	</body>

</html>