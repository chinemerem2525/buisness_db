<?php
session_start();
require "includes/dashboard_header.php";
require "functions/functions.php";
require "config/config.php";
$email = $_SESSION['email'];
?>

<body>
  <div class="nav_container">
    <div class="logo_container">
      <img src="images/logo.png" alt="">
    </div>
    <div class="logout_container">
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </div>
  </div>
  <div class="main_container">
    <div class="sidebar">

      <div class="sidebar_menu">
        <i class="fa-solid fa-house"></i><a href="dashboard.php?file=home.php&title=home">Home</a>
      </div>

      <div class="sidebar_menu">
	  <i class="fa-solid fa-id-card"></i><a href="dashboard.php?file=profile.php&title=profile">Profile</a>
      </div>

      <div class="sidebar_menu">
	  <i class="fa-solid fa-user"></i><a href="dashboard.php?file=users.php&title=users">Users</a>
      </div>

      <div class="sidebar_menu">
        <div class="menu_item">
        <i class="fa-solid fa-signs-post"></i><a href="#">Posts</a>
        </div>
	  
    <div class="dropdown">
      <div class="dropdown_menu">
      <i class="fa-solid fa-right-long"></i><a href="dashboard.php?file=add_post.php&title=Post">Add new posts</a>
      </div>
      <div class="dropdown_menu">
      <i class="fa-solid fa-right-long"></i><a href="dashboard.php?file=view_post.php&title=view-post">View posts</a>

      </div>
    
    </div>
      </div>

      <div class="sidebar_menu">
	 
    <div class="menu_item">
    <i class="fa-brands fa-product-hunt"></i><a href="#">Products</a>
        </div>
	  
    <div class="dropdown">
      <div class="dropdown_menu">
      <i class="fa-solid fa-right-long"></i><a href="dashboard.php?file=add_product.php&title=Product">Add new products</a>
      </div>
      <div class="dropdown_menu">
      <i class="fa-solid fa-right-long"></i><a href="dashboard.php?file=view_product.php&title=View-product">View products</a>

      </div>
    
    </div>
      </div>

      <div class="sidebar_menu">
	  <i class="fa-solid fa-envelope"></i><a href="dashboard.php?file=notification.php&title=Notifications">Notifications</a>
      </div>

      <div class="sidebar_menu">
	  <i class="fa-solid fa-comment"></i><a href="dashboard.php?file=comments.php&title=Comments">Comments</a>
      </div>

      <div class="sidebar_menu">
	  <i class="fa-sharp fa-solid fa-landmark"></i><a href="dashboard.php?file=tutorials.php&title=Tutorials">Tutorials</a>
      </div>

      <div class="sidebar_menu">
	  <i class="fas fa-sign-out-alt"></i><a href="dashboard.php?file=logout.php&title=logout">Logout</a>
      </div>


    </div>
    
    <div class="main_body">
      <div class="title_container">
        <h2> <?php echo get_title();?>
      </h2>
      </div>
      <div class="main_content">
      <?php get_files(); ?>
      </div>


    </div>
  </div>
  <script src="./javascript/jquery.js"></script>
  <script src="./javascript/dashboard_script.js"></script>

</body>

</html>