<?php
session_start();
require("isdk.php");
$con = mysqli_connect("localhost","xxxxxxxxxx","xxxxxxxxxxxxxxxxx","xxxxxxxxxxxxxxxxxxx");
//include("data.php");

$tm = $_POST['tm'];
$contactId = $_POST['id2'];
$timeformate =$_POST['timeformate'];
 $disdate = $_POST['disdate'];
 $fordate = $_POST['fordate'];
// $contact = $_POST['contact'];
 
$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
    
    //$conID = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $contact), 'Email');
//	$_SESSION["contactId"] = $conID;
 
//	$contactId =$conID;
        $groupId = 9909;
        
	//$groupId = 3851;
	$result = $app->grpAssign($contactId, $groupId);
    $grp = array('_booktime'  => $dt,'_bookdate'  => $disdate);
	$query = $app->dsUpdate("Contact", $contactId, $grp);
	$sql = "UPDATE `schedule` SET `apmttime`='$tm' ,`checktime`='$timeformate' , `datetime` = '$disdate' ,`apmtdate` = '$fordate'  WHERE conId='$contactId'";
	 $con->query($sql);
	 //echo $ContactId;
        
    	$sql1 = "SELECT * FROM `schedule` WHERE `conID`='$contactId'";
	    $results =$con->query($sql1);
	    //var_dump($results);
	   
	    foreach($results as $result1)
	    { 
	    $phone = $result1['phone'];
        $name = $result1['name'];
        //var_dump($name);
             
    // Replace with your username
    $user = $name;
    
    // Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
    $apikey = "xxxxxxxxxxxx"; 
    
    // Replace if you have your own Sender ID, else donot change
    $senderid  =  "xxxxxxxxxxxxxxxxxxx"; 
    
    // Replace with the destination mobile Number to which you want to send sms
    $mobile  =  $phone; 
    //var_dump($phone);
    // Replace with your Message content
    $message   =  "Hi ".$name." You have booked Your time with arfeen khan at ".$tm." "; 
    $message = urlencode($message);
    
    // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
    $type   =  "txt";
    
    $ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);      
        curl_close($ch); 
    
    // Display MSGID of the successful sms push
    echo $output;
}
        
}
?>
 
 
    
 