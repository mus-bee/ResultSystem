<?php

$con = mysqli_connect("localhost","root");
$con->select_db ("secondary_result");

if(mysqli_connect_errno()) {
echo "Fail to connect to mysql: ".mysqli_connect_error();
exit;
}