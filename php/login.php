
<?php 
///////////////////////////////////////////////start session////if !isset $_session[userid]stay in loginpage

require 'valid_login.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		 <p>login</p>
	</div>
	<form method="POST" action="login.php">

<!-- /////////////////////////////////////////////////////////-->
		<?php 
           if (isset($errors) && !empty($errors)) {
           	echo '<p class="error"> Invalid UsernName / password</p>';
           }
		 ?>
<!-- /////////////////////////////////////////////////////////-->


		<div class="input-group">
			<label>Username</label>
            <input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
            <input type="password" name="password1">

		</div><br>
		
		<div class="input-group">
           <button type="submit" name="login" class="btn">login</button>
		</div><br>
		<!-- <p>
			Not yet a member ? <a href="register.php">Sign up</a>
		</p> -->
	</form>

</body>
</html>