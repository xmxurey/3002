<?php 
session_start();  
$_SESSION["invitation"] = "yes";
header("Location: newInvitation.php");   
exit;  
?> 