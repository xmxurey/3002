<?php 
session_start();  
$username = $_POST["login"];
		if ($username == "liuxue"){
			$_SESSION["username"] = "Liu Xue";
		} else {
			$_SESSION["username"] = "Zhan Xiaoying";
		}
header("Location: index.php");   
exit;  
?>  