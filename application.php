<?php
	session_start();
    include "connect.php";
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
            <?php
            $username = $_SESSION["username"];
            $query="SELECT userAccountID FROM useraccount WHERE username= '$username'";
            $rs=mysql_query($query);
            $accountID = mysql_fetch_row($rs);
            if (!$rs)
            { echo '<script language="javascript">window.alert("Error");</script>';
                die();
            }

            $query1="SELECT * FROM application WHERE userAccountID = '$accountID[0]'";
            $rs1=mysql_query($query1);
            if (!$rs1)
            { echo '<script language="javascript">window.alert("Error2");</script>';
                die();
            }

            while($invitation = mysql_fetch_row($rs1)) {

                $invitationID = $invitation[0];
                $_SESSION["invitationID"] = $invitationID;
                $query2="SELECT * FROM invitation WHERE invitationID = '$invitationID'";
                $rs2=mysql_query($query2);
                if (!$rs2)
                { echo '<script language="javascript">window.alert("Error3");</script>';
                    die();
                }

                while ($row = mysql_fetch_row($rs2)){
                    echo "
                    <div class=\"article\">
                        <h2><span>" . $row['title'] . "</span></h2>
                        <div class=\"clr\"></div>
                        <p class=\"post-data\"><span class=\"date\">" . $row['postTime'] . "</span> &nbsp;|&nbsp; Posted by <a href=\"#\">$username</a> &nbsp;|&nbsp; </p>
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
                              <td>" . $row['paying'] . "</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class=\"clr\"></div>
                    </div> ";
                    echo "
                    <div align='right'>
                    <button class=\"btn1\" id=\"cancel\" > <a href=\"cancelApplication.php\"> Cancel Application</a> </button>
                    </div>";
                }
            }
            ?>

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
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">Strangers</a>.</p>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>