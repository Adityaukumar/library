<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="s2.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
		<?php include('errors.php'); ?>
	<div class="content">	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="your name here!">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="your email here!">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="your password here!">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="rewrite password here!">
		</div>
		<div class="input-group">
			<label>University Registered No:</label>
			<input type="text" name="rollno" placeholder="your rollno here!">
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
		</div>	
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
		</p>
</div>	
  </form>
</body>
</html>