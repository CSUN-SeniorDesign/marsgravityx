<!DOCTYPE html>
<html>
<body>
<?php
	ob_start();
	//session_start();
	ini_set("display_errors","off");
  	$host        = "host = localhost";
   	$port        = "port = 5432";
    $dbname      = "dbname = mgxdb";
    $user 		= "user = postgres"; 
    $password 	=  "password = ";
	$dbcon = pg_connect("$host $port $dbname $user");
	//if(isset($_GET['urlid'])) {
		$urlid = $_GET['urlid'];
		$category = pg_query($dbcon, "SELECT urlid FROM url ORDER BY RANDOM() LIMIT 1");
		$categoryArray = array();
		while ($category_result = pg_fetch_array($category, PGSQL_ASSOC)) {
			$categoryArray[] =  "<a href='$category_result[$urlid]'>".$category_result[$urlid]."</a><br/>";
		}
		echo json_encode($categoryArray);
		//exit;
	//}
	//$urlid = $_GET['urlid'];
	//$category = pg_query($dbcon, "SELECT $urlid FROM url ORDER BY RANDOM() LIMIT 4");
	/*$categoryArray = array();
	while ($category_result = pg_fetch_array($category, PGSQL_ASSOC)) {
		$categoryArray[] =  "<a href='$category_result[$urlid]'>".$category_result[$urlid]."</a><br/>";
	}
	echo json_encode($categoryArray);
	exit;*/

?>
<div class="box" name="urlid" method="get">
</div>
</body>
</html>