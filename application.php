<?php
	session_start();
    include "connect.php";
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
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
          <h2>Welcome, <?php echo $username; ?> </h2>
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
			if(isset($_GET['eventType'])) {
				 $eventType = $_GET['eventType'];
			}
			else{
				$eventType='Restaurant';
			}
         // $query1= "select application.* from application inner join invitaion on (application.invitationID=invitation.invitationID) where application.userAccountID = $userAccountID and invitation.type='$eventType' ";


            $query1= "select * from application where userAccountID =$userAccountID ";

            $rs1=mysql_query($query1);
			
            if (!$rs1)
            { echo '<script language="javascript">window.alert("Error2");</script>';
                die();
            }

            while($application = mysql_fetch_row($rs1)) {

                $invitationID = $application[2];
                $_SESSION["invitationID"] = $invitationID;
                $query2="select *  from invitation where invitationID = $invitationID ";
                $rs2=mysql_query($query2);
                if (!$rs2)
                { echo '<script language="javascript">window.alert("Error3");</script>';
                    die();
                }

                    $row4 = mysql_fetch_row($rs2);
					$posterID=$row4[1];
	                $query3="SELECT * FROM useraccount WHERE userAccountID = $posterID";
	                $rs3=mysql_query($query3);
	                if (!$rs3)
	                { echo '<script language="javascript">window.alert("Error4");</script>';
	                    die();
	                }
					$row3=mysql_fetch_row($rs3);
		               
                    print "
                    <div class=\"article\">
                        <h2><span>$row4[9]</span></h2>
                        <div class=\"clr\"></div>
                        <p class=\"post-data\"><span class=\"date\">$row4[9]</span> &nbsp;|&nbsp; Posted by <a href=\"#\">$row3[1]</a> &nbsp;|&nbsp; </p>
			 
 <a href=\"#\"></a><img src=\"data:image/jpeg;base64," .base64_encode($row4[7]) . "\" alt=\"\" width=\"500\" height=\"300\"/>
		 
                        <table width=\"500\">
                          <tbody>
                            <tr>
                              <th scope=\"row\">&nbsp;Date:</th>
                              <td>&nbsp;<span class=\"date\">$row4[2]</span></td>
                            </tr>
                            <tr>
                              <th scope=\"row\">&nbsp; Venue</th>
                              <td>$row4[3]</td>
                            </tr>
                            <tr>
                              <th scope=\"row\">&nbsp;NO. of people</th>
                              <td>$row4[4]</td>
                            </tr>
                            <tr>
                              <th scope=\"row\">&nbsp; Paying Method</th>
                              <td>$row4[5]</td>
                            </tr>
							
                            <tr>
                              <th scope=\"row\">&nbsp; My Status</th>
                              <td>$application[3]</td>
                            </tr>
							
                          </tbody>
                        </table>
                        <div class=\"clr\"></div>
                    </div> ";
					
                    print "
                    <div align='right'>
                    <button class=\"btn1\" id=\"cancel\" > <a href=\"cancelApplication.php\"> Cancel Application</a> </button>
                    </div>";
                
            }
            ?>

        </div>
        <div class="sidebar">
          <div class="gadget">
            <h2 class="star"><span>Event</span> List</h2>
            <div class="clr"></div>
            <ul class="sb_menu">
		 	<?
		 	//$eventType=Restaurant;
		 	if($eventType==Restaurant){
		 			echo("
				
		                 <li class='active'><a href='application.php?eventType=Restaurant'>Restaurant</a></li>
		                 <li><a href='application.php?eventType=Movie'>Movie</a></li>
		                 <li><a href='application.php?eventType=Travelling'>Travelling</a></li>
		                 <li><a href='application.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
		 			");	
		 	}
	
		 	if($eventType==Movie){
		 			echo("
				
		                 <li><a href='application.php?eventType=Restaurant'>Restaurant</a></li>
		                 <li class='active'><a href='application.php?eventType=Movie'>Movie</a></li>
		                 <li><a href='application.php?eventType=Travelling'>Travelling</a></li>
		                 <li><a href='application.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
		 			");	
		 	}
	
		 	if($eventType==Travelling){
		 			echo("
				
		                 <li><a href='application.php?eventType=Restaurant'>Restaurant</a></li>
		                 <li><a href='application.php?eventType=Movie'>Movie</a></li>
		                 <li  class='active'><a href='application.php?eventType=Travelling'>Travelling</a></li>
		                 <li><a href='application.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
		 			");	
		 		}
			
		 			if($eventType==Outdoor_Activities){
		 					echo("
				
		 		                <li><a href='application.php?eventType=Restaurant'>Restaurant</a></li>
		 		                <li><a href='application.php?eventType=Movie'>Movie</a></li>
		 		                <li><a href='application.php?eventType=Travelling'>Travelling</a></li>
		 		     <li class='active'><a href='application.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
		 					");		
	
		 			}
	
		 	 ?>
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