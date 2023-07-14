<?php 


$select = mysqli_query($conn, "SELECT * FROM users_table WHERE email = '$email'");
if(mysqli_num_rows($select)>0)
{
  $row = mysqli_fetch_array($select);
  $id = $row['id'];
  $full_name = $row['full_name'];
  $email = $row['email'];
  $phone_number = $row['phone_number'];
  $date = $row['date'];
  $time = $row['time'];

  echo"
  <div class='profile_frame'>
  <img src='images/profile/profile.png'>
  
  </div>
  ";


  echo"<table class='table_format' border='1'>";
  echo "<tr>
       <td>Name</td>
       <td>$full_name</td>
        </tr>";

        echo "<tr>
        <td>Email</td>
        <td>$email</td>
         </tr>";

         echo "<tr>
       <td>Phone Number</td>
       <td>$phone_number</td>
        </tr>";

        echo "<tr>
       <td>Date Registerd</td>
       <td>$date</td>
        </tr>";

        echo "<tr>
       <td>Time Registerd</td>
       <td>$time</td>
        </tr>";

  echo "</table>";

  echo "
  <a href='edit_profile.php?edit_id=$id'><button class='primary_button'>Edit Profile</button></a>
  ";
}
else
{
    header("location: index.php");
}