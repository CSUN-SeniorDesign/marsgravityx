<!--checking for whether or not the user is still within session-->
<?php
include("check.php")
?>

<!DOCTYPE html>
<html>
<head>
<title>Settings</title>
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

<div class ="Settings"> 

<p class ="Settings">
<h2>Settings</h2>
</p>
<!-- Form section for all settings requirements -->
 
<form action="#" method="post" name="Settings" onsubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
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

