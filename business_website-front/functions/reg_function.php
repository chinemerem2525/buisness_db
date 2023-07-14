<?php
if(isset($_POST['register']))
{

    require "../config/config.php";

    $full_name = trim(mysqli_real_escape_string($conn, $_POST['full_name']));
    $phone_number = trim(mysqli_real_escape_string($conn, $_POST['phone_number']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    $confirm_password = trim(mysqli_real_escape_string($conn, $_POST['confirm_password']));

    // date and time format
    date_default_timezone_set("Africa/Lagos");
    $date = date("l M d, Y");
    $time = date("h:ia");
    
    // CHECK IF THE EMAIL OR OHONE NUMBER IS ALREADY REGISTERED
    $check_user = mysqli_query($conn, "SELECT * FROM users_table where email = '$email' OR phone_number = '$phone_number'");
    if(mysqli_num_rows($check_user)>0)

    {
        header('location:../register.php?error=user-exist');
    }
    else
    {

            if($password == $confirm_password)
            {
            $harshed_password = password_hash($password, PASSWORD_DEFAULT);//hashing of password
            $insert = mysqli_query($conn, "INSERT INTO users_table(full_name, phone_number, email, password, date, time) VALUES('$full_name', '$phone_number', '$email', '$harshed_password', '$date', '$time')");
            if(!$insert)
            {
                header('location:../register.php?error=failed');
            }
            else
            {
                // header('location:../register.php?success');
                header('location:../login.php');
            }
            }
            else
            {
                header('location:../register.php?error=wrong-password');
            }
    }
}
