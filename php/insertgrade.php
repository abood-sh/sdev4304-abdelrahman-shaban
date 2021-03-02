<?php 
session_start();

include_once 'connection.php';
$q="select full_name from users where user_type='student'";

$RunAction = mysqli_query($connection,$q);

 if($RunAction === FALSE){
      echo "bad database action ... <br/> ". mysqli_error($connection);             
      die();
   }  
   $option="";
    while($actionRow=mysqli_fetch_assoc($RunAction)){

    	$option=$option."<option>$actionRow[full_name]</option>";
    }
    $q2="select course_name from courses";
    $r=mysqli_query($connection,$q2);
    if ($r===false) {
    	echo"bad database".mysqli_error($connection);
    }
    $option2="";
while ($row=mysqli_fetch_assoc($r)) {
	$option2=$option2."<option>$row[course_name]</option>";
}

if (isset($_POST['save'])) {
	$sname=$_POST['s'];
	$cname=$_POST['c'];
	$grade=$_POST['grade'];
	$q3="insert into grades(grade) values($grade)";
	$r=mysqli_query($connection,$q3);
}else{
	echo "bad insert";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	
 </head>
 <body>
 	<form method="POST" >
 <select name="s">
 	<?php echo $option; ?>
 </select>
 <select name="c">
 	<?php echo $option2; ?>
 </select>
 <label>InsertGrade</label>
 <input type="text" name="grade">
 <div class="input-group">
           <button type="submit" name="save" class="btn">Save</button>
		</div><br>
</form>
 </body>
 </html>