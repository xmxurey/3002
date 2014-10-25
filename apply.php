<?php
session_start();
include "connect.php";

$username = $_SESSION["username"];
$userAccountID=$_SESSION["userAccountID"];
$invitationID = $_SESSION["invitationID"];



 $sql1="SELECT * FROM application WHERE userAccountID=$userAccountID AND invitationID=$invitationID";
$re1=mysql_query($sql1);

if(mysql_num_rows($re1)!=0){
	echo '<script language="javascript">window.alert("You have applied for the event!");</script>';
	echo '<script language="javascript">window.location="index.php";</script>';
	
}

else{


 	$sql="INSERT  INTO  application (userAccountID, invitationID,applicationTime,status) 		VALUES($userAccountID,$invitationID,NOW(),'pending')";
	$re=mysql_query($sql);


if($re){
	
	echo '<script language="javascript">window.alert("Application submited");</script>';
	echo '<script language="javascript">window.location="index.php";</script>';
}

}



?>