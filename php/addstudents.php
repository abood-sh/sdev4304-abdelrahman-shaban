<?php
session_start();
include_once 'connection.php';

$user_list='';
 $action = "SELECT * FROM users WHERE user_type ='student'";
  $RunAction = mysqli_query($connection,$action);

 if($RunAction === FALSE){
      echo "bad database action ... <br/> ". mysqli_error($connection);             
      die();
   }  
    while($actionRow=mysqli_fetch_assoc($RunAction)){
     $user_list.="<tr>";
     $user_list.="<td>{$actionRow['user_id']}</td>";
      $user_list.="<td>{$actionRow['full_name']}</td>";
       $user_list.="<td>{$actionRow['email']}</td>";
        $user_list.="<td>{$actionRow['last_visit_date']}</td>";
             $user_list.="<tr>";

     
    }
 
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
	<link rel="stylesheet" type="text/css" href="student.css">

 </head>
 <body>
 	<header >
 		<div class="appname">Student Mangment System</div>
 		
 	</header>
 	<main>
 		<h1>All Students</h1>
 	<table class="masterlist">
 		<tr>
 			<th>ID</th>
 			<th>Full_name</th>
 			<th>email</th>
 			<th>last_visit_date</th>
 		</tr>
 		<?php echo $user_list; ?>

 	</table>
 </main>
  <form action="addStudents.php" method="GET">
  	<div class="input-group">
           <button type="submit" name="add" class="btn">addStudent</button>
		</div><br>
  </form>
 </body>
 </html>
 <?php 
if (isset($_GET['add'])) {
	header("location:register.php");
}

  ?>