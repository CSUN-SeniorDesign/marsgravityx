<!DOCTYPE html>
<?php include("../crack/db.php"); ?>
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
	$dbcon = pg_connect($recs) or die ("Cannot connect");
	// Count number of clicks
	/*if($_POST['sportsid'] > 0) {
		$urlid = $_POST['sportsid'];
	}
	$sportsClickCountUpdateQuery = "UPDATE url SET sportsclickcount = sportsclickcount + 1 WHERE sports IS NOT NULL";
	pg_query($dbcon, $sportsClickCountUpdateQuery);
	$newsClickCountUpdateQuery = "UPDATE url SET newsclickcount = newsclickcount + 1 WHERE news IS NOT NULL";
	pg_query($dbcon, $newsClickCountUpdateQuery);
	$socialMediaClickCountUpdateQuery = "UPDATE url SET socialmediaclickcount = socialmediaclickcount + 1 WHERE socialmedia IS NOT NULL";
	pg_query($dbcon, $socialMediaClickCountUpdateQuery);
	$gameNewsClickCountUpdateQuery = "UPDATE url SET gamenewsclickcount = gamenewsclickcount + 1 WHERE gamenews IS NOT NULL";
	pg_query($dbcon, $gameNewsClickCountUpdateQuery);
	$sportsClickCountQuery = "SELECT sportsclickcount FROM url";
	$sportsClickCount = pg_query($dbcon, $sportsClickCountQuery);
	$newsClickCountQuery = "SELECT newsclickcount FROM url";
	$newsClickCount = pg_query($dbcon, $newsClickCountQuery);
	$socialMediaClickCountQuery = "SELECT socialmediaclickcount FROM url";
	$socialMediaClickCount = pg_query($dbcon, $socialMediaClickCountQuery);
	$gameNewsClickCountQuery = "SELECT gamenewsclickcount FROM url";
	$gameNewsClickCount = pg_query($dbcon, $gameNewsClickCountQuery);
	if($sportsClickCount > ($newsClickCount + $socialMediaClickCount + $gameNewsClickCount)) {
		foreach($sportsColumn as $key => $value) {
			$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", "<a href=\"\\0\">\\0</a>", $value);
			echo ($value) . "<br />";
		}
	}
	else if($newsClickCount > ($sportsClickCount + $socialMediaClickCount + $gameNewsClickCount)){
		foreach($newsColumn as $key => $value) {
			$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", "<a href=\"\\0\">\\0</a>", $value);
			echo ($value) . "<br />";
		}
	}
	else if($socialMediaClickCount > $(sportsClickCount + $newsClickCount +$gameNewsClickCount)) {
		foreach($socialMediaColumn as $key => $value) {
			$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", "<a href=\"\\0\">\\0</a>", $value);
			echo ($value) . "<br />";
		}
	}
	else {
		foreach($gameNewsColumn as $key => $value) {
			$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", "<a href=\"\\0\">\\0</a>", $value);
			echo ($value) . "<br />";
		}
	}
	*/
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
	} echo "<br>";
	$newsColumn = pg_fetch_all_columns($news);
	foreach($newsColumn as $key => $value) {
		$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", 
			"<a href=\"\\0\">\\0</a>", $value);
		echo ($value) . "<br />";
	} echo "<br>";
	$socialMediaColumn = pg_fetch_all_columns($socialMedia);
	foreach($socialMediaColumn as $key => $value) {
		$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", 
			"<a href=\"\\0\">\\0</a>", $value);
		echo ($value) . "<br />";
	} echo "<br>";
	$gameNewsColumn = pg_fetch_all_columns($gameNews);
	foreach($gameNewsColumn as $key => $value) {
		$value = preg_replace("~[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]~", 
			"<a href=\"\\0\">\\0</a>", $value);
		echo ($value) . "<br />";
	}
?>

		
  
<table style='border: solid 8px black;'>
</tr>
<div id="row">

 </table>   
</div>
 </body>
</html> 