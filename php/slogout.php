<?php 
session_start();
include 'connection.php';
$sql="update user set last_visit_date='date(y-m-d H:i:s)'";

mysqli_query($connection,$sql);

session_destroy();


 ?>