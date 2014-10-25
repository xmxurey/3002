<?php
	session_start();
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet | About</title>
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
          <h2>Welcome, <?php echo $_SESSION["username"]; ?> </h2>
          <a href="login.php">Log Out</a>
        </form>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="invitation.php">My Invitation</a></li>
          <li><a href="application.php">My Application</a></li>
          <li><a href="newInvitation.php">Propose Event</a></li>
          <li><a href="personal.php">Personal information</a></li>
          <li class="active"><a href="about.php">About us</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
          <div class="article">
            <h2><span>About </span>Our Company </h2>
            <div class="clr"></div>
            <p><strong>Strangers is a social corporation focus on fostering face-to-face social relationships between people from different groups and culture through technology innovation.</strong></p>
</div>
          <div class="article">
            <h2><span>Our</span> Mission</h2>
            <div class="clr"></div>
            <p>With the development of technology, people utilize social media to keep in touch with each other. However, it also reduce the chance of face-to-face interaction. Strangers focus on real face-to-face social relationship development to address the issues brought by social media.
              Strangers is a newly incorporated company list at Singapore Stock Exchange (SGX). With strong financial performance and sound technology innovation, Strangers is rewarded as top 100 SMEs (Small and Medium Enterprise). Under the leadership of our management, Strangers is heading towards bigger success through serving the needs of public.</p>
            <p>Fostering face-to-face social relationship between people from different groups and cultures. Narrowing and eliminating the gaps between people brought by social media through face-to-face interaction. Providing a platform for people to make invitations, apply for invitation and accept or reject applications.
   ​</p>
          </div>
      </div>
        <div class="clr"></div>
      <div>
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