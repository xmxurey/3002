<?php
	//include "connect.php";
	session_start();
?>
<?php

$con = mysqli_connect("localhost","root","root","cz3002");
//check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
//$query = "select * from invitation where userAccountID = '$_SESSION[userAccountID]'";
$query = "select * from invitation where userAccountID = '1'";

$re = mysqli_query($con,$query);


//$row = mysql_fetch_row($re);


?>
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
          <li class="active"><a href="invitation.php">My Invitation</a></li>
          <li><a href="Application.php">My Application</a></li>
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
        <div class="mainbar" id="invitation" >
   
		  <?php 

while($row = mysqli_fetch_array($re)) {
	print "
	<div class=\"article\">
            <h2><span>Japanese Sushi</span></h2>
            <div class=\"clr\"></div>
            <p class=\"post-data\"><span class=\"date\">" . $row['postTime'] . "</span> &nbsp;|&nbsp; Posted by <a href=\"#\">Liu Xue</a> &nbsp;|&nbsp; </p>
            <a href=\"#\"></a><img src=\"data:image/jpeg;base64," .base64_encode($row['image']) . "\" alt=\"\" width=\"400\" height=\"240\"/>
            <table width=\"500\">
              <tbody>
                <tr>
                  <th scope=\"row\">&nbsp;Date:</th>
                  <td>&nbsp;<span class=\"date\">" . $row['time'] . "</span></td>
                </tr>
                <tr>
                  <th scope=\"row\">&nbsp; Venue</th>
                  <td>" . $row['venue'] . "</td>
                </tr>
                <tr>
                  <th scope=\"row\">&nbsp;NO. of people</th>
                  <td>" . $row['numberOfPeople'] . "</td>
                </tr>
                <tr>
                  <th scope=\"row\">&nbsp; Paying Method</th>
                  <td>" . $row['payingMethod'] . "</td>
                </tr>
              </tbody>
            </table>
            <div class=\"clr\"></div>
          </div>
		  ";
		  
		  $query2 = "select useraccount.* from useraccount 
           inner join application on (application.userAccountID = useraccount.userAccountID)
           inner join invitation on (application.invitationID = invitation.invitationID)
		   where invitation.invitationID = '" . $row['invitationID'] . "'";

		   $re2 = mysqli_query($con,$query2);
		  while($row2 = mysqli_fetch_array($re2)) {
		  
		  $query3 = "select applicationTime from application where userAccountID = '" . $row2['userAccountID'] . "'";
		  $re3 = mysqli_query($con,$query3);
		  $row3 = mysqli_fetch_array($re3);
		  
			print "
			<div class=\"sidebar\" id=\"zxy\">
            <div class=\"comment\" > <a href=\"#\"><img src=\"images/userpic.gif\" width=\"40\" height=\"40\" alt=\"\" class=\"userpic\" /></a>
              <p><a href=\"#\">" . $row2['username'] . "</a> applys:<br />
                " .$row3['applicationTime']. "</p>
             
              <div align=\"right\">
                <button class=\"btn1\" id=\"accept3\" onclick=\"Accept3()\">Accept</button>
                <button class=\"btn1\" id=\"reject3\" onclick=\"Reject3()\">Reject</button>
                <script>
					function Accept3(){
						if (document.getElementById(\"accept3\").textContent == \"Accepted(Cancel)\"){
							if (confirm(\"Confirm to cancel?\") == true) {
								document.getElementById(\"accept3\").textContent = \"Accept\";
								document.getElementById(\"reject3\").style.visibility=\"visible\";
							} 
						}
						else if (confirm(\"Confirm to accept this application?\") == true) {
								document.getElementById(\"accept3\").textContent = \"Accepted(Cancel)\";
								document.getElementById(\"reject3\").style.visibility=\"hidden\";
						}
					}
					
					function Reject3(){
						if (document.getElementById(\"reject3\").textContent == \"Rejected(Cancel)\"){
							if (confirm(\"Confirm to cancel?\") == true) {
								document.getElementById(\"reject3\").textContent = \"Reject\";
								document.getElementById(\"accept3\").style.visibility=\"visible\";
							} 
						}
						else if (confirm(\"Confirm to reject this application?\") == true) {
								document.getElementById(\"reject3\").textContent = \"Rejected(Cancel)\";
								document.getElementById(\"accept3\").style.visibility=\"hidden\";
						}
					}
				</script>
              </div>
            </div>
            </div>";
		  
		  }
		  echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
		  }
	?>
		 
			<!--<script type="text/javascript">
                function func1() {
					
					var invitation1 = "<?php echo $_SESSION["invitation"]; ?>";
					var apply = "<?php echo $_SESSION["apply"]; ?>";
					var username = "<?php echo $_SESSION["username"]; ?>";
					if (username == "Liu Xue" && invitation1 == "yes")
						document.getElementById("invitation").style.visibility="visible";
					if (apply == "yes")
                    	document.getElementById("zxy").style.visibility="visible";
                }
                window.onload = func1;
            </script>            
			<div class="sidebar" id="zxy">
            <div class="comment" > <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
              <p><a href="#">Zhan Xiaoying</a> applys:<br />
                Oct 24th, 2014 at 2:17 pm</p>
             
              <div align="right">
                <button class="btn1" id="accept3" onclick="Accept3()">Accept</button>
                <button class="btn1" id="reject3" onclick="Reject3()">Reject</button>
                <script>
					function Accept3(){
						if (document.getElementById("accept3").textContent == "Accepted(Cancel)"){
							if (confirm("Confirm to cancel?") == true) {
								document.getElementById("accept3").textContent = "Accept";
								document.getElementById("reject3").style.visibility="visible";
							} 
						}
						else if (confirm("Confirm to accept this application?") == true) {
								document.getElementById("accept3").textContent = "Accepted(Cancel)";
								document.getElementById("reject3").style.visibility="hidden";
						}
					}
					
					function Reject3(){
						if (document.getElementById("reject3").textContent == "Rejected(Cancel)"){
							if (confirm("Confirm to cancel?") == true) {
								document.getElementById("reject3").textContent = "Reject";
								document.getElementById("accept3").style.visibility="visible";
							} 
						}
						else if (confirm("Confirm to reject this application?") == true) {
								document.getElementById("reject3").textContent = "Rejected(Cancel)";
								document.getElementById("accept3").style.visibility="hidden";
						}
					}
				</script>
              </div>
            </div>
            </div>-->
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