<!--checking for whether or not the user is still within session-->
<?php
include("check.php")
?>

<!DOCTYPE html>
<html>
<head>
<title>Settings</title>
<!--Added the nav bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">
</head>

<script  src="JSFiles//settings.js"></script>

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
<header>
<nav class="navbar navbar-expand-sm bg-light navbar-light ">
  <ul class="navbar-nav">
  <li class="nav-item active">
      <a href="http://marsgx.com"><img src="logo.png" style="width:70px; height:60px;"></img></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="http://www.marsgx.com" style="font-size:25px;">MarsGravityX</a>
    </li>
  </ul>
</nav>  

<div class ="Settings"> 

<!-- Form section for all settings requirements -->
 
<form action="#" method="post" name="Settings" onsubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
<p class ="Settings">
<h2>Settings</h2>
</p>
	First Name: <input type="text" name="firstname" id="firstname"placeholder="First Name"  style="width: 300px"><br><br>
	Last Name: <input type="text" name="lastname" id="lastname"placeholder="Last Name"  style="width: 300px"><br><br>
	User Name: <input type="text" name="username" id="username"placeholder="Username"  style="width: 300px"><br><br>
	Phone Number: <input type="tel" name="phonenumber" id="phonenumber"pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Phone Number (format: xxx-xxx-xxxx)"  style="width: 300px"><br><br>
	Email Address: <input type="email" name="emailAddress" id="email"placeholder="Email"  style="width: 300px"><br><br>
	<a href="changepw.php">Forgot/Change Password</a>
	<input name="Setting" type="submit" value="Update" class="auto-style2" style="background:black; border: #800000; width: 150px; color: #FFFFFF; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" />
	<br>
	<br>
</form>
</div>
</body>
</html>

