<?php $con = mysqli_connect("localhost","xxxxxxxxxx","xxxxxxxxxxxxxxxxx","xxxxxxxxxxxxxxxxxxx");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>bookappointment</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" type="text/css" href="css/mainpagestyle.css">
<!-- calender -->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<style>
	    .dbdate{
	        position: relative;
            width: 20%;
	    }
	    .dbtime{
	          width: 13%;
              margin-left: 303px;
	    }
	</style>
</head>

<body>
    
    <div class="main_container">
 		<p class="main-title">Schedule Your Breakthrough Session!</p>
 		<p  class="take_minute">Take a Minute To Book Your Call Right Away!</p>
 		<div class="body_container">
 			<div class="heading-text">
 				<p class="heading-title">Pick a date and time
          <!-- <span class="change-option">change select</span> -->
        </p>
 				<p class="heading-duration"><b>Duration:</b><span>20 minutes</span></p>
 				<!-- <p class="heading-duration"><b>Your time zone:</b><span>India;  New Delhi, Bangalore, Kolkata, Chennai, Mumbai  (GMT+5:30)</span> -->
<!--  					<a href="">
 						(Change)
 					</a> -->
 				</p>
 			</div>

 			<div class="main-box">
 				<div class="calender" id="calender" >
            <div class="date_div active" id="stdec" ><p >1st DECEMBER</p></div>
            <div class="date_div" id="nddec"><p >2nd DECEMBER</p></div>
            <input type="hidden" id="maindate" value="Dec-1-2018" />
            <input type="hidden" id="formateddate" value="2018-12-01" />
 				</div>
 				<div class="calender-schedule">
 					<p style="">Available starting times for<span><b id="textchabge"> Sat, Dec 1, 2018</b></span></p>
 					<div class="time-slot" style="text-align: center;">
 						<div class="amslot">
 				<?php
 					$sql1 = "SELECT * FROM `times` ORDER BY `id` ASC";
            	    $results =$con->query($sql1);
            	    //var_dump($results);
            	    foreach($results as $result1)
            	    {
            	        $disable = $result1['pmtime'];
            	        $sql4 = "SELECT COUNT(`apmttime`) as num FROM `schedule` WHERE apmttime ='$disable'";
                        $result4 = mysqli_query($con,$sql4);
                        $rows = mysqli_fetch_assoc($result4);
                         //echo $rows['num'];
                         $count = $rows['num'];
                         if($count < 16)
                         {
         				?>
                              <p class="schedule-time displayclass<?php echo $result1['datedesc']; ?>" onClick="selected_time(this.id)" name="" id="<?php echo $result1['timeformate']; ?>_<?php echo $result1['pmtime']; ?>" tabindex="1"><?php echo $result1['pmtime']; ?></p>
                        <?php
                         }
                          else{
                              ?>
                              <p class="schedule-time displayclass<?php echo $result1['datedesc']; ?>" style="background-color:#89a0a0;cursor: not-allowed;" tabindex="1"><?php echo $result1['pmtime']; ?></p>
                              <?php
                          }
            	    }
                ?>
            </div>
 					</div>
 				</div>
 			</div>
 			<div class="change">

 			</div>


 		</div>
 	</div>

    
           
    <script>
    $( document ).ready(function() {
        
    $('.schedule-time').hide();
    $('.displayclass1').show();
    
        });
    
    $( "#nddec" ).click(function() {
        $('.displayclass1').hide();
        $('.displayclass2').show();
        $('#textchabge').text(' Sun, Dec 2, 2018');
        $('#maindate').val('Dec-2-2018');
        $('#formateddate').val('2018-12-02');
        
});
    $( "#stdec" ).click(function() {
            $('.displayclass2').hide();
            $('.displayclass1').show();
            $('#textchabge').text(' Sun, Dec 1, 2018');
            $('#maindate').val('Dec-1-2018');
            $('#formateddate').val('2018-12-01');
            
    });
  function selected_time(timedate)
 { 
     var sub = confirm("Are You sure Want to Save Your schedule time.!");
     if(sub==true){
     var a = timedate.split("_");
     console.log(a);
      var tm= a[1];
      var timeformate = a[0];
    var id2 ='<?php echo $_GET["conId"]; ?>';
    var conID ='<?php echo $_GET["conId"]; ?>';
    var disdate = $('#maindate').val();
    var fordate = $('#formateddate').val();
    jQuery.ajax({
        url : "inserttime.php",
        type : "POST",
        data : {tm:tm,timeformate:timeformate,id2:id2,disdate:disdate,fordate:fordate},       
        success : function(data) {
             console.log(data);
             window.location.href = 'http://www.speaktofortune.com/schedule/thankyou/index.php?conId='+conID;
          },
        error : function() {
        }
    });
     }
  }
</script>    


<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("calender");
var btns = header.getElementsByClassName("date_div");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) { 
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}
</script>
    
</body>


</html>