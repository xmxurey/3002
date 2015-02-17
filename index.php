  <?php
    session_start();
	include "connect.php";
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SocialNet</title>

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
          <h2>Welcome,<?php  echo $username;?> </h2>
          <a href="logout.php">Log Out</a>
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

    
	
  
<?php	
	if(isset($_GET['eventType'])) {
		 $eventType = $_GET['eventType'];
	}
	else{
		$eventType=Restaurant;
	}
	
    
    $sql="SELECT * FROM invitation WHERE type='$eventType'";
    $rs = mysql_query($sql); 
   
    while($row = mysql_fetch_row($rs)) {
		 $_SESSION["invitationID"] = $row[0];
		$temp=$row[0];
		 $query="SELECT * FROM useraccount WHERE userAccountID=$row[1]";
		 $result = mysql_query($query); 
		 $r= mysql_fetch_row($result);
    	echo("
		    <div class='article'>
		      <h2><span>$row[9]</span></h2>
		      <div class='clr'></div>
		      <p class='post-data'><span class='date'>$row[8]</span> 
		      		&nbsp;|&nbsp; Posted by <a href='#'>$r[1]</a> &nbsp;|&nbsp; </p>
		
		 <img name='17'
		 		src='getphoto3.php?invid=$row[0]'
		 		alt='Unable to view image'
				width='500'
				hight='240'
				align='center'
		  > 
	 
		      <table width='500'>
		        <tbody>
		          <tr>
		            <th scope='row'>&nbsp;Date:</th>
		            <td>&nbsp;<span class='date'>$row[2]</span></td>
		          </tr>
		          <tr>
		            <th scope='row'>&nbsp; Venue</th>
		            <td>&nbsp; $row[3]</td>
		          </tr>
		          <tr>
		            <th scope='row'>&nbsp;No. of people</th>
		            <td>&nbsp;$row[4]</td>
		          </tr>
		          <tr>
		            <th scope='row'>&nbsp;Openings Left</th>
		            <td>&nbsp;$row[6]</td>
		          </tr>
				  
		          <tr>
		            <th scope='row'>&nbsp; Paying Method</th>
		            <td>&nbsp; $row[5] </td>
		          </tr>
		        </tbody>
		      </table>
		      
		      <div class='clr'></div>
		    </div>			
			");
			
			if($userAccountID!=$row[1]&&$row[6]>0){
            	print "
            		<div align='right'>
            	<button class=\"btn1\" id=\"apply\" > <a href=\"apply.php\"> Apply</a> </button>
            	</div>";
			}
   

    }
  	mysql_close();
	
    ?>
	
		  

<!--          <div class="pagenavi"><span class="pages">Page 1 of 2</span><span class="current">1</span><a href="#">2</a><a href="clear.php" >&raquo;</a></div> -->
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
				
                <li class='active'><a href='index.php?eventType=Restaurant'>Restaurant</a></li>
                <li><a href='index.php?eventType=Movie'>Movie</a></li>
                <li><a href='index.php?eventType=Travelling'>Travelling</a></li>
                <li><a href='index.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
			");	
	}
	
	if($eventType==Movie){
			echo("
				
                <li><a href='index.php?eventType=Restaurant'>Restaurant</a></li>
                <li class='active'><a href='index.php?eventType=Movie'>Movie</a></li>
                <li><a href='index.php?eventType=Travelling'>Travelling</a></li>
                <li><a href='index.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
			");	
	}
	
	if($eventType==Travelling){
			echo("
				
                <li><a href='index.php?eventType=Restaurant'>Restaurant</a></li>
                <li><a href='index.php?eventType=Movie'>Movie</a></li>
                <li  class='active'><a href='index.php?eventType=Travelling'>Travelling</a></li>
                <li><a href='index.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
			");	
		}
			
			if($eventType==Outdoor_Activities){
					echo("
				
		                <li><a href='index.php?eventType=Restaurant'>Restaurant</a></li>
		                <li><a href='index.php?eventType=Movie'>Movie</a></li>
		                <li><a href='index.php?eventType=Travelling'>Travelling</a></li>
		     <li class='active'><a href='index.php?eventType=Outdoor_Activities'>Outdoor Activities</a></li>
				
				
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
<div class="footer">
  <div class="footer_resize">
    <p class="lf">&copy; Copyright <a href="#">Strangers</a>.</p>
    <div class="clr"></div>
  </div>
</div>
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
</script>
</body>
</html>


