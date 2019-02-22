<?php
session_start();
require("isdk.php");
//include("data.php");
$name = $_POST['Name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$_SESSION["email"]=$email;
$_SESSION["phone"]=$contact;
$con = mysqli_connect("localhost","xxxxxxxxxx","xxxxxxxxxxxxxxxxx","xxxxxxxxxxxxxxxxxxx");

$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	$conID = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $contact), 'Email');
	$_SESSION["contactId"] = $conID;
 
	$contactId =$conID;
    $groupId = 9909;
        
	//$groupId = 3851;
	date_default_timezone_set('Asia/Kolkata');
	$datetime = date('Y/m/d H:i:s');
//	echo $datetime;
	$result = $app->grpAssign($contactId, $groupId);
	$sql1 = "SELECT * FROM `schedule` WHERE `conID`='$conID'";
	$result2 =$con->query($sql1);
	if(mysqli_num_rows($result2)>0)
    {
      echo '0_';
     echo $contactId;
    }
    else
    {
        echo '1_';
       $sql2 = " INSERT INTO `schedule`(`id`, `name`, `email`, `phone`, `conID`, `datetime`) VALUES ('','$name','$email','$contact','$conID','$datetime')";
        $con->query($sql2);
        echo $contactId;
    }
    
}
?>
 