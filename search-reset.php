<?php

// Include config file
require_once "config/config.php";

$username = $mobileNo = "";
$username_err = $mobileNo_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "<i style='color:red;'>Please enter username.</i>";
    } else{
        $username = trim($_POST["username"]);
    }
    
	
    // Check if mobileNo is empty
    if(empty(trim($_POST["mobileNo"]))){
        $mobileNo_err = "<i style='color:red;'>Please enter mobile number.</i>";
    } else{
        $mobileNo = trim($_POST["mobileNo"]);
    }


    // Validate credentials
    if(empty($username_err) && empty($mobileNo_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, mobileNo FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify mobileNo
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $mobileNo_fetch);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        
                        if($mobileNo == $mobileNo_fetch){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["mobileNo"] = $mobileNo;                            
                            
                            // Redirect user to welcome page
                            header("location: reset-password.php");
                        } else{
                            // Display an error message if mobile no is not valid
                            $mobileNo_err = "The mobile number you entered does not match that which was saved before.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);

    }
    
    // Close connection
    mysqli_close($link);

}

include 'headergeneral.php';
?>

<center>
    <div class="wrapper container-fluid col-sm-5" style="display:inline-block; text-align: left; border: 3px solid black; border-radius: 25px; background-color: white;">
		<h2>Enter Username</h2>
        <p>Please fill in your username and mobile number for which you wish to reset your password.</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <!-- ~~~~~~~~~~~~~~~~~~~~ username ~~~~~~~~~~~~~~~~~~~~ -->
            <div class="form-group row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-3" for="username">Username:</label>
                <div class="col-sm-9">
                    <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="username" placeholder="Username"  value="<?php echo $username; ?>"required>
                    <span class="help-block"><?php echo "<p style='color:red;'><B><I>".$username_err.'</I></B></p>'; ?></span>
                </div>
            </div>
                
            <!-- ~~~~~~~~~~~~~~~~~~~~ mobileNo ~~~~~~~~~~~~~~~~~~~~ -->
            <div class="form-group row">
                <label class="control-label col-sm-3" >Mobile #:</label>
                <div class="col-sm-9">
                    <input type="number" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" min="0" class="col-sm-12" name="mobileNo" placeholder="Cell Phone Number"  value="<?php echo $mobileNo; ?>"required>
                    <span class="help-block"><?php echo "<p style='color:red;'><B><I>".$mobileNo_err.'</I></B></p>'; ?></span>
                </div>
            </div>
                
            <!-- ~~~~~~~~~~~~~~~~~~~~ buttons ~~~~~~~~~~~~~~~~~~~~ -->
            <div class="form-group "><center>
                <input type="submit" class="btn btn-primary col-sm-4" value="Reset Password">
            </center></div>
        </form>
   	</div>
</center>

<?php
include 'footer.php';
?>