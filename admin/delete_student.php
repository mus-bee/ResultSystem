<?php
require_once('db_function.php');

$id = $_GET['id'];

$query = "delete from student where id ='$id'";

if(mysqli_query($con,$query)) {
header('location:view_student.php');
}
mysqli_close($con);

?> 