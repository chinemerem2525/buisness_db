<!-- My SQLI METHOD -->
<?php 
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "business_db_1";

$conn = mysqli_connect($server_name, $db_username,$db_password,$db_name );

if(!$conn)
{
    die("Connection Failed!:".mysqli_connect_error());
}
