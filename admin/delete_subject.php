<?php
require_once('db_function.php');

$id = $_GET['id'];

$query = "delete from subject where id ='$id'";

if(mysqli_query($con,$query)) {
header('location:add_subject.php');
}
mysqli_close($con);

?> 