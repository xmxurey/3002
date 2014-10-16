
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<html lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>Login Form</title>
	  <link href="login.css" rel="stylesheet" type="text/css">
	  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
	  <section class="container">
	    <div class="login">
	      <h1>Welcome to Stranger!</h1>
	      <form method="post" action="login_autojump.php">
	        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
	        <p><input type="password" name="password" value="" placeholder="Password"></p>
	        <p class="remember_me">
	          <label>
	            <input type="checkbox" name="remember_me" id="remember_me">
	            Remember me
	          </label>
	        </p>
	        <a href="index.html"><p class="submit"><input type="submit" name="commit" value="Login"></p>
	        <a href = "">Forget Your Password?</a>
	        <br>
	        <a href = "Register.html">New User?</a>
	      </form>
	    </div>
	  </section>
	</body>
</html>