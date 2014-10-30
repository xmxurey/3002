<?php
	session_start();
    include "connect.php";

	
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
	

	$query="SELECT * FROM userprofile WHERE userAccountID=$userAccountID";
	$re=mysql_query($query);
	$rowb = mysql_fetch_row($re);

	if (!$re)
	  { echo '<script language="javascript">window.alert("Error2");</script>';
	echo '<script language="javascript">window.location="Register.html";</script>';
	  die();

	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>Strangers</span><small>Go and meet someone</small></a></h1>
      </div>
      <div align="right">
        <form method="get" action="#">
          <h2>Welcome, <?php echo $username?> </h2>
          <a href="login.php">Log Out</a>
        </form>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="invitation.php">My Invitation</a></li>
          <li><a href="application.php">My Application</a></li>
          <li><a href="newInvitation.php">New Invitation</a></li>
          <li class="active"><a href="personal.php">Personal information</a></li>
          <li><a href="about.php">About us</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    
	<table width="500" align="center">
  <tbody>
    <tr>
      <th>&nbsp;Name</th>
      <td>&nbsp;<?php echo $rowb[1]?></td>
    </tr>  
    <tr>
      <th>&nbsp;Gender</th>
      <td>&nbsp;<?php echo $rowb[2]?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Date of Birth</th>
      <td>&nbsp;<?php echo $rowb[5]?></td>
    </tr>
    <tr>      
     <th scope="row">&nbsp;Home Address</th>
      <td>&nbsp;<?php echo $rowb[6]?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Phone</th>
      <td>&nbsp;<?php echo $rowb[3]?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Email</th>
      <td>&nbsp;<?php echo $rowb[7]?></td>
    </tr>
    
  </tbody>
</table>
<div align="center">
	

<button class="btn1" id="cancel" > <a href="editprofile.php">Edit</a> </button>
<!-- <a href = "editprofile.php">Edit</a> -->
</div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">Strangers</a>.</p>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>