<?php
session_start();
include "connect.php";

$username = $_SESSION["username"];
$userAccountID=$_SESSION["userAccountID"];
$invitationID = $_SESSION["invitationID"];



$query1="DELETE FROM application WHERE invitationID=$invitationID and userAccountID = $userAccountID";
$rs1=mysql_query($query1);

if($rs1){
	
	echo '<script language="javascript">window.alert("Application withdrawn");</script>';
	echo '<script language="javascript">window.location="application.php";</script>';
}


?>