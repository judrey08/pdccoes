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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-default" >
            <span class="glyphicon glyphicon-remove-sign"></span> Decline Enrollment
        </button>
        
        <table class="table table-hover">
            <thead>
                <tr><h3>Pending Enrollment</h3></tr>
                <tr>
                    <th scope="col" style="width:5%;">#</th>
                    <th scope="col" style="width:10%;">Last</th>
                    <th scope="col" style="width:10%;">First</th>
                    <th scope="col" style="width:10%;">Middle</th>
                    <th scope="col" style="width:15%;">Move to:</th>
                    <th scope="col" style="width:20%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <!-- Material unchecked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                </div>
                    </th>
                    <td>Mateo</td>
                    <td>Zeczeus</td>
                    <td>n/a</td>
                    <td>
                        <select class="form-control" id="class">
                            <option>AM Class</option>
                            <option>PM Class</option>
                        </select>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary">
                            Accept Student
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <!-- Material unchecked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                </div>
                    </th>
                    <td>Bayangan</td>
                    <td>Joross</td>
                    <td>n/a</td>
                    <td>
                        <select class="form-control" id="class">
                            <option>AM Class</option>
                            <option>PM Class</option>
                        </select>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary">
                            Accept Student
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <!-- Material unchecked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                </div>
                    </th>
                    <td>Valdez</td>
                    <td>Zia</td>
                    <td>n/a</td>
                    <td>
                        <select class="form-control" id="class">
                            <option>AM Class</option>
                            <option>PM Class</option>
                        </select>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary">
                            Accept Student
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <!-- Material unchecked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                </div>
                    </th>
                    <td>Gonong</td>
                    <td>Cyler</td>
                    <td>n/a</td>
                    <td>
                        <select class="form-control" id="class">
                            <option>AM Class</option>
                            <option>PM Class</option>
                        </select>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary">
                            Accept Student
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <!-- Material unchecked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                </div>
                    </th>
                    <td>Temple</td>
                    <td>Astrid</td>
                    <td>n/a</td>
                    <td>
                        <select class="form-control" id="class">
                            <option>AM Class</option>
                            <option>PM Class</option>
                        </select>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary">
                            Accept Student
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
        
        <?php
  include 'footer.php';
?>