<? 
if(isset($_GET['invid'])) {
	// connect to the database 
	include "connect.php"; 

	// query the server for the picture 
	//$username = $_GET['username'];
	 $invid = $_GET['invid'];
	$query = "SELECT * FROM invitation WHERE invitationID = '$invid'"; 
	$result  = mysql_query($query) or die(mysql_error()); 

	// define results into variables 
	$name=mysql_result($result,0,"imagename"); 
	$size=mysql_result($result,0,"imagesize"); 
	$type=mysql_result($result,0,"imagetype"); 
	$content=mysql_result($result,0,"image"); 


	header("Content-Disposition: attachment; filename=$name"); 
	header("Content-length: $size"); 
	header("Content-type: $type"); 
	echo $content; 

	mysql_close();
}else{ 
die("No file ID given..."); 
} 
?>
