<?php 
session_start();  
$_SESSION["apply"] = "yes";
header("Location: index.php");   
exit;  
?> 