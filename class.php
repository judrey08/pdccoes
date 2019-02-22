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
  <a href="Child.php">Child</a>
  <a class="active" href="Class.php">Class</a>
</div>

<div class="content">
        <h1 class="p-1">Class List</h1>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark p-2" data-toggle="modal" data-target="#Download">
    <i class="fas fa-file-download"></i> Download
</button>
<br>


<!-- Modal -->
<div class="modal fade" id="Download" tabindex="-1" role="dialog" aria-labelledby="DownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Download">Download Class List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="container-fluid">
                    <label for="class" class="control-label">Choose a Class:</label>
                    <select class="form-control" id="class">
                        <option>AM Class</option>
                        <option>PM Class</option>
                    </select>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Download</button>
            </div>
        </div>
    </div>
</div>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~ morning Section ~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <table class="table table-hover">
            <thead>
                <tr><h3>Morning Section</h3></tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Last</th>
                    <th scope="col">First</th>
                    <th scope="col">Middle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Aden</td>
                    <td>Rivera</td>
                    <td>Junrey Aden</td>
                    <td>Gelia</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">2</th>
                    <td>Sylvia</td>
                    <td>Damaguen</td>
                    <td>Sylvia</td>
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
                    <td>Tim</td>
                    <td>Dacmay</td>
                    <td>Timothy</td>
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
                    <td>Calix</td>
                    <td>Daluyen</td>
                    <td>Calix</td>
                    <td>Dannang</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">5</th>
                    <td>Ayesha</td>
                    <td>Liberato</td>
                    <td>Ayesha</td>
                    <td>Abenoja</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>



<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~ Afternoon Section ~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <table class="table table-hover">
            <thead>
                <tr><h3>Afternoon Section</h3></tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Last</th>
                    <th scope="col">First</th>
                    <th scope="col">Middle</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Aden</td>
                    <td>Rivera</td>
                    <td>Junrey Aden</td>
                    <td>Gelia</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">2</th>
                    <td>Sylvia</td>
                    <td>Damaguen</td>
                    <td>Sylvia</td>
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
                    <td>Tim</td>
                    <td>Dacmay</td>
                    <td>Timothy</td>
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
                    <td>Calix</td>
                    <td>Daluyen</td>
                    <td>Calix</td>
                    <td>Dannang</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">5</th>
                    <td>Ayesha</td>
                    <td>Liberato</td>
                    <td>Ayesha</td>
                    <td>Abenoja</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewStudentDetails">
                            View Details
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<?php
  include 'footer.php';
?>