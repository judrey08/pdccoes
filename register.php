<?php  
// Include config file
require_once "config/config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $firstname = $middlename = $lastname = $mobileNo = $address = $gender = "";
$username_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = $address_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "<i style='color:red;'>Please enter a username.</I>";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<i style='color:red;'>Please enter a password.</I>";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<i style='color:red;'>Password must have atleast 6 characters.</I>";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<i style='color:red;'>Please confirm password.</I>";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<i style='color:red;'>Password did not match.</I>";
        }
    }
    
    // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "<i style='color:red;'>Please enter your First Name.</I>";     
    } else{
        $firstname = trim($_POST["firstname"]);
    }
    // Validate lastname
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "<i style='color:red;'>Please enter your Last Name.</I>";     
    } else{
        $lastname = trim($_POST["lastname"]);
    }
    
    // Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "<i style='color:red;'>Please enter your Address.</I>";     
    } else{
        $address = trim($_POST["address"]);
    }
    
        $middlename = trim($_POST["middlename"]);
        $mobileNo = trim($_POST["mobileNo"]);
        $gender = trim($_POST["gender"]);
        
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, firstname, middlename, lastname, mobileNo, address, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssiss", $param_username, $param_password, $param_firstname, $param_middlename, $param_lastname, $param_mobileNo, $param_address, $param_gender);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_firstname = $firstname;
            $param_middlename = $middlename;
            $param_lastname = $lastname;
            $param_mobileNo = $mobileNo;
            $param_address = $address;
            $param_gender = $gender;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}

    include 'headerGeneral.php';  
?>
    <center>     
        <div class="wrapper container-fluid col-sm-6" style="display:inline-block; text-align: left; border: 3px solid black; border-radius: 25px; background-color: white;">
                <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <!-- start Bootstrap Horizontal Form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="signupForm">

                <!-- ~~~~~~~~~~~~~~~~~~~~ username ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label class="control-label col-sm-3" for="username">Username:</label>
                    <div class="col-sm-9">
                        <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="username" placeholder="Username"  value="<?php echo $username; ?>"required>
                        <span class="help-block"><?php echo "<p style='color:red;'><B><I>".$username_err.'</I></B></p>'; ?></span>
                    </div>
                </div>

                <!-- ~~~~~~~~~~~~~~~~~~~~ password ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label class="control-label col-sm-3" for="pwd">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="password" placeholder="Enter password" value="<?php echo $password; ?>" required>
                        <span class="help-block"><?php echo "<p style='color:red;'><B><I>".$password_err.'</I></B></p>'; ?></span>
                    </div>
                </div>

                <!-- ~~~~~~~~~~~~~~~~~~~~ confirm_password ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="pwd">Repeat Password:</label>
                    <div class="col-sm-9">
                        <input type="password" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="confirm_password" placeholder="Repeat password" value="<?php echo $confirm_password; ?>" required>
                        <span class="help-block"><?php echo "<p style='color:red;'><B><I>".$confirm_password_err.'</I></B></p>'; ?></span>
                    </div>
                </div>

                <!-- ~~~~~~~~~~~~~~~~~~~~ firstname ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" >First Name:</label>
                    <div class="col-sm-9">
                        <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12"  name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>" required>
                    </div>
                </div>
                
                <!-- ~~~~~~~~~~~~~~~~~~~~ middlename ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" >Middle Name:</label>
                    <div class="col-sm-9">
                        <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="middlename" placeholder="Middle Name" value="<?php echo $middlename; ?>">
                    </div>
                </div>

                <!-- ~~~~~~~~~~~~~~~~~~~~ lastname ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" >Last Name:</label>
                    <div class="col-sm-9">
                        <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>" required>
                    </div>
                </div>
                
                <!-- ~~~~~~~~~~~~~~~~~~~~ mobileNo ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" >Mobile #:</label>
                    <div class="col-sm-9">
                        <input type="number" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" min="0" class="col-sm-12" name="mobileNo" placeholder="Cell Phone Number"  value="<?php echo $mobileNo; ?>"required>
                    </div>
                </div>
                
                <!-- ~~~~~~~~~~~~~~~~~~~~ address ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" >Address:</label>
                    <div class="col-sm-9">
                        <input type="text" style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="address" placeholder="# Street, Barangay, Baguio City"  value="<?php echo $address; ?>"required>
                    </div>
                </div>

                <!-- ~~~~~~~~~~~~~~~~~~~~ gender ~~~~~~~~~~~~~~~~~~~~ -->
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="gender">Gender:</label>
                    <div class=" col-sm-9">
                     <select style="border: 0;outline: 0;background: transparent;border-bottom: 1px solid black;" class="col-sm-12" name="gender" value="<?php echo $gender; ?>" required>
                       <option selected></option>
                       <option>Male</option>
                       <option>Female</option>
                     </select>
                    </div>
                </div>
                             
                <button type="submit" class="btn btn-default btn-primary btn-block col-sm-4"><span class="glyphicon glyphicon-off"></span> Register </button>
                <p>Already a member? <a href="login.php">Login Now!</a></p>
            </form>
            <!-- end Bootstrap Horizontal Form -->
        </div>
    </center>

<?php
    //includes footer portion of codes
    include 'footer.php';
?>