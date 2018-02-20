<!DOCTYPE html>
<html>
<body>
<script type="script/javascript">
	$("a").click(function() {
    var _this = $(this);
    var ref = $(this).data('ref');
    $.ajax({
    	url: '/recommend.php',
        type: 'POST',
        data: {id:ref}
        success: function(href) { 
            if(href != '')
               _this.attr("href",href);
        }
    });
}
</script>


<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = mgxdb";
   $user 		= "user = postgres"; 
   $password 	=  "password = ";

	
	// Connect to database server
	$dbcon = pg_connect("$host $port $dbname $user $password") or die ("Cannot connect");
	// Count number of clicks
	/*if($_POST['urlid'] > 0) {
		$urlid = $_POST['urlid'];
		$sportsClickCountQuery = "UPDATE url SET sportscount = sportscount + 1 WHERE sports IS NOT NULL";
		$sportsClickCount = pg_query($dbcon, $sportsClickCountQuery);
		$newsClickCountQuery = "UPDATE url SET newscount = newscount + 1 WHERE news IS NOT NULL";
		$newsClickCount = pg_query($dbcon, $newsClickCountQuery);
		$socialMediaClickCountQuery = "UPDATE url SET socialmediacount = socialmediacount + 1 WHERE socialmedia IS NOT NULL";
		$socialMediaClickCount = pg_query($dbcon, $socialMediaClickCountQuery);
		$gameNewsClickCountQuery = "UPDATE url SET gamenewscount = gamenewscount + 1 WHERE gamenews IS NOT NULL";
		$gameNewsClickCount = pg_query($dbcon, $gameNewsClickCountQuery);
	}*/
	//  query
	$sportsQuery = "SELECT sports FROM url WHERE sports IS NOT NULL ORDER BY RANDOM() LIMIT 3";
	$newsQuery = "SELECT news FROM url WHERE news IS NOT NULL ORDER BY RANDOM() LIMIT 3";
	$socialMediaQuery = "SELECT socialmedia FROM url WHERE socialmedia IS NOT NULL ORDER BY RANDOM() LIMIT 3";
	$gameNewsQuery = "SELECT gamenews FROM url WHERE gamenews IS NOT NULL ORDER BY RANDOM() LIMIT 3";
	// Execute each query.
	$sports = pg_query($dbcon, $sportsQuery);
	$news = pg_query($dbcon, $newsQuery);
	$socialMedia = pg_query($dbcon, $socialMediaQuery);
	$gameNews = pg_query($dbcon, $gameNewsQuery);
	$sportColumn = pg_fetch_all_columns($sports);
	// Displays only values of array element as clickable links.
	foreach($sportColumn as $key => $value) {
		$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", 
			"<a href=\"\\0\">\\0</a>", $value);
		echo ($value) . "<br />";
	}

	$newsColumn = pg_fetch_all_columns($news);
	$socialMediaColumn = pg_fetch_all_columns($socialMedia);
	$gameNewsColumn = pg_fetch_all_columns($gameNews);
?>

		
  
<table style='border: solid 2px black;'>
</tr>
<div id="row">


 </table>   
</div>
 </body>
</html> 
  
   