<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
       body{
            background-image: url(snaps/kibet.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <center>
    <script src="javascript.js"></script>
    <i><h2 class="my-5" style="color:white">Hello <?php echo htmlspecialchars($_SESSION["username"]);?>!!, This is a sample Login Page, Welcome.</h2></i>
    <br><br>
  <br><br>
    <h3 style="color:white;"><i>All things are set you can now
    <a href="Home.html" class="btn-btn-warning" style="color:yellowgreen;"> Browse </a>
    with us.</i></h3><br><br><br><br>

     <i><h3 style="color:white">Feel insecure? No worries you can always <a href="reset-password.php" class="btn btn-warning" style="color:greenyellow;">Reset</a> your password anytime.</i></h3>
        <br><br>
        <h3 style="color:white;"><i>Done?? please 
        <a href="logout.php" class="btn btn-danger ml-3" style="color:yellowgreen;">Sign Out</a> <i> of your account and Have an A 1 day!</i>
    </h3>

</center>
</body>
</html>