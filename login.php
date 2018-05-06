<!DOCTYPE html>
<?php
include("../crack/db.php"); 
?>
<html>
<head>
<title>
Login | MGX
</title>

<style type="text/css">
.form {
	font-family: Impact, Charcoal, sans-serif;
}

h2{
	font-size: 50px;
	text-align: center;
	margin-top: 230px;
	margin-right: 35px;
	font-family: Georgia, serif;
}

.auto-style1 {
	margin-left: 500px;
	
}
.auto-style2 {
	margin-left: 95px;
}
</style>
</head>

<script  src="JSFiles//login.js"></script>

<body>
<?php
    /*include "/crack/db.php";*/
  
$dbcon = pg_connect($recs) or die("Cannnot connect");
// If form submitted, insert values into the database.
session_start();
if(isset($_SESSION['username'])){
header("location:profilegamma.php");
}
if (isset($_POST['submit'])){
	$username = $_POST['username'];
        //escapes special characters in a string
	$username = pg_escape_string($dbcon,$username);
	$password = $_POST['password'];
	$password = pg_escape_string($dbcon,$password);
	$password = md5($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username = '$username'
and password= '$password'";
	$result = pg_query($dbcon,$query) or die(pg_result_error($result));
	$rows = pg_num_rows($result);
	 if($rows > 0) {
          session_start();
          $_SESSION['username'] = $username;
	  header("Location: profilegamma.php");
         }else{
         	echo '<script type=text/javascript>alert("Incorrect username/password. Please try again.");</script>';
         	header("Refresh:0");
		}	
    }
?>

<div class = "login"> 
<p class =" Login">
<h2> Log In </h2>
</p>
<form action="" method="post" name="login" onSubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
<input type="username" name="username" id="username" placeholder="Username" class="auto-style9" style="width: 329px; height: 30px;" /><br>
	<br>
<input type="password" name="password" id="password" placeholder="Password" class="auto-style6" style="width: 328px; height: 30px;" /><br>
	<br>
<input name="submit" type="submit" value="Login" class="auto-style2" style="background:black; border: #800000; width: 150px; color: #FFFFFF; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" /><br>
	<br>
	</form>
<br>	
</div>
</body>
</html>