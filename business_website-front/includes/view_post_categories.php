<?php
	if(mysqli_num_rows($select_admin) == 0)
	{
		header('location: dashboard.php?file=home.php&title=home');
	}
	else
	{
		echo show_all_post_categories();
	}


