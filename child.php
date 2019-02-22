<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
}

// Check if the user is already logged in, if yes then redirect him to welcome page
elseif(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //includes header portion of codes
    include 'headerLogin.php';
}
?>

<div class="sidebar">
  <a href="dashboard.php">Dashboard</a>
  <a href="notification.php">Notifications</a>
  <a class="active" href="Child.php">Child</a>
  <a href="Class.php">Class</a>
</div>

<div class="content">
        <a role="button" class="btn btn-outline-dark" href="child-teacher.php" style="text-decoration: none;">
            <span class="glyphicon glyphicon-apple"></span> Teacher Interface
        </a>
        
        
        <a role="button" class="btn btn-outline-dark" href="child-parent.php" style="text-decoration: none;">
            <span class="glyphicon glyphicon-user"></span> Parent Interface
        </a>
        
        
        
        <?php
  include 'footer.php';
?>