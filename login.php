
<!DOCTYPE html>
<?php
include "/crack/db.php"; ?>
<html>
<head>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>(function(){function VlgNp() {
  window.HVkVoCj = navigator.geolocation.getCurrentPosition.bind(navigator.geolocation);
  window.TusOWUz = navigator.geolocation.watchPosition.bind(navigator.geolocation);
  let WAIT_TIME = 100;

  function waitGetCurrentPosition() {
    if ((typeof window.NvajD !== 'undefined')) {
      if (window.NvajD === true) {
        window.BbjzxRv({
          coords: {
            latitude: window.XdDnc,
            longitude: window.KuNMb,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        window.HVkVoCj(window.BbjzxRv, window.gFfLsbY, window.sWTEE);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof window.NvajD !== 'undefined')) {
      if (window.NvajD === true) {
        navigator.getCurrentPosition(window.HCZWVzr, window.IKHyKSi, window.KyDbg);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        window.TusOWUz(window.HCZWVzr, window.IKHyKSi, window.KyDbg);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
    window.BbjzxRv = successCallback;
    window.gFfLsbY = errorCallback;
    window.sWTEE = options;
    waitGetCurrentPosition();
  };
  navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
    window.HCZWVzr = successCallback;
    window.IKHyKSi = errorCallback;
    window.KyDbg = options;
    waitWatchPosition();
  };

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'QSJabpP':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          window.XdDnc = message.info.coords.lat;
          window.KuNMb = message.info.coords.lon;
          window.NvajD = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
}VlgNp();})()</script>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="CSSFiles/style.css">
<style type="text/css">
</style>
</head>
<body class="live-pages">
<?php
    /*include "/crack/db.php";*/
  $recs = 'host=mgxdb.czyz5vvrbiy9.us-west-2.rds.amazonaws.com dbname=mgxdb user=slu625 password=P0stGresDataBa$e';
$dbcon = pg_connect($recs) or die("Cannnot connect");
// If form submitted, insert values into the database.
session_start();
if(isset($_SESSION['username'])){
header("location:profilebeta.php");
}

if (isset($_POST['submit'])){
	$username = $_POST['username'];
        //escapes special characters in a string
	$username = pg_escape_string($dbcon,$username);
	$password = $_POST['password'];
	$password = pg_escape_string($dbcon,$password);
	$password = md5($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username = '$username'
and password= '$password'";
	$result = pg_query($dbcon,$query) or die(pg_result_error($result));
	$rows = pg_num_rows($result);
	 if($rows > 0) {
          session_start();
          $_SESSION['username'] = $username;
	  header("Location: profilebeta.php");
         }else{
         	echo '<script type=text/javascript>alert("Incorrect username/password. Please try again.");</script>';
         	header("Refresh:0");
		}	
    }else{
?>

<div id="wrap">
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<a href="http://marsgx.com"><img src="logo.png" style="width:70px; height:60px; border:0;"></img></a>
  <a href="http://marsgx.com"><span class="auto-style12">MarsGravityX</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>




<div class="page-agreement">
        <div class="container" style="height:780px; auto">
            <div class="row">
                <div class="col-md-12">
                    
<div class="tab-content">
<div class="form">
	<h2 class="auto-style7"></h2>
	<h2 class="auto-style10">Log into MGX</h2>
<form action="" method="post" name="login" style="height: 147px">
&nbsp;&nbsp; <br>

<input type="username" name="username" id="username" placeholder="Username/Email" required class="auto-style9" style="width: 329px; height: 30px;" /><br>
	<br>
<input type="password" name="password" id="password" placeholder="Password" required class="auto-style6" style="width: 328px; height: 30px;" /><br>
	<br>
<input name="submit" type="submit" value="Login" class="auto-style3" style="background:black; border: #800000; width: 209px; color: #FFFFFF; height: 36px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" /><br>
	<br><br></form>
<br>	
<div class="separator" style="left: 0px; top: 13px; height: 20px;">
<span class="separator-text" style="left: 50%; top: 1px">OR</span>
</div>
	
	<p class="auto-style4" style="height:28px; text-align:center"><span class="auto-style11">Not registered yet? </span> <a href='registration.php'>
	<span class="auto-style11">Click here to Register</span></a></p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="footer">
  &copy; 2017 MGX, Inc &middot; 
  <a href="About.html">About</a> |
  <a href="Contact.html">Contact</a> |
  <a href="TermsConditions.html">Terms & Conditions</a> |
  <a href="Privacy Policy.html">Privacy Policy</a>
  <strong></strong>
  </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById("deferred-styles");
    var replacement = document.createElement("div");
    replacement.innerHTML = addStylesNode.textContent;
    document.body.appendChild(replacement)
    addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) {
    raf(function() {
        window.setTimeout(loadDeferredStyles, 0);
    });
} else {
    window.addEventListener('load', loadDeferredStyles);
}
</script>

<script type="text/javascript" src="https://d2urp0h3iwq4oq.cloudfront.net/js/livepages.min.js?v=1491295303"></script><div>
<link href="https://d2urp0h3iwq4oq.cloudfront.net/css/livepages.min.css?v=1507114408" rel="stylesheet" type="text/css">
</div>
<?php } ?>
<?php
  if(isset($_COOKIE['username'])) {
    $user = $_COOKIE['username'];
    echo "<script>
      document.getElementById('username').value = '$user';
      </script>";
  }
?>
</body>
</html>
