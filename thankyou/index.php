<?php
$contactId = $_GET['conId'];
$con = mysqli_connect("localhost","xxxxxxxxxx","xxxxxxxxxxxxxxxxx","xxxxxxxxxxxxxxxxxxx");
$sql1 = "SELECT * FROM `schedule` WHERE `conID`='$contactId'";
	    $results =$con->query($sql1);
	    //var_dump($results);
	   $phone;$name;$datetime;$apmttime;
	    foreach($results as $result1)
	    { 
	    $phone = $result1['phone'];
        $name = $result1['name'];
        $datetime = $result1['datetime'];
        $apmttime = $result1['apmttime'];
        //var_dump($name);
	    } 
    // Replace with your username
$user = "arfeen";

// Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
$apikey = "vfmxutaugp3CuAGHLziO"; 

// Replace if you have your own Sender ID, else donot change
$senderid  =  "ARFEEN"; 

// Replace with the destination mobile Number to which you want to send sms
$mobile  =  $phone; 

// Replace with your Message content
$message   =  "Hi,

Thank you for registering for the Strategy Session by Arfeen Khan's Blueprint Coaches.

Your session will be taken on ".$datetime." Time ".$apmttime.".

Please come near the strategy session area 10 minutes prior.

Regards,
Team Arfeen Khan"; 
$message = urlencode($message);

// For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
$type   =  "txt";

$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
    curl_close($ch); 

// Display MSGID of the successful sms push
//echo $output;


?>
<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
 
<html>
	<head>
		<title>Congratulations!</title>
		 <link rel="icon" type="image/png" href="http://speaktofortune.com/images/Fevicon.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->



<style>
.mylogo{
    width:20%;
}
    @media only screen and (max-width: 500px) {
       .mylogo{
           width: 60%;
margin-top: 10%;
} 

}
    
</style>
<!-- Hotjar Tracking Code for http://speaktofortune.com/mumbai/thankyou/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:856563,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '265713590734674');
  fbq('track', 'PageView');
</script>
<script>
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=265713590734674&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109138999-31"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109138999-31');
</script>
<script> window.fbMessengerPlugins = window.fbMessengerPlugins || { init : function() { FB.init({ appId: "1678638095724206", xfbml: true, version: "v2.6" }); }, callable : [] }; window.fbAsyncInit = window.fbAsyncInit || function() { window.fbMessengerPlugins.callable.forEach( function( item ) { item(); } ); window.fbMessengerPlugins.init(); }; setTimeout( function() { (function(d, s, id){ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) { return; } js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk')); }, 0); </script>	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
					    <img class="mylogo" src="http://speaktofortune.com/webinar/images/ak.png" />
						<h1>Thank You</h1>
						
						
<div class="thankyou-content">	
<p style="font-weight: 700;opacity:1; letter-spacing: 1px;">Thank you for signing up for Strategy Session.</p>
<p style="font-weight: 700;opacity:1; letter-spacing: 1px;">You will receive SMS on your registered mobile no. with your selected time slot.</p>
<p class="top1"  style="display:none;    font-size: 28px;
    margin-top: 2%;
    font-weight: 600;
    color: #fff;
    opacity: 1;">Date: 26th NOVEMBER, MONDAY 2018 <br>
Time: 6.00 PM - 7.30 PM
<br>
<div class="venue" style="display:none;font-size: 22px;
    font-weight: 600;">
		You Will Receive The Joining Link 1 Hour Prior To The Webinar Timings

	</div>

<!--And don't forget to save the above-mentioned number so that you do not miss the confirmation call.-->
</p>
    <!-- <p class="top2" style="    font-size: 30px;-->
    <!--    font-weight: 800;-->
    <!--    color: #fff;-->
    <!--    width: 70%;-->
    <!--    margin: 0% auto;-->
    <!--    opacity: 2 !important;">-->
        
    <!--THE SECRET MILLIONAIRE BLUEPRINT - MASTERCLASS-->
    <!--<br>-->
    <!-- </p>-->
    
    </div>
						<!--		<div style="text-align:center;margin-top:2%;" class="fb-send-to-messenger test-fb-send-to-messenger" messenger_app_id="1678638095724206" page_id="127346060690967" data-ref="b64:U1RGIFRIQU5LIFlPVQ==" color="blue" size="xlarge"> </div>
<div style="text-align:center;margin-top:2%;margin-left: 5%;" class="fb-send-to-messenger test-fb-send-to-messenger" messenger_app_id="1678638095724206" page_id="127346060690967" data-ref="b64:U1RGIFRIQU5LIFlPVSBtdW1iYWk=" color="white" size="xlarge"> </div>
<div style="text-align:center;margin-top:2%;margin-left: 5%;" class="fb-send-to-messenger test-fb-send-to-messenger" messenger_app_id="1678638095724206" page_id="127346060690967" data-ref="b64:U1RGIFRIQU5LIFlPVQ==" color="white" size="xlarge"> </div>-->
					<div style="text-align:center;margin-top:2%;margin-left: 5%;" class="fb-send-to-messenger test-fb-send-to-messenger" messenger_app_id="1678638095724206" page_id="127346060690967" data-ref="b64:U1RGIFRIQU5LIFlPVSBtdW1iYWkgZGF0YQ==" color="blue" size="xlarge"> </div>
					<!--	<div class="hidemeplz">
						<h3 style="font-size: 22px;margin-top: 2em;margin-bottom: 4px;font-weight: 600; ">Follow us on</h3>
						<nav style="margin:0px;">
							<ul>
								
                                                                <li><a href="https://www.youtube.com/user/successunforgettable" class="icon fa-youtube"><span class="label">Twitter</span></a></li>
<li><a href="https://twitter.com/arfeenkhan" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="https://www.instagram.com/arfeen.khan/" class="icon fa-instagram"><span class="label">Twitter</span></a></li>
<li><a href="https://plus.google.com/u/0/+ArfeenKhan" class="icon fa-google"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/ArfeenKhanpage/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							</ul>
						</nav>
						</div>-->
					</header>

				

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	
	</body>
	
	
</html>