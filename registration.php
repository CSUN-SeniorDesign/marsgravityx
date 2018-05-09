<!DOCTYPE html>
<html>
<head>

<title>
SignUp | MGX
</title>
<!--Added the nav bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">

</head>

<script  src="JSFiles//registration.js"></script>

<body>
<?php
include("../crack/db.php"); 
// If form submitted, insert values into the database.
//$gender = "";
//IMPLEMENT EMAIL
if(isset($_POST['submit'])) {
	$dbcon = pg_connect($recs) or die("Cannot connect");
	$firstname = pg_escape_string($dbcon, $_POST['firstname']);
	$lastname = pg_escape_string($dbcon, $_POST['lastname']);
	$username = pg_escape_string($dbcon, $_POST['username']); 
	$password = pg_escape_string($dbcon, $_POST['password']);
	$password = md5($password);
	$phonenumber = $_POST['phonenumber'];
	$phonenumber = pg_escape_string($dbcon, $phonenumber);
	/*if(isset($_POST['gender'])) {
		if(!empty($_POST['gender'])) {
			$gender = $_POST['gender'];
			$gender = pg_escape_string($dbcon, $gender);
		}
	}*/
	$dob = pg_escape_string($dbcon, $_POST['bday']);
	$sql = pg_query("SELECT * FROM users WHERE username = '$username'");
	if(pg_num_rows($sql) > 0) {
		echo "Sorry, that user already exists.";
		exit();
	}
	$query = pg_query($dbcon, "INSERT INTO users (first_name, last_name, username, password, phonenumber, bday)
VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$phonenumber."', '".$dob."')");
    	
        if($query){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
			$_SESSION['message'] = "You are now logged in.";
			$_SESSION['username'] = $username;
			header("location: profilegamma.php");
        }
        else {
        	echo pg_result_error($query);
        }
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
      <a class="nav-link" href="about.html">About Us</a>
    </li>&nbsp;
    <li class="nav-item active">
      <a class="nav-link" href="contact.html">Contact Us</a>
    </li>&nbsp;
    <li class="nav-item active">
      <a class="nav-link disabled" href="termsconditions.html" style="width: 160px;">Terms& Conditions</a>
    </li>&nbsp;
  <li class="nav-item active">
      <a class="nav-link disabled" href="privacypolicy.html">PrivacyPolicy</a>
    </li>
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
      <li class="nav-item active">
      <a class="nav-link" href="login.php"><i><b>Login</b></i></a>
    </li>
     &nbsp;
  </ul>
</nav>  
</div>

<div class = "register"> 
<div class="form">
<form name="registration" action="registration.php" onsubmit="return validateform();" method="POST">
<div class="auto-style1" style="height: 220px">
	<div class="signup">	
<!--Added the signup title here to make it snap into place-->
<p class ="SignUp">
<h2>SignUp</h2>
</p>
<br>
First Name:&nbsp;<input type="text" name="firstname" placeholder="First Name" class="auto-style" style="width: 300px" /> <br><br>
Last Name:&nbsp;<input type="text" name="lastname" placeholder="Last Name" class="auto-style3" style="width: 300px" />&nbsp;<br><br>
Username:&nbsp;<input type="username" name="username" placeholder="Username" class="auto-style" style="width: 298px" /><br><br>
Password:&nbsp;&nbsp;<input type="password" name="password" placeholder="Password" style="width: 300px" /><br><br>
Phone #:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="tel" name="phonenumber" id="phonenumber" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Phone Number (format: xxx-xxx-xxxx)" style="width: 300px"><br><br>
<form action="" method="post">
		Date of Birth:&nbsp;
<input type ="date" name="bday" required>
</form>
<br><br>

<input type="submit" name="submit" value="Register" class="auto-style2" style="width: 122px; background: black; color: #FFFFFF; border: #800000; height: 31px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif" /> </div>
</form>

</div>
</body>
</html>