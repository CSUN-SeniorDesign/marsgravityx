<!DOCTYPE html>
<html>
<head>
<title>Logout</title>

<?php
header("Refresh: 0; url=login.php");
session_start();
//$_SESSION = array();
if(ini_get("session.use_cookies")){
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
  //session_unset();
}
if (isset($_SESSION)) {
   session_destroy();
}

?>
</head>
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
<body>
<a href="http://www.marsgx.com">If not redirected, click here to go back to login.</a>
</body>
</html>
