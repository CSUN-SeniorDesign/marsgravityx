<html>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css">
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
}VlgNp();})()</script><head>
<title>Logout</title>
<style type="text/css" media="screen">
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}h1{font-size:2em;margin:.67em 0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}a{color:#337ab7;text-decoration:none}h1,h2{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h2{margin-top:20px;margin-bottom:10px}h1{font-size:36px}h2{font-size:30px}p{margin:0 0 10px}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul{margin-top:0;margin-bottom:10px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-md-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-12{float:left}.col-md-12{width:100%}}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li.active>a{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.container:after,.container:before,.nav:after,.nav:before,.row:after,.row:before{content:" ";display:table}.container:after,.nav:after,.row:after{clear:both}@-ms-viewport{width:device-width}.live-pages{background:#454954}.live-pages .page-header{margin:0;padding:40px 0;border-bottom:1px solid #eee;background:#fff}.live-pages .page-header h1{font-size:25px;line-height:35px;margin:0}.live-pages .page-agreement{padding:30px 0;background:#f4f9fd;background:-moz-linear-gradient(top,#f4f9fd 0,#fff 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#f4f9fd),color-stop(100%,#fff));background:-webkit-linear-gradient(top,#f4f9fd 0,#fff 100%);background:-o-linear-gradient(top,#f4f9fd 0,#fff 100%);background:-ms-linear-gradient(top,#f4f9fd 0,#fff 100%);background:linear-gradient(to bottom,#f4f9fd 0,#fff 100%)}.live-pages .page-agreement .page-tabs .nav-tabs{border:0;margin:10px 0 30px 0}.live-pages .page-agreement .page-tabs .nav-tabs li a{border:1px solid #eee;border-radius:5px;background:#fff}.live-pages .page-agreement .page-tabs .nav-tabs li.active a{background:#0053a7;color:#fff}.live-pages .page-agreement .tab-content{font-size:18px;line-height:28px;word-wrap:break-word}.live-pages .page-agreement .tab-content h1{font-size:30px;margin:0 0 30px 0}.live-pages .page-agreement .tab-content h2{font-size:24px;margin:0 0 30px 0}.live-pages .page-agreement .tab-content p{margin:0 0 30px 0;color:#333}.live-pages .page-agreement .tab-content ul{margin:0 0 30px 0} .live-pages .page-credits{background:#17191d;padding:20px 0;color:#FFF;font-size:14px;line-height:18px}.live-pages .page-credits p {margin:0;}.live-pages .page-credits a{color:#EEE}
</style>
<?php
session_start();
$_SESSION = array();
if(ini_get("session.use_cookies")){
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time()-42000, 
    $params["path"], $params["domain"], 
    $params["secure"], $params["httponly"]
  );
  //session_unset();
}
session_destroy();
?>
</head>
<body class="live-pages">
<div id="wrap">
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
					<a href="https://www.marsgx.com"><img src="logo.png" style="width:70px; height:60px; border:0;"></img></a>
                       <a href="https://www.marsgx.com">MarsGravityX</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page-agreement">
        <div class="container" style="height:800px; auto">
            <div class="row">
                <div class="col-md-12">
                    
<div class="tab-content">
<h3>Logout Successfully! We hope you had an enjoying experience using our services!</h3>
<br>
<br>
<p><a href="https://www.marsgx.com/login.php"><h4>Click here to login again!</h4></a></p>
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
<br>
<br>
<br>                  
</div>

<div class="footer">
  &copy; 2017 MGX, Inc &middot; 
  <a href="About.html">About</a> |
  <a href="Contact.html">Contact</a> |
  <a href="Terms and Conditions.html">Terms & Conditions</a> |
  <a href="Privacy Policy.html">Privacy Policy</a>
  <strong></strong>
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


</body></html>