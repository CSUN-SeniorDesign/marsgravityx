<!DOCTYPE html>
<?php
include("../crack/db.php"); 
?>
<html>
<head>
<title>
Login | MGX
</title>

<!--Added the nav bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">

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

<div class = "login"> 
<form action="" method="post" name="login" onSubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
<!--placed login title inside form-->
<p class ="Login">
<h2> Log In </h2>
</p>
Username:&nbsp;<input type="username" name="username" id="username" placeholder="Username" class="auto-style9" style="width: 329px; height: 30px;" /><br>
	<br>
Password:&nbsp;<input type="password" name="password" id="password" placeholder="Password" class="auto-style6" style="width: 328px; height: 30px;" /><br>
	<br>
<input name="submit" type="submit" value="Login" class="auto-style2" style="background:black; border: #800000; width: 150px; color: #FFFFFF; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" />
	<br>
	<br>
	<div class="separator" style="left: 0px; top: 13px; height: 20px;">
		<p style="height:28px; text-align:left"><a href="#">Forgot Password</a> | <a href="registration.php">Register Now!</a></p>
	</div>
</form>
<br>	
</div>
</body>
</html>