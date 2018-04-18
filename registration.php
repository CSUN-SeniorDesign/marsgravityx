<!DOCTYPE html>
<html>
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
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="CSSFiles/style.css" />
<style type="text/css">

html    {
	height: 650px;
	 background: linear-gradient(black, gray);
	
}

nav.navbar {
    color: blue;
    text-align: left;
    
    text-align:center;
}

.form 	{
	background-color: #FFFFFF;
	border: 4px solid black;
	width: 650px;
	margin: auto;
	margin-top: 75px;
	height: 450px;
	
	
}

.signup {
	
background-color: lightgray;
	border: 1px solid black;
	width: 600px;
	margin: auto;
	
	height: 300px;
}

.auto-style1 {
	text-align: center;
}


.auto-style2 {
	margin-left: 8px;
}
.auto-style3 {
	margin-left: 1px;
}


.auto-style4 {
	margin-left: 0px;
}


.auto-style5 {
	font-size: x-large;
}
.auto-style6 {
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	font-size: small;
	font-weight: bold;
	margin-left: 0px;
}
.auto-style8 {
	margin-left: 20px;
	text-align: left;
}


</style>
</head>
<body class="live-pages">

<?php
include  "/var/www/crack/db.php"; 
// If form submitted, insert values into the database.
//$gender = "";
//IMPLEMENT EMAIL
$recs = 'host=mgxdb.czyz5vvrbiy9.us-west-2.rds.amazonaws.com dbname=mgxdb user=slu625 password=P0stGresDataBa$e';
if(isset($_POST['submit'])) {
	$dbcon = pg_connect($recs) or die("Cannot connect");
	$firstname = pg_escape_string($dbcon, $_POST['firstname']);
	$lastname = pg_escape_string($dbcon, $_POST['lastname']);
	$username = pg_escape_string($dbcon, $_POST['username']); 
	$password = pg_escape_string($dbcon, $_POST['password']);
	$password = md5($password);
	$phoneNumber = $_POST['phonenumber'];
	$phoneNumber = pg_escape_string($dbcon, $phoneNumber);
	/*if(isset($_POST['gender'])) {
		if(!empty($_POST['gender'])) {
			$gender = $_POST['gender'];
			$gender = pg_escape_string($dbcon, $gender);
		}
	}*/
	$dob = pg_escape_string($dbcon, $_POST['bday']);

	$sql = pg_query("SELECT * FROM users WHERE username = '$username'");
	if(pg_num_rows($sql) > 0) {
		echo "Sorry, that user already exists.";
		exit();
	}
	$query = pg_query($dbcon, "INSERT INTO users (first_name, last_name, username, password, phonenumber, bday)
VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$phoneNumber."', '".$dob."')");
    	
        if($query){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
			$_SESSION['message'] = "You are now logged in.";
			$_SESSION['username'] = $username;
			header("location: profilebeta.php");
        }
        else {
        	echo pg_result_error($query);
        }

  } 

  else { 

  ?>

<div id="wrap">
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<a href="http://marsgx.com"><img src="logo.png" style="width:70px; height:60px; border:0;"></img></a>
  <a href="http://marsgx.com"><span class="auto-style12">MGX</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>

	
<div class="page-agreement">
        <div class="container" style="height:780px; auto">
            <div class="row">
                <div class="col-md-12">
<div class="form">
<h2 class="auto-style8">Sign Up</h2>
<form name="registration" action="registration.php" method="POST">
<div class="auto-style1" style="height: 220px">
	<div class="signup">	
		<br>	
<input type="text" name="firstname" placeholder="First Name" required class="auto-style2" style="width: 140px" />
<input type="text" name="lastname" placeholder="Last Name" required class="auto-style3" style="width: 150px" />&nbsp;
<input type="username" name="username" placeholder="Username" required class="auto-style4" style="width: 295px" /><br><br>&nbsp;
<input type="password" name="password" placeholder="Password" required style="width: 300px" /><br><br>&nbsp;
<input type="tel" name="phonenumber" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Phone Number (format: xxx-xxx-xxxx)" required style="width: 300px" /><br><br>&nbsp;&nbsp;



<form action="" method="POST">
  Date of Birth:
  <input type="date" name="bday" required> <br> <br>
</form>
  


<!--<form action="" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
<input type="checkbox" name="checkbox" value="check" id="agree"  /> I have read and agree to the <a href="TermsConditions.html" target="_blank">Terms and Conditions 


</form> -->
<br>
<input type="submit" name="submit" value="Register" class="auto-style6" style="width: 122px; background: black; color: #FFFFFF; border: #800000; height: 31px;" /> </div>
</div>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
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
</body>
</html>
