 
<?php 
session_start();
if($_SESSION['user_type']!='registrar'){
	header('location:rlogout.php');
}
//if(isset($_SESSION['user_id']))// select * where user_id=$_session['user_id']''
echo "Welcome "." ".$_SESSION['username']." "."your last login"." ".$_SESSION['last_visit_date'];
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <form method="POST" action="registrar.php">
 	<div class="input-group">
           <button type="submit" name="adds" class="btn">addstudents</button>
		</div><br>
		<div class="input-group">
           <button type="submit" name="addt" class="btn">addteachers</button>
		</div><br>
		<div class="input-group">
           <button type="submit" name="addc" class="btn">addcourses</button>
		</div><br>
		<div class="input-group">
           <button type="submit" name="logout" class="btn1">logout</button>
		</div><br>
                         <!-- ////////////////////////logout//// -->
 </form>
 </body>
 </html>
 <?php 
if (isset($_POST['adds'])){

	header("location:addstudents.php");

}if (isset($_POST['addt'])) {
	header("location:addteachers.php");
}if (isset($_POST['addc'])) {
	header("location:addcourses.php");
}if(isset($_POST['Logout'])){
	header("location:rlogout.php");
}


  ?>