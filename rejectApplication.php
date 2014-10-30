<?php
session_start();
include "connect.php";

//$username = $_SESSION["username"];
//$userAccountID=$_SESSION["userAccountID"];
//$invitationID = $_SESSION["invitationID"];
//$applicationID = $_SESSION["applicationID"];

$invitationID = $_GET["i"];
$applicationID = $_GET["j"];

//echo "$invitationID &nbsp $applicationID";
$query1 = "update application
		set status = 'rejected'
		where applicationID = '$applicationID'";
$re1 = mysql_query($query1);
// $query2 = "update invitation
// 		set status = status + 1
// 		where invitationID = '$invitationID'";
// $re2 = mysql_query($query2);
$query3 = "delete from datingrecord 
		where applicationID = $applicationID";
$re3 = mysql_query($query3);

if($re1&&$re3){
	
	echo '<script language="javascript">window.alert("Application rejected");</script>';
	echo '<script language="javascript">window.location="invitation.php";</script>';
}
else {
echo 'error rejecting application';
}
?>