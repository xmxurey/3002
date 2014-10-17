<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<html lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Form</title>
    <link href="login.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  </head>
<body>



<section class="container">
<div class="login">
<p>
<?php
include "connect.php";

$sql="INSERT INTO UserAccount(username, password)
VALUES
('$_POST[username]','$_POST[password1]')";

$rs=mysql_query($sql);
if (!$rs)
  { echo '<script language="javascript">window.alert("The username has been registered");</script>';
echo '<script language="javascript">window.location="register.html";</script>';
  die();

  }
$userid=mysql_query("SELECT userAccountID FROM UserAccount WHERE UserAccount.userAccountID='$_POST[username]'";);
  
$sql="INSERT INTO UserProfile(userAccountID,name, phoneNumber)
VALUES
($userid,'$_POST[namefield]','$_POST[tele]')";

$rs=mysql_query($sql);
if (!$rs)
  { echo '<script language="javascript">window.alert("The username has been registered");</script>';
echo '<script language="javascript">window.location="register.html";</script>';
  die();

  }  
  
else{
echo ("Congratulation! You have successfully registered!");
}

mysql_close();
?>
</p>
</div>
</section>

</body>
</html>
