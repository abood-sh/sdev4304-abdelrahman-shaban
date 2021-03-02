	
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		 <p>Register</p>
	</div>
	<form method="POST" action="validform.php">
		<?php include ('errors.php');?>
		<div class="input-group">
			<label>Username</label>
            <input type="text" name="username" placeholder="username">
		</div>
		<div class="input-group">
			<label>Email</label>
            <input type="text" name="email" placeholder="email">

		</div>
		<div class="input-group">
			<label>Password</label>
            <input type="password" name="password1" placeholder="password">

		</div>
		<div class="input-group">
			<label>Confirm Password</label>
            <input type="password" name="password2" placeholder="confirm password">

		</div><br>
		<div class="input-group">
           <button type="submit" name="Register" class="btn">Register</button>
		</div><br>
		<!-- <p>
			Already a member ? <a href="login.php">Sign in</a>
		</p -->
	</form>

</body>
</html>
