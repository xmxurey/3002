<?php
session_start();
include "connect.php";

$username = $_SESSION["username"];
$invitationID = $_SESSION["invitationID"];

$username = $_SESSION["username"];
$query="SELECT userAccountID FROM useraccount WHERE username= '$username'";
$rs=mysql_query($query);
$accountID = mysql_fetch_row($rs);

$query1="DELETE FROM application WHERE invitationID='$invitationID' and userAccountID = '$accountID'";
$rs1=mysql_query($query1);

header("Location: application.php");

?>