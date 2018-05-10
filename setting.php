<!--checking for whether or not the user is still within session-->
<?php
include("check.php")
?>

<!DOCTYPE html>
<html>
<head>
<title>Settings | MGX</title>
<!--Added the nav bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">
</head>

<script  src="JSFiles//settings.js"></script>
<style>
body{
background-repeat: no-repeat;
background-size: cover;
background-image: url('infopages.gif');

</style>
<body>

<!--connecting to database-->
<?php
  include("../crack/db.php");
  
  $dbcon = pg_connect($recs);
  if(isset($_POST['submit'])) 
  {
    $firstName = pg_escape_string($dbcon, $_POST['firstname']);
    $lastName = pg_escape_string($dbcon, $_POST['lastname']);
    $username = pg_escape_string($dbcon, $_POST['username']);
    $phonenumber = pg_escape_string($dbcon, $_POST['phonenumber']);
    $query = pg_query("UPDATE users SET (firstname, lastname, username, phonenumber) = ('$firstName', '$lastName', '$username', '$phonenumber')");
  }
?>


<!--added the navbar codes-->
<div class="content">
<!--ADDED THIS STYLING HERE FOR THE NAV BAR FOR BETTER POSITIONING -->
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="padding-bottom: 1px; height: 51px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <ul class="navbar-nav">
  <li class="nav-item active">
                <a href="http://marsgx.com"><img src="logo.png" style="width:60px; height:43px;"></img></a>
        </li>
    <li class="nav-item active">
      <a class="nav-link" href="http://www.marsgx.com">MarsGravityX</a>
    </li>
    &nbsp;&nbsp;
    <li class="nav-item active">
      <a class="nav-link" href="profilegamma.php">Back to Profile</a>
    </li>&nbsp;
  </ul>
</nav>  
</div>

<div class ="Settings"> 

<!-- Form section for all settings requirements -->
 
<form action="#" method="post" name="Settings" onsubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
<p class ="Settings">
<h2>Settings</h2>
</p>
  <h5>First Name:</h5> <input type="text" name="firstname" id="firstname"placeholder="First Name"  style="width: 300px"><br><br>
  <h5>Last Name:</h5> <input type="text" name="lastname" id="lastname"placeholder="Last Name"  style="width: 300px"><br><br>
  <h5>User Name:</h5> <input type="text" name="username" id="username"placeholder="Username"  style="width: 300px"><br><br>
  <h5>Phone Number:</h5> <input type="tel" name="phonenumber" id="phonenumber"pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Phone Number (format: xxx-xxx-xxxx)"  style="width: 300px"><br><br>
  <h5>Email Address:</h5> <input type="email" name="emailAddress" id="email"placeholder="Email"  style="width: 300px"><br><br>
  <a href="changepw.php">Forgot/Change Password</a><br><br>
  <input name="Setting" type="submit" value="Update" style="background:white; border: #800000; width: 150px; color: black; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" />
  <br>
  <br>
</form>
</div>
</body>
</html>

