<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Strangers</title>
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="invitation.php">My Invitation</a></li>
          <li><a href="application.php">My Application</a></li>
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
          <div class="article">
            <h2><span>Maze Runner</span></h2>
            <div class="clr"></div>
            <p class="post-data"><span class="date">March 16, 2014</span> &nbsp;|&nbsp; Posted by <a href="#">David</a> &nbsp;|&nbsp; </p>
            <img src="images/maze_runner.jpg" alt="" width="284" height="177"/>
<table width="500">
              <tbody>
                <tr>
                  <th scope="row">&nbsp;Date:</th>
                  <td>&nbsp;<span class="date">3:00 PM March 16, 2014</span></td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Venue</th>
                  <td>&nbsp; Jurong Point </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;NO. of people</th>
                  <td>&nbsp;3</td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Paying Method</th>
                  <td>&nbsp; AA </td>
                </tr>
              </tbody>
            </table>
<div class="clr"></div>
          </div>
          <div align="right">
            <button class="btn" onclick="myFunction()" id="apply">Apply </button>
            <script>
			function myFunction() {
				if (document.getElementById("apply").textContent == "Withdraw"){
					if (confirm("Confirm to wsithdraw?") == true) {
						document.getElementById("apply").textContent = "Apply";
					} 
				}
				else if (confirm("Confirm to apply?") == true) {
						document.getElementById("apply").textContent = "Withdraw";
					} 
			}
			</script>
          </div>
<div class="article">
            <h2><span>Gone Girl</span></h2>
            <div class="clr"></div>
            <p class="post-data"><span class="date">May 16, 2014</span> &nbsp;|&nbsp; Posted by <a href="#">Liu Xue</a> &nbsp;|&nbsp; </p>
			<img src="images/Gone Girl.jpg" alt="" width="259" height="194"/>
<table width="500">
              <tbody>
                <tr>
                  <th scope="row">&nbsp;Date:</th>
                  <td>&nbsp;<span class="date">7:00 PM Oct 29, 2014</span></td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Venue</th>
                  <td>&nbsp; Vivo City </td>
                </tr>
                <tr>
                  <th scope="row">&nbsp;NO. of people</th>
                  <td>&nbsp;3</td>
                </tr>
                <tr>
                  <th scope="row">&nbsp; Paying Method</th>
                  <td>&nbsp; I treat </td>
                </tr>
              </tbody>
            </table>
            <div align="right">
            <button class="btn" onclick="myFunction1()" id="apply1">Apply </button>
            <script>
			function myFunction1() {
				if (document.getElementById("apply1").textContent == "Withdraw"){
					if (confirm("Confirm to wsithdraw?") == true) {
						document.getElementById("apply1").textContent = "Apply";
					} 
				}
				else if (confirm("Confirm to apply?") == true) {
						document.getElementById("apply1").textContent = "Withdraw";
					} 
			}
			</script>
            </div>
            <div class="clr"></div>
          </div>
          <div class="article">
            <h2><span>Dracula Untold</span></h2>
            <div class="clr"></div>
            <p class="post-data"><span class="date">Aug 19, 2014</span> &nbsp;|&nbsp; Posted by <a href="#">Zhang Han</a> &nbsp;|&nbsp; </p>
			<img src="images/Dracula.jpg" alt="" width="259" height="194"/>
<table width="500">
              <tbody>
                <tr>
                  <th scope="row">&nbsp;Date:</th>
                  <td>&nbsp;<span class="date">5:00 PM Nov 03, 2014</span></td>
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
            <button class="btn" onclick="myFunction2()" id="apply2">Apply </button>
            <script>
			function myFunction2() {
				if (document.getElementById("apply2").textContent == "Withdraw"){
					if (confirm("Confirm to withdraw?") == true) {
						document.getElementById("apply2").textContent = "Apply";
					} 
				}
				else if (confirm("Confirm to apply?") == true) {
						document.getElementById("apply2").textContent = "Withdraw";
					} 
			}
			</script>
            </div>
            <div class="clr"></div>
          </div>
          <div class="pagenavi"><span class="pages">Page 1 of 2</span><span class="current">1</span><a href="#">2</a><a href="#" >&raquo;</a></div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Event</span> List</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li ><a href="index.php">Restaurant</a></li>
              <li class="active"><a href="event_Movie.php">Movie</a></li>
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