<!DOCTYPE html>
<html>
<head>

<title>
SignUp | MGX
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
<div class = "register"> 

<p class ="SignUp">

<h2> SignUp</h2>

</p>
 
<div class="form">
<form name="registration" action="registration.php" onsubmit="return validateform();" method="POST">
<div class="auto-style1" style="height: 220px">
	<div class="signup">	
	
<input type="text" name="firstname" placeholder="First Name" class="auto-style" style="width: 300px" /> <br><br>
<input type="text" name="lastname" placeholder="Last Name" class="auto-style3" style="width: 300px" />&nbsp;<br><br>
<input type="username" name="username" placeholder="Username" class="auto-style" style="width: 298px" /><br><br>
<input type="password" name="password" placeholder="Password" style="width: 300px" /><br><br>
<input type="tel" name="phonenumber" id="phonenumber" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Phone Number (format: xxx-xxx-xxxx)" style="width: 300px"><br><br>

	<form action="" method="post">
		Date of Birth:
		<input type ="date" name="bday" required>
	</form>
<input type="submit" name="submit" value="Register" class="auto-style2" style="width: 122px; background: black; color: #FFFFFF; border: #800000; height: 31px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif" /> </div>
	</form>
</div>

</body>


</html>