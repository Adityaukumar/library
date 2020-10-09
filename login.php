<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
a{
	text-decoration:none;
	color:darkblue;
}
.header,.content{
	margin-left:600px !important;
}
</style>
	<title>GNI Library Registration</title>
	<link rel="stylesheet" type="text/css" href="s2.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<div class="content">
		<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="your username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  <div class="input-group">	<p>
  <label>		Not yet a member? <a href="register.php">Sign up</a></label>
		</p>		
		<br>
		<p>
		<a href="http://www.gmail.com"><b><i>forgot password? click here</i></b></a><br>
	    <br> <a href="index.php"><b><label>HOME</label></b></a> 
</div>		</p>
</div>
  </form>
</body>
</html>