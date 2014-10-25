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
	
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>Profile</span></h2>
            <div class="clr"></div>
          </div>
          <div class="article">
            <div class="clr"></div>
		  
         
    
    <form action="updateProfile.php" method="post" enctype="multipart/form-data" name="uploadform">
       <ol>
         <li>
           <label for="myname">Name</label>
           <input id="myname" name="myname" class="text" value="<?echo $rowb[1]?>"/>
         </li>
         <li>
           <label for="description">Gender</label>
           <select name="gender" id = "gender" value="<?echo $rowb[2]?>" enabled>
         	<option value = "F">F</option>
         	<option value = "M">M</option>
            
      	  </select>
         </li>
         <li>
           <label for="phone">Phone</label>
           <input id="phone" name="phone" class="text" value="<?echo $rowb[3]?>"/>
           
         </li>
         <li>
           <label for="address">Address</label>
           <input id="address" name="address" class="text" value="<?echo $rowb[6]?>"/>
         </li>
		 
         <li>
           <label for="email">Email</label>
           <input id="email" name="email" class="text" value="<?echo $rowb[7]?>"/>
         </li>
		 
		  <li>
         	 <label for="DOB">Date of Birth</label>
         	<input id="DOB" type="date" name="DOB"  value="<?echo $rowb[5]?>"/>
		  </li>
       <br>
		<p>	<input name="update" type="submit" id="update" value="Update"></p>
              </ol>
            </form>	
				
      </div>
    </div>
	        <div class="sidebar">
	          <div class="gadget">
	            <h2 class="star"><span>Event</span> List</h2>
	            <div class="clr"></div>
	            <ul class="sb_menu">
				
	            </ul>
	          </div>
	          <div class="gadget">
	            <h2 class="star"><span>Wise Words</span></h2>
	            <div class="clr"></div>
	            <div class="testi">
	              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
	              <p class="title"><strong>Earl Nightingale</strong></p>
	            </div>
	          </div>
	        </div>
	        <div class="clr"></div>
	      </div>
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
    