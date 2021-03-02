

<?php
session_start();
include_once 'connection.php';

$course_list='';
 $action = "SELECT course_name FROM courses WHERE user_type ='student'";
  $RunAction = mysqli_query($connection,$action);

 if($RunAction === FALSE){
      echo "bad database action ... <br/> ". mysqli_error($connection);             
      die();
   }  
    while($actionRow=mysqli_fetch_assoc($RunAction)){
     $course_list.="<tr>";
     $course_list.="<td>{$actionRow['user_id']}</td>";
      
             $course_list.="<tr>";

     
    }
 
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
	<link rel="stylesheet" type="text/css" href="student.css">

 </head>
 <body>
 	<header >
 		<div class="appname">course Mangment System</div>
 		
 	</header>
 	<main>
 		<h1>All courses</h1>
 	<table class="masterlist">
 		<tr>
 			<th>course_name</th>
 			
 		</tr>
 		<?php echo $course_list; ?>

 	</table>
 </main>
  <form action="addc.php" method="GET">
  	<div class="input-group">
           <button type="submit" name="add" class="btn">addcourse</button>
		</div><br>
  </form>
 </body>
 </html>
 <?php 
if (isset($_GET['addc'])) {
	header("location:addc.php");
}

  ?>