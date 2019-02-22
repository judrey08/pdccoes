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
  include 'phpmodals/cispesmodal2.php';
?>

<div class="sidebar">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="notification.php">Notifications</a>
  <a class="active" href="Child.php">Child</a>
  <a href="Class.php">Class</a>
</div>

<div class="content">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#addChild">
    <span class="glyphicon glyphicon-plus-sign"></span> Add a Child
</button>
        
        
        <table class="table table-hover">
            <thead>
                <tr><h3>List of Children</h3></tr>
                <tr>
                    <th scope="col" style="width:10%;">#</th>
                    <th scope="col" style="width:20%;">Last</th>
                    <th scope="col" style="width:20%;">First</th>
                    <th scope="col" style="width:20%;">Middle</th>
                    <th scope="col" style="width:10%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mateo</td>
                    <td>Zeczeus</td>
                    <td> </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">2</th>
                    <td>Bayangan</td>
                    <td>Joross</td>
                    <td></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">3</th>
                    <td>Valdez</td>
                    <td>Zia</td>
                    <td></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">4</th>
                    <td>Gonong</td>
                    <td>Cyler</td>
                    <td></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">5</th>
                    <td>Temple</td>
                    <td>Astrid</td>
                    <td></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
        
        
        
<?php
  include 'footer.php';
?>
