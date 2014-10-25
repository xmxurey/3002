<?php 
// connect to the database
	session_start();
	include "connect.php";
	
	
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
	
	
	$query="SELECT * FROM useraccount WHERE username='$username'";
	$re=mysql_query($query);
	$row = mysql_fetch_row($re);

	if (!$re)
	  { echo '<script language="javascript">window.alert("Error1");</script>';
	echo '<script language="javascript">window.location="Register.html";</script>';
	  die();

	}
	
	if($row==null){
		 echo '<script language="javascript">window.alert("No row");</script>';
		
	}
	
	// $sql="INSERT INTO invitation(userAccountID, venue, paying, numberOfPeople, title, type)
// 	VALUES
// 	($row[0],'$_POST[venue]','$_POST[paying]','$_POST[numberOfPeople]', '$_POST[title]','$_POST[type]')";
//
// 	$rs=mysql_query($sql);
// 	if (!$rs)
// 	  { echo '<script language="javascript">window.alert("Error2");</script>';
// 	echo '<script language="javascript">window.location="newinvitation.php";</script>';
// 	  die();
//
// 	}
//
	
	
	
// if something was posted, start the process...
if(isset($_POST['upload']))
{
	// define the posted file into variables
	$name = $_FILES['picture']['name'];
	$tmp_name = $_FILES['picture']['tmp_name'];
	$type = $_FILES['picture']['type'];
	$size = $_FILES['picture']['size'];
	//$invitationID="zxy";
	

	// get the width & height of the file
	list($width, $height, $typeb, $attr) = getimagesize($tmp_name);

	// if width is over 600 px or height is over 500 px, kill it
	if($width>1200 || $height>1000)
	{
		echo $name . "'s dimensions exceed the 1200x1000 pixel limit.";
		die();
	}

	// if the mime type is anything other than what we specify below, kill it
	if(!(
			$type=='image/jpeg' ||
			$type=='image/png' ||
			$type=='image/gif'
	)) {
	
		echo '<script language="javascript">window.alert("Please upload picture in jpeg/png/gif format");</script>';
			echo '<script language="javascript">window.location="newinvitation.php";</script>';
			  die();
	}

	// if the file size is larger than 350 KB, kill it
	if($size>'750000') {

			echo '<script language="javascript">window.alert("Picture exceeds size.");</script>';
			echo '<script language="javascript">window.location="newinvitation.php";</script>';
			  die();
	}


	if(!get_magic_quotes_gpc()){
		$name = addslashes($name);
	}

	// open up the file and extract the data/content from it
	$extract = fopen($tmp_name, 'r');
	$content = fread($extract, $size);
	$content = addslashes($content);
	fclose($extract);

	

	$sql="INSERT INTO invitation(userAccountID, venue, paying, numberOfPeople, title, type, image, postTime,status,imagetype,imagesize,imagename,invdate)
	VALUES
	($row[0],'$_POST[venue]','$_POST[paying]','$_POST[numberOfPeople]', '$_POST[title]','$_POST[type]','$content',NOW(),'$_POST[numberOfPeople]','$type','$size','$name','$_POST[invdate]')";

	$rs=mysql_query($sql);
	if (!$rs)
	  { echo '<script language="javascript">window.alert("Error2");</script>';
	echo '<script language="javascript">window.location="newinvitation.php";</script>';
	  die();

	}
	

	//mysql_query($addfile) or die(mysql_error());

	$inserted_invitationID = mysql_insert_id();

	mysql_close();


	echo '<script language="javascript">window.alert("Invitation posted!");</script>';
	echo '<script language="javascript">window.location="newinvitation.php";</script>';
	?>

<!--<div align="center">

<strong><br> </strong><img name="<? echo $invitationID; ?>"
		src="getphoto2.php?invitationID=<? echo $invitationID; ?>"
		alt="Unable to view image #<? echo $invitationID; ?>"> <br>
</div>
<?php
// we still have to close the original IF statement. If there was nothing posted, kill the page.
}else{die("No uploaded file present");
}
?> -->

