

	
<!DOCTYPE html>
<html>
<head>
	<title>course registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		 <p>courses</p>
	</div>
	<form method="POST" action="validc.php">
		
		<div class="input-group">
			<label>Username</label>
            <input type="text" name="coursename" placeholder="coursename">
		</div>
		<div class="input-group">
			<label>Email</label>
            <input type="text" name="studentname" placeholder="studentname">

		</div>
		
		<div class="input-group">
           <button type="submit" name="Register" class="btn">Register</button>
		</div><br>
		<!-- <p>
			Already a member ? <a href="login.php">Sign in</a>
		</p -->
	</form>

</body>
</html>




