<?php
session_start();
include_once 'connection.php';

 $action = "SELECT * FROM users WHERE user_type ='teacher'";
  $RunAction = mysqli_query($connection,$action);

 if($RunAction === FALSE){
      echo "bad database action ... <br/> ". mysqli_error($connection);             
      die();
   }  
    while($actionRow=mysqli_fetch_assoc($RunAction)){
  displayResult($actionRow['user_id'],$actionRow['full_name'],$actionRow['email']);
     
    }
function displayResult($id,$fn,$em){
     echo "<table border=\"1\">
             <thead>
                <tr>
                   <th>id</th>
                   <th>fname</th>
                   <th>mname</th>
                 
                </tr>
             </thead>
               <tbody>
                  <tr>
                   <td>$id</td>
                   <td>$fn</td>
                   <td>$em</td>
                   
                  </tr>
               </tbody>
            </table>"; 
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
	<link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>
  <form action="addteachers.php" method="POST">
  	<div class="input-group">
           <button type="submit" name="add" class="btn">addteacher</button>
		</div><br>
  </form>
 </body>
 </html>
 <?php 
if (isset($_POST['add'])) {
	header("location:registert.php");
}

  ?>