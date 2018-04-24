<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php

include("check.php");
include("../crack/db.php");

$dbcon= pg_connect ($recs)or die("Could not connect");
ini_set('error_reporting', E_ALL);
if (isset($_POST['Update'])) {
        $username = $_POST["username"];
	$password = md5($_POST["password"]);
        $newpassword = md5($_POST["newpassword"]);
        $confirmnewpassword = md5($_POST["confirmnewpassword"]);

	$query = "SELECT * FROM users WHERE username = '" . $_SESSION["username"] . "'";
        $result = pg_query($dbcon, $query);
        if($result) {
                $row = pg_fetch_array($result);
                extract($row);
                /*if($password == $newpassword) {
                        echo "Same password as before.";
                }*/
                if($newpassword == $confirmnewpassword) {
                        $update = pg_query("UPDATE users SET password = '$newpassword' WHERE username = '" . $_SESSION["username"] . "'");
                        if($update) {
                                echo "Password changed successfully";
                        }
                }
                else {
                        echo "Passwords do not match";
                }
        }
}
      ?>
	  
	  <html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
    <h1>Change Password for </h1>
   <form method="POST" action="">
    <table>
    <tr>
	<td>Enter your username:</td>
<td><input type="username" name="username"></td>
</tr>
<tr>
    <td>Enter your existing password:</td>
    <td><input type="password" name="password"></td>
    </tr>
	
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input name ="Update" type="Submit" value="Update">
    </form>
   <p><a href="setting.php">Setting</a>
   <p><a href="logout.php">Logout</a>
   </body>
    </html>  
