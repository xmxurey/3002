<?php 
$server = "localhost";  
$username = "root"; 
$password = "root"; 
$database = "cz3002"; 

mysql_connect("$server", "$username", "$password") or die(mysql_error()); 
mysql_select_db("$database") or die(mysql_error()); 
?>
