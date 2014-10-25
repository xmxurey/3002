
	
<?php
	session_start();
    include "connect.php";

	
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
	
	$sql="UPDATE userprofile SET name='$_POST[myname]', gender='$_POST[gender]', phoneNumber='$_POST[phone]', address='$_POST[address]',email='$_POST[email]', DOB='$_POST[DOB]' WHERE userAccountID=$userAccountID";

	$rs=mysql_query($sql);
	if (!$rs)
	  { echo '<script language="javascript">window.alert("Error");</script>';
	echo '<script language="javascript">window.location="editprofile.php";</script>';
	  die();

	}
	else{
		
		echo '<script language="javascript">window.alert("Profile updated successfully");</script>';
		echo '<script language="javascript">window.location="personal.php";</script>';
	}
	
?>