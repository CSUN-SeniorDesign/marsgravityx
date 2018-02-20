<!DOCTYPE html>
<html>


<script type="text/javascript">
	window._S_T ||
	(function(d, css){
		var c = d.createElement('style'),
			s = d.createElement('script'),
			u = s.onload===undefined && s.onreadystatechange===undefined,
			r = function() {c.parentNode && h.removeChild(c)},
			i = 0,
			l = function(t) {t.async=t.blocking=true; t.reg_ondropcss(r); t.setup(4087, "marsgx.com *.marsgx.com")},
			f = function() {window._S_T ? l(_S_T) : i++<120 && setTimeout(f, 600)},
			H = d.getElementsByTagName('head'),
			h = H && H[0] || d.documentElement;
		s.async = true;
		s.src = '//counter.personyze.com/stat-track-lib.js';
		s.onload = s.onreadystatechange = f;
		h.appendChild(c);
		h.appendChild(s);
		if (c.styleSheet) c.styleSheet.cssText = css;
		else c.appendChild(d.createTextNode(css));
		if (u) f();
		setTimeout(r, 2000);
	})(document, 'body {visibility:hidden}');
</script>

<head>
  <title>MarsGx Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" type="text/css" href="music.css">
  <link rel="stylesheet" type="text/css" href="container.css">
  <link rel="stylesheet" type="text/css" href="CSSFiles//recommend.css">
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
</style>
<style>
body,
html {
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  background-color: #ebebeb;
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
</style>
<!-- This code allows to change background image -->
<!--<script>
    $(switchBackground);
    var oFReader = new FileReader(),
        rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

    oFReader.onload = function(oFREvent) {
        localStorage.setItem('b', oFREvent.target.result);
        switchBackground();
    };

    function switchBackground() {
      $('body').css('background-image', "url(" + localStorage.getItem('b') + ')');    
    }

    function loadImageFile(testEl) {
      if (! testEl.files.length) { return; }
      var oFile = testEl.files[0];
      if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
      oFReader.readAsDataURL(oFile);
    }
	
</script>-->
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

<body background="imagebackground.jpg">

<!--<?php
//session_start();
?>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a class="navbar-brand" href="https://www.marsgx.com"><img src="logo.png" style="width:30px; height:30px; border:0;"></img></a>
      <a class="navbar-brand" href="https://www.marsgx.com"><span style="font-size:15px;cursor:pointer;color:white;">MGX</span></a>
    </div>
	
	<!---music player-->
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<div id="mySidenav" class="sidenav">
        <li class="active"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <iframe width="90%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/239572614&amp;color=%2338372f&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true" target="_blank"></iframe></li>
	</div>
	<div id="main">
  
  <span style="font-size:15px;cursor:pointer;color:white;" onclick="openNav()" class="glyphicon glyphicon-music">Music</span>
  
  <!-- google search button -->
  <input class="txt" type="text" id="text" style="width:350px;" placeholder="Search Google"/>
  <input class="press" type="button" id="btn" value="Search"/>
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


<!-- kore wa nan desu ka? doushite mysql tsukatten no? (why you using mysql?) -->
<?php 

    $picture_to_show = "http://www.t5a.com/wp-content/uploads/2014/03/bluehead.png";
    if($filename){
        $query="INSERT INTO tbl_images (f_naam) VALUES ('$filename')";
        if($result=mysql_query($query) ){
            $picture_to_show = "data/".$filename;
        }
    }   
   

?>
<img src="<?php echo $picture_to_show; ?>"  width="35" />

	
	<!--
	<a class="navbar-brand" rel="home" href="#" title="Profile">
        <img style="max-width:40px; margin-top: -10px;"
             src="circle.png">
    </a> --> 
</div>


<!-- Settings/dropdown menu for later editing -->
 <div class="navbar-header">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
     <span class="glyphicon glyphicon-wrench" height="26" width="26"></span>
       <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="setting.html">Settings</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php"><span class=""glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>

      </ul>

	<br>
	<input id="test" type="file" onchange="loadImageFile(this)" />
  </div>
</nav>


<div class="container">

<!-- currently experimenting with this -->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!-- In case we want to put it back here
<input type="text" id="text" placeholder="Search Google" style="width: 200;" />
<input type="button" id="btn" value="Submit" />
-->
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
<div class="column">
	<div class="flex-item"></div>
<ul>
	<h2>Sports</h2>	
    <li class="web"><a href="http://www.espn.com/" target="_blank" style="color:#FFFFFF" id="ESPN">ESPN</a></li>
    <li class="web"><a href="http://www.bleacherreport.com/" target="_blank" style="color:#FFFFFF" id="BleacherReport">BleacherReport</a></li>
    <li class="web"><a href="https://www.cbssports.com/" target="_blank" style="color:#FFFFFF" id="CBSSports">CBSSports</a></li>
	<li class="web"><a href="https://www.si.com/" target="_blank" style="color:#FFFFFF" id="SI">Sports Illustrated</a></li>
    <li class="web"><a href="https://sports.yahoo.com/" target="_blank" style="color:#FFFFFF" id="YahooSports">Yahoo Sports</a></li>
	
  </ul>
   <footer></footer>
   
	<div class="fixed"></div>

  <ul>
	<h2>News</h2> 
    <li class="web"><a href="http://www.cnn.com/" target="_blank" style="color:#FFFFFF" id="CNN">CNN</a></li>
    <li class="web"><a href="http://www.bbc.co.uk/news" target="_blank" style="color:#FFFFFF" id="BBC">BBC</a></li>
    <li class="web"><a href="http://www.foxnews.com/" target="_blank" style="color:#FFFFFF" id="FOX">FOX</a></li>
	<li class="web"><a href="https://www.huffingtonpost.com/" target="_blank" style="color:#FFFFFF" id="HuffingtonPost">HuffingtonPost</a></li>
    <li class="web"><a href="http://www.wsj.com/" target="_blank" style="color:#FFFFFF" id="WSJ">WSJ</a></li>
	
  </ul>
<footer></footer>
  
  <div class="fixed"></div>
<ul>
	<h2>Social Media</h2> 
    <li class="web"><a href="https://www.facebook.com/" target="_blank" style="color:#FFFFFF" id="Facebook">Facebook</a></li>
    <li class="web"><a href="https://www.twitter.com/" target="_blank" style="color:#FFFFFF" id="Twitter">Twitter</a></li>
    <li class="web"><a href="https://www.instagram.com/" target="_blank" style="color:#FFFFFF" id="Instagram">Instagram</a></li>
	<li class="web"><a href="https://www.reddit.com/" target="_blank" style="color:#FFFFFF" id="Reddit">Reddit</a></li>
    <li class="web"><a href="https://www.linkedin.com/" target="_blank" style="color:#FFFFFF" id="LinkedIn">LinkedIn</a></li>
	
  </ul>
   <footer></footer>
   
	<div class="fixed"></div>
  <ul>
    <h2>Gaming</h2>
    <li class="web"><a href="http://www.ign.com/" target="_blank" style="color:#FFFFFF" id="IGN">IGN</a></li>
    <li class="web"><a href="https://kotaku.com/" target="_blank" style="color:#FFFFFF" id="Kotaku">Kotaku</a></li>
    <li class="web"><a href="https://www.polygon.com/" target="_blank" style="color:#FFFFFF" id="Polygon">Polygon</a></li>
	<li class="web"><a href="http://www.pcgamer.com/" target="_blank" style="color:#FFFFFF" id="PCGamer">PCGamer</a></li>
    <li class="web"><a href="https://www.gamefaqs.com/" target="_blank" style="color:#FFFFFF" id="GameFAQs">GameFAQs</a></li>
	
  </ul>
<footer></footer>

</div>	  

<div class="box" name="urlid">
<?php
require ('recommend.php');
?>
<div id="#urlset">

</div>



</div>
</body>
</html>