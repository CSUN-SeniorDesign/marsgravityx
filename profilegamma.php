<?php
 include("check.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>MarsGx Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSSFiles//music.css">
  <link rel="stylesheet" type="text/css" href="CSSFiles//profilecontainer.css">
  <link rel="stylesheet" type="text/css" href="CSSFiles//recommend.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="CSSFiles//ProfileImageStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta http-equiv="X-Frame-Options" content="allow"> 
</head>

<style>
.imgwrapper img {
	display: inline-block;
	margin: 100px 100px;
}
.search_bar input[type=text] {
    position:absolute;
    left:20%;
    top:25%;
    width:10%;
    background-color:white;
    color:grey;
}
.button {
	position:absolute;
    left:30%;
    top:25%;
    width:10%;
}
#input {
    -moz-appearance: textfield;
    -webkit-appearance: textfield;
    background-color: white;
    background-color: -moz-field;
    border: 1px solid darkgray;
    box-shadow: 1px 1px 1px 0 lightgray inset;
    font: -moz-field;
    font: -webkit-small-control;
    margin-top: 5px;
    padding: 2px 3px;
    width: 398px;
}
.navbar-right {
margin-top: 10px;
}
</style>
<style>
body,
html {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
 
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("test.jpg");
  font-family: Arial;
  font-size: 12px;
  color: #363636;
}
#notice {
  padding-top: 42px;
  background-image: url('http://cdn4.iconfinder.com/data/icons/fatcow/32x32_0540/link_add.png');
  background-repeat: no-repeat;
  background-position: top center;
  text-align: center;
  font-size: 25px;
  text-shadow: 0px 1px 0px #FFF;
  margin-top: 15%;
}
#notice > span {
  font-size: 12px;
}
#link_grabber {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: none;
}
#link_grabber.active {
  display: block;
  opacity: 0.01;
}
h2 {
    text-align: center;
}
h3 {
	text-align: center;
	color: white;
	margin-right:0px;
	
}
li {
	text-align: center;
}

.content {
    position: absolute;
    top: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding-top: 10px;
	padding-bottom:0px;
 opacity: 0.8;
}
.bg-light {
    background-color: #f8f9fa!important;
}


</style>


<script>
$(function () {    
    $('.delete').click(function () {
            $(this).prev('a').remove();
            $(this).next('br').hide();
            $(this).remove();
    });
    $('#addLinkBtn').click(function () {
        var href = $('#newLink').val();
        var link = '<a href="' + href + '" target="_blank">' + href + '</a>';
        var deleteLink = '<span class="delete">(X)</span><br />';
        
        $('div#input>div').append(link + deleteLink);
        $('.delete').click(function () {
            $(this).prev('a').remove();
            $(this).next('br').hide();
            $(this).remove();
        });
    });
});
</script>

<body>

<div class="content">
<!--ADDED THIS STYLING HERE FOR THE NAV BAR FOR BETTER POSITIONING -->
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="padding-bottom: 1px; height: 51px;">
		
	<!---music player-->
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">		
	<div id="google" style="margin-left:350px">
  
  <!-- google search button -->
  <input class="txt" type="text" id="text" style="width:360px; margin-top:12px;" placeholder="Search Google"/>
  <input class="press" type="button" id="btn" value="Search" style="color: black;"/>
</div>
  </ul>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<!-- right portion of navbar -->

<ul class="nav navbar-nav navbar-right">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" 
            data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>



</div>

<!-- Settings/dropdown menu for later editing -->
 <div class="navbar-header">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
     <span class="glyphicon glyphicon-wrench" height="26" width="26"></span>
       <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a align="left" role="menuitem" tabindex="-1" href="setting.php">Settings</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a align="left" role="menuitem" tabindex="-1" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
		<li role="presentation" class="divider"></li>
	  
	</ul>
  </div>

      </ul>

	<br>

  </div>
</nav>
</div>




<script>
$("#btn").click( function() {
    var url = "http://www.google.com/search?q=" + $("#text").val();
    window.open(url);
});
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br> 
<script type="script/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.jsc">
	$("div").click(function() {
    var _this = $(this);
    var ref = $(this).data('ref');
    $.ajax({
    	url: '/recommend.php',
        type: 'POST',
        data: {sportsid:ref, newsid:ref, socialid:ref, gamingid:ref}
        success: function(href) { 
            if(href != '')
               _this.attr("href",href);
        }
    });
}
</script>

<div class="column">
<iframe src="https://open.spotify.com/embed/user/diplomaddecent/playlist/1QdvKt29VxL0fbtLdj7oat" width="300" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

	<div class="flex-item" sportsid="sports"></div>
<ul style="list-style-type:none">
	<h2>Sports</h2>	
    <li class="web"><a href="http://www.espn.com/" target="_blank" style="color:#FFFFFF" id="ESPN">ESPN</a></li>
    <li class="web"><a href="http://www.bleacherreport.com/" target="_blank" style="color:#FFFFFF" id="BleacherReport">BleacherReport</a></li>
    <li class="web"><a href="https://www.cbssports.com/" target="_blank" style="color:#FFFFFF" id="CBSSports">CBSSports</a></li>
	<li class="web"><a href="https://www.si.com/" target="_blank" style="color:#FFFFFF" id="SI">Sports Illustrated</a></li>
    <li class="web"><a href="https://sports.yahoo.com/" target="_blank" style="color:#FFFFFF" id="YahooSports">Yahoo Sports</a></li>
	
  </ul>
   <footer></footer>
   
	<div class="fixed" newsid="news"></div>

  <ul style="list-style-type:none">
	<h2>News</h2> 
    <li class="web"><a href="http://www.cnn.com/" target="_blank" style="color:#FFFFFF" id="CNN">CNN</a></li>
    <li class="web"><a href="http://www.bbc.co.uk/news" target="_blank" style="color:#FFFFFF" id="BBC">BBC</a></li>
    <li class="web"><a href="http://www.foxnews.com/" target="_blank" style="color:#FFFFFF" id="FOX">FOX</a></li>
	<li class="web"><a href="https://www.huffingtonpost.com/" target="_blank" style="color:#FFFFFF" id="HuffingtonPost">HuffingtonPost</a></li>
    <li class="web"><a href="http://www.wsj.com/" target="_blank" style="color:#FFFFFF" id="WSJ">WSJ</a></li>
	
  </ul>
<footer></footer>
  
  <div class="fixed" socialid="socialmedia"></div>
<ul style="list-style-type:none">
	<h2>Social</h2> 
    <li class="web"><a href="https://www.facebook.com/" target="_blank" style="color:#FFFFFF" id="Facebook">Facebook</a></li>
    <li class="web"><a href="https://www.twitter.com/" target="_blank" style="color:#FFFFFF" id="Twitter">Twitter</a></li>
    <li class="web"><a href="https://www.instagram.com/" target="_blank" style="color:#FFFFFF" id="Instagram">Instagram</a></li>
	<li class="web"><a href="https://www.reddit.com/" target="_blank" style="color:#FFFFFF" id="Reddit">Reddit</a></li>
    <li class="web"><a href="https://www.linkedin.com/" target="_blank" style="color:#FFFFFF" id="LinkedIn">LinkedIn</a></li>
	
  </ul>
   <footer></footer>
   
	<div class="fixed" gamingid="gaming"></div>
  <ul style="list-style-type:none">
    <h2>Gaming</h2>
    <li class="web"><a href="http://www.ign.com/" target="_blank" style="color:#FFFFFF" id="IGN">IGN</a></li>
    <li class="web"><a href="https://kotaku.com/" target="_blank" style="color:#FFFFFF" id="Kotaku">Kotaku</a></li>
    <li class="web"><a href="https://www.polygon.com/" target="_blank" style="color:#FFFFFF" id="Polygon">Polygon</a></li>
	<li class="web"><a href="http://www.pcgamer.com/" target="_blank" style="color:#FFFFFF" id="PCGamer">PCGamer</a></li>
    <li class="web"><a href="https://www.gamefaqs.com/" target="_blank" style="color:#FFFFFF" id="GameFAQs">GameFAQs</a></li>
	
  </ul>
 
	<li style="list-style-type:none">
	<div class="container">
  <div class="profile large">
    <div class="cover"><a href="https://www.instagram.com/"><img src="https://source.unsplash.com/random/700x300"/></a>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic"><a href ="https://www.facebook.com/"> <img src="https://source.unsplash.com/random/300x300"/></a>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
     <div class="username">
        <div class="name"><span class="verified"></span>MarsGravityX</div>
        <div class="about">Licking lolipops</div>
      </div>
    </div>
  </div>
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<script  src="JSFiles//ProfileImageScript.js"></script>
	</li>

</div>	  

<div class="column1" name="urlid">
<li style="list-style-type:none">
<h3>Recommendations</h3>
 

<?php
require ('recommend.php');
?>
</li>


<div id="#urlset">

</div>

<!--Profile Img-->

&nbsp;
&nbsp;


</div>
</body>
</html>
