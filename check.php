<?php
include("../crack/db.php");
session_start();
$dbcon = pg_connect($recs) or die ("Cannot connect");
$user_check=$_SESSION['username'];
 
$sql = pg_query($dbcon,"SELECT username FROM users WHERE username='$user_check' ");
 
$row=pg_fetch_array($sql);
 
$login_user=$row['username'];
 
if(!isset($user_check))
{
header("Location: login.php");
}
?>