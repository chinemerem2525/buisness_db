<!DOCTYPE html>
<html>
	<?php require "includes/header1.php"; ?>
	<body>
		<?php require "includes/header2.php"; ?>
		<div class="title">LOGIN</div>
		<div class="main_container">
			<div class="main_body">

            <div class="form_container">

                <form method="POST" action="functions/login_function.php">
                <?php 


                 if(isset($_GET['error']))
                 {
                    if($_GET['error'] == "no-user")
                    {
                         echo "<span class='error_message'>You have not registerd yet</span>";
                    }

                    elseif($_GET['error'] == "incorrect-password")
                    {
                         echo "<span class='error_message'>Wrong Password</span>";
                    }
                    
                 }
                 ?>
                
                    <h2>LOGIN</h2>


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
                   <!-- submit -->
                   <div class="form_control">
                        <input type="submit" name="login" class="form_button" value="Login">
                   </div>
                </form>
<br>
                <p class="right">Not yet ? <a href="register.php">Register here</a></p>

            </div>


            </div>
		</div>
		<?php include "includes/footer.php"; ?>
	</body>

</html>