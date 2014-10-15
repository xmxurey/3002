<?php
	session_start();
?>

<script type="text/javascript">
	function func1() {
		
		var data = "<?php echo $_SESSION["apply"]; ?>";
		var username = "<?php echo $_SESSION["username"]; ?>";
		if (data != "yes")
			document.getElementById("sushi").style.visibility="hidden";
	}
	window.onload = func1;
</script> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SocialNet</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
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
          <li  class="active"><a href="application.php">My Application</a></li>
          <li><a href="newInvitation.php">New Invitation</a></li>
          <li><a href="personal.php">Personal information</a></li>
          <li><a href="about.php">About us</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="hbg"><img src="images/header_images.jpg" width="923" height="291" alt="" /></div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article" id="DTF">
            <h2><span>Din Tai Fung</span></h2>
            <div class="clr"></div>
            <p class="post-data"><span class="date">Oct 01, 2014</span> &nbsp;|&nbsp; Posted by <a href="#">Mengxing</a> &nbsp;|&nbsp; </p>
            <img src="images/dintaifung-workshop-26.jpg" alt="" width="400" height="269"/>
			<table width="00">
              <tbody>
                <tr>
                  <th scope="row">&nbsp;Date:</th>
                  <td>&nbsp;<span class="date">5:00 PM Nov 16, 2015</span></td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Venue</th>
                  <td>&nbsp; Jurong Point </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;NO. of people</th>
                  <td>&nbsp;4</td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Paying Method</th>
                  <td>&nbsp; AA </td>
                </tr>
              </tbody>
            </table>
            <div align="right">
            <button class="btn1" id="cancel" onclick="Cancel()">Cancel Application</button>
            <script>
				function Cancel(){
					if (confirm("Confirm to Cancel this application?") == true) {
								document.getElementById("DTF").style.visibility="hidden";
					}
				}
			</script>
            </div>
            <div class="clr"></div>
          </div>
          <div class="article" id="sushi">
            <h2><span>Japanese Sushi</span></h2>
            <div class="clr"></div>
            <p class="post-data"><span class="date">Sept 14, 2014</span> &nbsp;|&nbsp; Posted by <a href="#">Liu Xue</a> &nbsp;|&nbsp; </p>
            <a href="#"></a><img src="images/Japanese Sushi.jpg" alt="" width="400" height="240"/>
            <table width="00">
              <tbody>
                <tr>
                  <th scope="row">&nbsp;Date:</th>
                  <td>&nbsp;<span class="date">5:00 PM March 16, 2015</span></td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Venue</th>
                  <td>&nbsp; City Hall </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;NO. of people</th>
                  <td>&nbsp;2</td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Paying Method</th>
                  <td>&nbsp; AA </td>
                </tr>
              </tbody>
            </table>
            <div align="right">
            <button class="btn1" id="cancel" onclick="Cancel1()">Cancel Application</button>
            <script>
				function Cancel1(){
					if (confirm("Confirm to Cancel this application?") == true) {
								document.getElementById("sushi").style.visibility="hidden";
					}
				}
			</script>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Event</span> List</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li class="active"><a href="index.php">Restaurant</a></li>
              <li><a href="event_Movie.php">Movie</a></li>
              <li><a href="event_Travelling.php">Travelling</a></li>
              <li><a href="event_Outdoor.php">Outdoor Activities</a></li>
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