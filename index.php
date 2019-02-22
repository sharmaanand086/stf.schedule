
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/1e851d58a1.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700%7CRoboto:400,300,100,500,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800,800italic,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/style1.css?v=1" rel="stylesheet" type="text/css" />
<link href="assets/main.css" rel="stylesheet" type="text/css" />
<link href="assets/responsive1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/Animations.css">
<link rel="stylesheet" type="text/css" href="assets/modal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/jquery.bpopup.min.js"></script>
<title>Book Your Call Now!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script>
        $(document).ready(function () {
            $('.cta-btn').click(function () {
                $('#popup').bPopup();
            });
        });
</script>
<style type="text/css">
.note{
	position: absolute;
	bottom:-40px;
	right:0;
	z-index:9999;
}
@media(max-width:800px) {
	.note{ display:none;}
	.videobox{ margin-bottom:20px;}
}
</style>
</head>
<body>
<!--    header_start    -->
<div id="popup" class="popumbox">
  <div class="popin">
    <a id="close-button" class="button b-close"><i class="fa fa-times"></i></a>
    <!--<div id="step1">-->
    <!--  <div class="progress">-->
    <!--    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%"> 20% </div>-->
    <!--  </div>-->
    <!--   <div class="questionbox">-->
    <!--    <center>-->
    <!--      <h3>#1 - “Let’s get started!  Please pick one of the following:”</h3>-->
    <!--    </center>-->
    <!--    <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>-->
    <!--      <input type="radio" onClick="reply_click(this.id)" name="optionsRadios1" data-toggle="radio" id="step1radio1" value=" I want to become an author, speaker or coach">-->
    <!--      <input type="hidden" id="hiddentext1" value="" />-->
    <!--      <i></i> I want to become an author, speaker or coach </label>-->
    <!--    <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>-->
    <!--      <input type="radio" name="optionsRadios1" onClick="reply_click(this.id)"  data-toggle="radio" id="step1radio2" value="I have my business(or want to start) and want to grow it">-->
           
    <!--      <i></i>I have my business(or want to start) and want to grow it</label>-->
    <!--    <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>-->
    <!--      <input type="radio" name="optionsRadios1" onClick="reply_click(this.id)"  data-toggle="radio" id="step1radio3" value="I want to become rich and leave a legacy">-->
           
    <!--      <i></i> I want to become rich and leave a legacy</label>-->
    <!--    <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>-->
    <!--      <input type="radio" name="optionsRadios1" onClick="reply_click(this.id)"  data-toggle="radio" id="step1radio4" value="I want to make money online and start earning passive income..">-->
            
    <!--      <i></i> I want to make money online and start earning passive income..</label>-->
        
    <!--    <p></p>-->
    <!--  </div>-->
      
    </div>
    <!--Page2-->
    <div id="step2" style="display:none">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40% </div>
      </div>
    <div class="questionbox">
        <h3>#2 - How dedicated are you to starting or growing your online business? </h3>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click1(this.id)" name="optionsRadios2" data-toggle="radio" id="step2radio1" value=" I am 100% dedicated and willing to do whatever it takes.">
          <i></i> I am 100% dedicated and willing to do whatever it takes.</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click1(this.id)" name="optionsRadios2" data-toggle="radio" id="step2radio2" value="I’m excited, but I still have questions before committing.">
          <i></i> I’m excited, but I still have questions before committing. </label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click1(this.id)" name="optionsRadios2" data-toggle="radio" id="step2radio3" value=" I am just exploring right now and not sure if I’m ready.">
          <i></i> I am just exploring right now and not sure if I’m ready.</label>
          <input type="hidden" id="hiddentext2" value="" />
        <center>
          <div class="alert alert-warning" id="step2alert" style="display:none;">Based on your answer, we don't think our programs are the right fit for you.<br>            
            <em>You may change your answer to try again.</em></div>
        </center>
        <p></p>
      </div>
    </div>
    <!--Page3-->
    <div id="step3" style="display:none">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 50% </div>
      </div>
       <div class="questionbox">
        <h3>#3 - Are you truly looking for a ONE on ONE Coach to hold your hands?</h3>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click2(this.id)" name="optionsRadios3" data-toggle="radio" id="step3radio1" value="YES! I need a Personal Coach and Mentor!">
          <i></i> YES! I need a Personal Coach and Mentor!</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click2(this.id)" name="optionsRadios3" data-toggle="radio" id="step3radio2" value=" I’m just thinking about it - not 100% sure yet.">
          <i></i> I’m just thinking about it - not 100% sure yet.</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click2(this.id)" name="optionsRadios3" data-toggle="radio" id="step3radio3" value="No, I just want some advice - not a coach.">
          <i></i> No, I just want some advice - not a coach.</label>
        <center>
          <div class="alert alert-warning" id="step3alert" style="display:none;">Based on your answer, we don't think our programs are the right fit for you.<br>            
            <em>You may change your answer to try again.</em></div>
        </center>
        <input type="hidden" id="hiddentext3" value="" />
      </div>
    </div>
    <!--Page4-->
    <div id="step4" style="display:none">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"> 80% </div>
      </div>
      <div class="questionbox">
        <h3>#4 - If We invest our money to give you a FREE 30 minute call- - will you make sure to show up LIVE? Remember, even if it’s Free for you - 
it costs us money.</h3>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click3(this.id)" name="optionsRadios4" data-toggle="radio" id="step4radio1" value="YES! I’m 100% dedicated, I will be there and ready to take notes!">
          <i></i> YES! I’m 100% dedicated, I will be there and ready to take notes!</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio" onClick="reply_click3(this.id)" name="optionsRadios4" data-toggle="radio" id="step4radio2" value="Maybe - Just depends on my schedule.">
          <i></i> Maybe - Just depends on my schedule.</label>
        <center>
          <div class="alert alert-warning" id="step4alert" style="display:none;">Based on your answer, we don't think our programs are the right fit for you.<br>            
            <em>You may change your answer to try again.</em></div>
        </center>
        <input type="hidden" id="hiddentext4" value="" />
      </div>
    </div>
    <!--Page5-->
    <div id="step5" style="display:none">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%"> 99% </div>
      </div>
     <div class="questionbox">
        <h3>#5 -If your coach was to suggest that you invest in yourself or in your business, what would you do?</h3>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio"  onClick="reply_click4(this.id)" name="optionsRadios5" data-toggle="radio" id="step5radio1" value=" I’m 100% Coachable - I will trust the process & do what my coach says!">
          <i></i> I’m 100% Coachable - I will trust the process & do what my coach says!</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio"  onClick="reply_click4(this.id)" name="optionsRadios5" data-toggle="radio" id="step5radio2" value="I MIGHT Do It - I would consider it, but no promises.">
          <i></i> I MIGHT Do It - I would consider it, but no promises.</label>
        <label class="radio"> <span class="icons"><span class="first-icon fa fa-circle-o"></span> <span class="second-icon fa fa-dot-circle-o"></span></span> <span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>
          <input type="radio"  onClick="reply_click4(this.id)" name="optionsRadios5" data-toggle="radio" id="step5radio3" value="I would decline - No matter what, I would not have money to invest..">
          <i></i> I would decline - No matter what, I would not have money to invest..</label>
        <center>
          <div class="alert alert-warning" id="step5alert" style="display:none;">Based on your answer, we don't think our programs are the right fit for you.<br>            
            <em>You may change your answer to try again.</em></div>
        </center>
        <input type="hidden" id="hiddentext5" value="" />
      </div>
    </div>
    <!--end-->
    <!-------------------------------EXTRA DIV------------------------>
      <div id="step6" >
          <div class="progress" style="display:none">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> 100% </div>
      </div>
     
    <div class="questionbox" style="display:none;display:inline-block" >
         <div class="mail_box">
        <p class="email_details" style="">Enter Your Email Id Below</p>
         <input type="text" name="name" class="email_box" id="fname1" placeholder="Name" required>
          <input type="text" name="number" class="email_box" id="phone1" placeholder="Phone Number" required>
        <input type="text" name="email" class="email_box" id="email1" placeholder="Email" required>
        <div class="extra"><button class="email_button" id="nextform1" onclick="return OnButton1();">Button</button></div>
    </div>
    </div>
    </div>
  </div>
</div>
<div id="header" class="new" >
  <div class="header-top">
    <h1>Want Help Becoming Rich?</h1>
  </div>
  <div class="subheading">
      <p class="claim_your">Claim Your</p>
      <p class=free>FREE</p>
      <p class="free" style="color:#fff">30 Minute Call</p>
      <p class="claim_your">with one of my blueprint experts.. </p>
      <p class="limited"><i>Limited Spots - <span style="color:#fff;"> Spots!! 100% FREE Book your free call below</span></i></p>
      <img src="http://arfeenkhan.com/coaching/img/Arrow.png">
  </div>
  
  <div class="wrap top" style="max-width:850px; ">
    <!--<div class="videobox">-->
    <!-- <div style="padding:56.25% 0 0 0;position:relative; ">-->
      <!--<iframe src="https://player.vimeo.com/video/296894543?autoplay=1&title=0&byline=0&portrait=0&muted=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>        -->
      <!--</iframe>-->
    <!--</div>-->
    <script src="https://player.vimeo.com/api/player.js"></script>
     
    </div>
    </div>
    <div class="clear"></div>
    <div class="button1 abcd"> <a class="cta-btn btn btn-default css3button" href="#/popup">Book Your Call NOW <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
  </div>
</div>
</div>
<!--    header_end    -->
<div id="middle">
  <div class="contenbox">
    <h2>It Takes Just 2 Minutes - We Can Help No Matter Where You Are In Your Journey! </h2>
    <p>Our entire team of <strong> Expert Blueprint</strong> have spots open this week to <strong>book 30 minute consultations</strong> with them (if you qualify). All you need to do is take 2 minutes to fill out a short form and reserve your day and time.</p>
    <p>We can help you no matter where you are in your journey..</p>
    <p> <strong>Whether you want to </strong> </p>
    <div class="list">
      <ul>
        <li><strong> Create Wealth and leave a legacy behind. </strong></li>
        <li>Start your Journey as an author, speaker or coach. </li>
        <li><strong>Grow Your Business. </strong></li>
        <li>  Start your Online Business and Earn Passive Income.</li>
      </ul>
    </div>
    <p >We’ll dissect where you are and what you need to do next, right on the  <u>30 minute call</u>. </p>
    <p>Remember, <strong>I have many 1-on-1 coaching programs,</strong>, talk to my team to see if you qualify for any of them! </p>
    <hr/>
    <h2>Do These Simple Steps...</h2>
    <p><strong><em>Speak to one of my Experts by: </em></strong><!-- <img src="images/img2.png" align="right" style="max-width:121px;" class="img2"/> --></p>
    <div class="list">
      <ul>
        <li><strong>Step #1</strong> - Clicking The Button Below...</li>
        <li><strong>Step #2</strong> - Choosing The Best Date/Time...</li>
        <li><strong>Step #3</strong> - Answering All Questions Very Honestly...</li>
        <li><strong>Step #4</strong> - Marking Your Calendar!</li>
        <li><strong>Step #5</strong> - Showing Up For Your Call with Notebook &amp; Pen!</li>
      </ul>
    </div>
    <p>Who knows? Your next major breakthrough could happen right on this phone call in the next 24 - 48 hours, <strong>Get excited!</strong></p>
    <div class="button1 pqrs"> <a class="cta-btn btn btn-default css3button" href="#/popup">Book Your Call NOW <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
  </div>
</div>
<!--    Middle_end    -->
<!--    footer_start    -->
<footer>
</footer>
<!--    footer_end    -->

<script type="text/javascript">
    $("#nextform1").click(function(){
        
         var Name = document.getElementById('fname1').value;
         var contact = document.getElementById('phone1').value;
         var email = document.getElementById('email1').value;
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (Name==null || Name=="",contact==null || contact=="",email==null || email=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
        	if (!filter.test(email))
     	{
		alert('Please enter a valid Email Id');
		return false;
    	}
        if(contact.length<10)
	   {
      if(contact.value==($.isNumeric)){
         alert(1);}
		alert('Mobile number should be 10 digit or more');
		return false;
    	}
         // alert('adf');
        //$('#step1').hide();
      //  $('#step2').show();
    jQuery.ajax({
                url : "addcontact.php",
                data : {Name:Name,email:email,contact:contact},
                type : "POST",
                success : function(data) {
                    console.log(data);
                   var a = data.split("_");
                    var contactId = a[1];
                    //alert(contactId);
                    var checkid = a[0];
                    if(checkid==0)
                    {  
                        window.location.href = 'http://www.speaktofortune.com/schedule/thankyou/index.php?conId='+contactId;
                    }if(checkid == 1)
                    {
                         
                        window.location.href = 'http://www.speaktofortune.com/schedule/bookappointment.php?conId='+contactId;
                    }
                   
                },
                error : function() {
                      
                }
           });
        });
    
     
    
</script>

</body>
</html>
