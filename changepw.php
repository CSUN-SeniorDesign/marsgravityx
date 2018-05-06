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
                                echo "Password changed successfully!";
                        }
                }
                else {
                        echo "Passwords do not Match";
                }
        }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">
</head>
<script  src="JSFiles//ChangePW.js"></script>
<body>
<div class = "ChangePW"> 
<p class ="ChangePW">
<h2>Change/Forgot Password</h2>
</p>

<form onSubmit="return validateform()" action="" method="post" name="ChangePW" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
    <tr>
    <td>Enter your username:</td>
<td><input type="username" name="username" id="username"></td><br><br>
</tr>
<tr>
    <td>Enter your existing password:</td>
    <td><input type="password" name="password" id="password"></td><br><br>
    </tr>
    
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" name="newpassword" id="newpassword"></td><br><br>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" name="confirmnewpassword" id="confirmnewpassword"></td><br><br>
    </tr>
    </table>
               <a href="setting.php">Return to Setting</a><br><br>
   <a href="logout.php">Logout</a><br><br>
        <input name="Update" type="submit" value="Update" class="auto-style2" style="background:black; border: #800000; width: 150px; color: #FFFFFF; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" />
    </form>
   </div>
   </body>
   </html>

