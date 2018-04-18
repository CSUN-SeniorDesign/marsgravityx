<?php
include("/crack/db.php");
session_start();
$user_check=$_SESSION['username'];
 
$sql = pg_query($db,"SELECT username FROM users WHERE username='$user_check' ");
 
$row=pg_fetch_array($sql,pg_fetch_assoc);
 
$login_user=$row['username'];
 
if(!isset($user_check))
{
header("Location: login.php");
}
?>
