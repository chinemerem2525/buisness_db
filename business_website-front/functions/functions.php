<?php 
// GET DASHBOARD PAGE TITLE
function  get_title()
{
    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        $title = str_replace('-', ' ',$title);
       $title = ucwords(strtolower($title));
       //$title = ucwords(strtoupper($title));


        return $title;

    } else {
        echo "Dashboard";
    }
}

// INCLUDE FILES TO DASHBOARD
function get_files()
{
    global $email, $conn;
    if (isset($_GET['file'])) {
        $file = $_GET['file'];
        include "includes/$file";
    } else {
        include "includes/home.php";
    }
}


?>