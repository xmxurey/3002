<?php
	session_start();
	
	$username=$_SESSION["username"];
	$userAccountID=$_SESSION["userAccountID"];
	
	

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
          <li class="active"><a href="newInvitation.php">New Invitation</a></li>
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
            <h2><span>Invitation</span></h2>
            <div class="clr"></div>
          </div>
          <div class="article">
            <div class="clr"></div>
			
			
           <form action="newinvitationprocess.php" method="post" enctype="multipart/form-data" name="uploadform">
              <ol>
                <li>
                  <label for="title">Title</label>
                  <input id="title" name="title" class="text" />
                </li>
                <li>
                  <label for="description">Type</label>
                  <select name="type" id = "demo1" enabled>
                	<option value = "Restaurant">Restaurant</option>
                	<option value = "Movie">Movie</option>
                    <option value = "Travelling">Travelling</option>
                    <option value = "Outdoor_Activities">Outdoor Activities</option>
             	  </select>
                </li>
                <li>
                  <label for="invdate">Date</label>

                  <input id="datepicker" name="invdate" type="date" />

                  
                </li>
                <li>
                  <label for="venue">Venue</label>
                  <input id="venue" name="venue" class="text" />
                </li>
                <li>
                  <label for="description">No. of People</label>
                  <input id="numberOfPeople" name="numberOfPeople" class="text"/>
                </li>
                <li>
                  <label for="paying">Paying Method</label>
                  <input id="paying" name="paying" class="text"/>
                </li>
				<br>
				
                <li>
			        <input type="hidden" name="MAX_FILE_SIZE" value="350000">
			        <input name="picture" type="file" id="picture" size="50">
				 </li>
				 <br>
				 <br>
 				<p>	<input name="upload" type="submit" id="upload" value="Submit"></p>
				 <!-- <li>
                  <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" onclick="invitation()"/>
                  <div class="clr"></div>
                   <script>
					function invitation() {
						<?php
						$_SESSION["invitation"] = "yes";
						echo $_SESSION["invitation"];
						?>
					}
					</script>
                </li> -->
              </ol>
            </form>
			
			

			
			
			
          </div>
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
</body>
</html>

