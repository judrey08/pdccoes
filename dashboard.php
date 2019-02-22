<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //includes header portion of codes
    include 'headerGeneral.php';
    header("location: login.php");
    exit;
}
//else if user is logged in show logged in navbar
else{   
    //includes header portion of codes
    include 'headerLogin.php';
}
?>

<div class="sidebar">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="notification.php">Notifications</a>
  <a href="Child.php">Child</a>
  <a href="Class.php">Class</a>
</div>

<div class="content">
<center>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</center>
</div>

<?php
    //includes footer portion of codes
    include 'footer.php';
?>