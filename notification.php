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

if ($_Post['Notification']) {
  # code...
}
elseif ($_Post['Announcement']) {
  # code...
}

?>

<div class="sidebar">
  <a href="dashboard.php">Dashboard</a>
  <a class="active" href="notification.php">Notifications</a>
  <a href="Child.php">Child</a>
  <a href="Class.php">Class</a>
</div>

<div class="content">

    <div class="page-header">
        <h1 class="float-left">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~ buttons ~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-primary btn-md p-2 float-right" data-toggle="modal" data-target="#newNoti"><i class="fas fa-scroll"></i> Send Notification</button>
    
    <button type="button" class="btn btn-primary btn-md p-2 float-right mr-3" data-toggle="modal" data-target="#newAnnouncement"><i class="fas fa-bullhorn"></i> Post Announcement</button>
    
    </div>
    </br>
    </br>
    
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~ notifications ~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
    <!-- start table -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Sender</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
          <?php


          ?>
        </tbody>
    </table>
    <!-- end table -->

        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~ notification modal ~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="addForm">

        <!--start modal code-->
        
        <!-- Modal -->
        <div class="modal fade " id="newNoti" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="newNoti"><i class="fas fa-scroll"></i> New Notification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                                </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" type="submit" name="notification">Send Notification</button>
                    </div>
                </div>
            </div>
            
        </div>
        <!--end modal code-->


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~ announcement modal ~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 
        <!--start modal code-->
        
        <!-- Modal -->
        <div class="modal fade" id="newAnnouncement" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="newAnnouncement"><i class="fas fa-bullhorn"></i> New Announcement</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Subject Title:</label>
                                <input type="text" class="form-control" id="subject-title" required>
                                    </div>
                            <div class="form-group">
                                
                                <label for="message-text" class="col-form-label">Body:</label>
                                <textarea class="form-control" id="message-text" required></textarea>
                            </div>
                              
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" type="submit" name="Announcement">Post Announcement</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal code-->
</form>

  

<?php
  include 'footer.php';
?>
