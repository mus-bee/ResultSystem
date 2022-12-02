<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>SECONDARY SCHOOL RESULT PROCESSING SYSTEM</title>
	<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="../js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="../js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="../js/functions.js" type="text/javascript"></script>
	
	<style>
	tr {
	border:#FFFFFF;
	}
	td {
	border:#FFFFFF;
	}
	input {
	background-color:#000;
	color:#EEEEEE;
	}
	th {
		background:#000000;
		color:#EEEEEE;
	}
		</style>
</head>
<body>
	<div id="wrapper">
		
		<!-- top-nav -->
		<nav class="top-nav">
			<div class="shell">
				<a href="#" class="nav-btn">HOMEPAGE<span></span></a>
				<span class="top-nav-shadow"></span>
				<ul>
					<li ><span><a href="home.php">home</a></span></li>
					<li><span><a href="view_student.php">all students</a></span></li>
					<li><span><a href="new_student_reg.php">Student Reg</a></span></li>
					<li><span><a href="add_subject.php">Add Subject</a></span></li>
					<li class="active"><span><a href="create_result.php">Create</a></span></li>
					<li><span><a href="print_result.php">Print </a></span></li>
						<li><span><a href="logout.php">Logout</a></span></li>
				</ul>
			</div>
		</nav>
		<!-- end of top-nav -->
			<!-- header -->
			<header id="header">
				
				<div class="header-center">
					<div class="header-top"></div>
					<!-- shell -->
					<div class="shell">
						<div class="header-inner">
							<!-- header-cnt -->
						  <div class="header-cnt">
							  <h1 id="logo"><a href="#" class="blue-btn"></a>							</h1>		
							</div>
							<!-- end of header-cnt -->
							<!-- slider -->
							<!-- end of slider -->
<div class="cl">&nbsp;</div>
						</div>
						<div class="cl">&nbsp;</div>
					</div>
					<!-- end of shell -->	
					<div class="header-bottom"><h1><center><font color="#FFFFFF">SECONDARY SCHOOL RESULT PROCESSING SYSTEM</h1>
					<p> <center>(GOVERNMENT SECONDARY SCHOOL, GIREI)</center></p></center></font></div>
				
			</header>
			<!-- end of header -->
			<!-- main -->
			<div class="main">
				<span class="shadow-top"></span>
				<!-- shell -->
				<div class="shell">
					<div class="container">
						<!-- testimonial -->
						<section class="testimonial">
							<h2>Result Processing Page</h2>
							<p><strong></strong>
							
						Proceed Result Record Save The Result to See The Student Position 


<?php


$s1_ca1 = $_POST['s1_ca1'];
$s1_ca2 = $_POST['s1_ca2'];
$e1		= $_POST['e1'];

$s2_ca1 = $_POST['s2_ca1'];
$s2_ca2 = $_POST['s2_ca2'];
$e2		= $_POST['e2'];

$s3_ca1 = $_POST['s3_ca1'];
$s3_ca2 = $_POST['s3_ca2'];
$e3		= $_POST['e3'];

$s4_ca1 = $_POST['s4_ca1'];
$s4_ca2 = $_POST['s4_ca2'];
$e4		= $_POST['e4'];

$s5_ca1 = $_POST['s5_ca1'];
$s5_ca2 = $_POST['s5_ca2'];
$e5		= $_POST['e5'];

$s6_ca1 = $_POST['s6_ca1'];
$s6_ca2 = $_POST['s6_ca2'];
$e6		= $_POST['e6'];

$s7_ca1 = $_POST['s7_ca1'];
$s7_ca2 = $_POST['s7_ca2'];
$e7		= $_POST['e7'];

$s8_ca1 = $_POST['s8_ca1'];
$s8_ca2 = $_POST['s8_ca2'];
$e8		= $_POST['e8'];

$s9_ca1 = $_POST['s9_ca1'];
$s9_ca2 = $_POST['s9_ca2'];
$e9		= $_POST['e9'];

//total ca1 ca2
$total_s1 = $s1_ca1 + $s1_ca2;

$total_s2 = $s2_ca1 + $s2_ca2;

$total_s3 = $s3_ca1 + $s3_ca2;

$total_s4 = $s4_ca1 + $s4_ca2;

$total_s5 = $s5_ca1 + $s5_ca2;

$total_s6 = $s6_ca1 + $s6_ca2;

$total_s7 = $s7_ca1 + $s7_ca2;

$total_s8 = $s8_ca1 + $s8_ca2;

$total_s9 = $s9_ca1 + $s9_ca2;

//percentage

$s1_percentage = $total_s1 + $e1;

$s2_percentage = $total_s2 + $e2;

$s3_percentage = $total_s3 + $e3;

$s4_percentage = $total_s4 + $e4;

$s5_percentage = $total_s5 + $e5;

$s6_percentage = $total_s6 + $e6;

$s7_percentage = $total_s7 + $e7;

$s8_percentage = $total_s8 + $e8;

$s9_percentage = $total_s9 + $e9;


//s1_grade
if($s1_percentage < 39) {
	
	$s1_grade = "F";
	$s1_remark = "Fail";

}elseif($s1_percentage < 49) {
	
	$s1_grade = "D";
	$s1_remark = "Pass";
}elseif($s1_percentage < 59) {
	
	$s1_grade = "C";
	$s1_remark = "Cedit";
}elseif($s1_percentage < 69) {
	
	$s1_grade = "B";
	$s1_remark = "Good";
}elseif($s1_percentage < 79) {
	
	$s1_grade = "B+";
	$s1_remark = "Very Good";
}elseif($s1_percentage < 100) {
	
	$s1_grade = "A";
	$s1_remark = "Excellent";
}


//s2_grade
if($s2_percentage < 39) {
	
	$s2_grade = "F";
	$s2_remark = "Fail";
}elseif($s2_percentage < 49) {
	
	$s2_grade = "D";
	$s2_remark = "Pass";
}elseif($s2_percentage < 59) {
	
	$s2_grade = "C";
	$s2_remark = "Credit";
}elseif($s2_percentage < 69) {
	
	$s2_grade = "B";
	$s2_remark = "Good";
}elseif($s2_percentage < 79) {
	
	$s2_grade = "B+";
	$s2_remark = "Very Good";
}elseif($s2_percentage < 100) {
	
	$s2_grade = "A";
	$s2_remark = "Excellent";
}

//s3_grade
if($s3_percentage < 39) {
	
	$s3_grade = "F";
	$s3_remark = "Fail";
}elseif($s3_percentage < 49) {
	
	$s3_grade = "D";
	$s3_remark = "Pass";
}elseif($s3_percentage < 59) {
	
	$s3_grade = "C";
	$s3_remark = "Credit";
}elseif($s3_percentage < 69) {
	
	$s3_grade = "B";
	$s3_remark = "Good";
}elseif($s3_percentage < 79) {
	
	$s3_grade = "B+";
	$s3_remark = "Very Good";
}elseif($s3_percentage < 100) {
	
	$s3_grade = "A";
	$s3_remark = "Excellent";
}

//s4_grade
if($s4_percentage < 39) {
	
	$s4_grade = "F";
	$s4_remark = "Fail";
}elseif($s4_percentage < 49) {
	
	$s4_grade = "D";
	$s4_remark = "Pass";
}elseif($s4_percentage < 59) {
	
	$s4_grade = "C";
	$s4_remark = "Credit";
}elseif($s4_percentage < 69) {
	
	$s4_grade = "B";
	$s4_remark = "Good";
}elseif($s4_percentage < 79) {
	
	$s4_grade = "B+";
	$s4_remark = "Very Good";
}elseif($s4_percentage < 100) {
	
	$s4_grade = "A";
	$s4_remark = "Excellent";
}

//s5_grade
if($s5_percentage < 39) {
	
	$s5_grade = "F";
	$s5_remark = "Fail";
}elseif($s5_percentage < 49) {
	
	$s5_grade = "D";
	$s5_remark = "Pass";
}elseif($s5_percentage < 59) {
	
	$s5_grade = "C";
	$s5_remark = "Credit";
}elseif($s5_percentage < 69) {
	
	$s5_grade = "B";
	$s5_remark = "Good";
}elseif($s5_percentage < 79) {
	
	$s5_grade = "B+";
	$s5_remark = "Very Good";
}elseif($s5_percentage < 100) {
	
	$s5_grade = "A";
	$s5_remark = "Excellent";
}

//s6_grade
if($s6_percentage < 39) {
	
	$s6_grade = "F";
	$s6_remark = "Fail";
}elseif($s6_percentage < 49) {
	
	$s6_grade = "D";
	$s6_remark = "Pass";
}elseif($s6_percentage < 59) {
	
	$s6_grade = "C";

	$s6_remark = "Credit";
}elseif($s6_percentage < 69) {
	
	$s6_grade = "B";
	$s6_remark = "Good";
}elseif($s6_percentage < 79) {
	
	$s6_grade = "B+";
	$s6_remark = "Very Good";
}elseif($s6_percentage < 100) {
	
	$s6_grade = "A";
	$s6_remark = "Excellent";
}

//s7_grade
if($s7_percentage < 39) {
	
	$s7_grade = "F";
	$s7_remark = "Fail";
}elseif($s7_percentage < 49) {
	
	$s7_grade = "D";
	$s7_remark = "Pass";
}elseif($s7_percentage < 59) {
	
	$s7_grade = "C";
	$s7_remark = "Credit";
}elseif($s7_percentage < 69) {
	
	$s7_grade = "B";
	$s7_remark = "Good";
}elseif($s7_percentage < 79) {
	
	$s7_grade = "B+";
	$s7_remark = "Very Good";
}elseif($s7_percentage < 100) {
	
	$s7_grade = "A";
	$s7_remark = "Excellent";
}

//s8_grade
if($s8_percentage < 39) {
	
	$s8_grade = "F";
	$s8_remark = "Fail";
}elseif($s8_percentage < 49) {
	
	$s8_grade = "D";
	$s8_remark = "Pass";
}elseif($s8_percentage < 59) {
	
	$s8_grade = "C";
	$s8_remark = "Credit";
}elseif($s8_percentage < 69) {
	
	$s8_grade = "B";
	$s8_remark = "Good";
}elseif($s8_percentage < 79) {
	
	$s8_grade = "B+";
	$s8_remark = "Very Good";
}elseif($s8_percentage < 100) {
	
	$s8_grade = "A";
	$s8_remark = "Excellent";
}

//s9_grade
if($s9_percentage < 39) {
	
	$s9_grade = "F";
	$s9_remark = "Fail";
}elseif($s9_percentage < 49) {
	
	$s9_grade = "D";
	$s9_remark = "Pass";
}elseif($s9_percentage < 59) {
	
	$s9_grade = "C";
	$s9_remark = "Credit";
}elseif($s9_percentage < 69) {
	
	$s9_grade = "B";
	$s9_remark = "Good";
}elseif($s9_percentage < 79) {
	
	$s9_grade = "B+";
	$s9_remark = "Very Good";
}elseif($s9_percentage < 100) {
	
	$s9_grade = "A";
	$s9_remark = "Excellent";
}
?>


<?php
require_once('db_function.php');

$id = $_SESSION['id'];


$result = mysqli_query($con, "Select * from student where id='$id'");

while($row= mysqli_fetch_array($result)) {
		

?>
<br>

<table border="1" width="40%">
<td><strong>Name: </strong></td><td><?php echo $row['first_name'] . " ". $row['last_name']; $_SESSION['name'] = $row['first_name'] . " ". $row['last_name']; ?></td>
</tr>
<tr>
<td><strong>Class:</strong></td><td> <?php echo $row['class'];  $_SESSION['class'] = $row['class']; ?></td>
</tr>
<tr>
<td><strong>Admission No</strong></td><td> <?php echo $row['admission_no'];  $_SESSION['admission_no'] = $row['admission_no']; ?></td>
</tr>
<tr>
<td><strong>Course of Study</strong></td><td><?php echo $row['class_type']; $_SESSION['class_type'] = $row['class_type']; $class_type = $row['class_type']; ?></td>
</table>
<?php
}
//mysqli_close($con);

?>
<br>

<h1>Exam Record (Percentage, Remark, Grade)</h1>
<table border="1"
style="width:10%;float:left">
<tbody>
<th>Subject</th>
<?php 
require_once('db_function.php');

$result = mysqli_query($con, "Select * from subject where subject_for='Science'");

while($row= mysqli_fetch_array($result)) {

?>

<tr>
<td> <?php echo $row['subject_name']; ?> </td>
</div>
<?php
}

mysqli_close($con);

?>
</table>

<table border="1" width="70%">
<th>Test(1)</th>
<th>Test(2)</th>
<th>Total CA(30)</th>
<th>Exam(70)</th>
<th>Percentage(100%)</th>
<th>Grade</th>
<th>Remarks</th>
<form action="create_result_script3.php" method="post">
<tr>
<td><?php echo $s1_ca1; ?></td>
<td><?php echo $s1_ca2; ?></td>
<td><?php echo $total_s1; ?> </td>
<td><?php echo $e1; ?></td>
<td><?php echo $s1_percentage; ?></td>
<td><?php echo $s1_grade; ?> </td>
<td><?php echo $s1_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s2_ca1; ?></td>
<td><?php echo $s2_ca2; ?></td>
<td><?php echo $total_s2; ?> </td>
<td><?php echo $e2; ?></td>
<td><?php echo $s2_percentage; ?></td>
<td><?php echo $s2_grade; ?> </td>
<td><?php echo $s2_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s3_ca1; ?></td>
<td><?php echo $s3_ca2; ?></td>
<td><?php echo $total_s3; ?> </td>
<td><?php echo $e3; ?></td>
<td><?php echo $s3_percentage; ?></td>
<td><?php echo $s3_grade; ?> </td>
<td><?php echo $s3_remark; ?> </td></tr>
<tr>
<td><?php echo $s4_ca1; ?></td>
<td><?php echo $s4_ca2; ?></td>
<td><?php echo $total_s4; ?> </td>
<td><?php echo $e4; ?></td>
<td><?php echo $s4_percentage; ?></td>
<td><?php echo $s4_grade; ?> </td>
<td><?php echo $s4_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s5_ca1; ?></td>
<td><?php echo $s5_ca2; ?></td>
<td><?php echo $total_s5; ?> </td>
<td><?php echo $e5; ?></td>
<td><?php echo $s5_percentage; ?></td>
<td><?php echo $s5_grade; ?> </td>
<td><?php echo $s5_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s6_ca1; ?></td>
<td><?php echo $s6_ca2; ?></td>
<td><?php echo $total_s6; ?> </td>
<td><?php echo $e6; ?></td>
<td><?php echo $s6_percentage; ?></td>
<td><?php echo $s6_grade; ?> </td>
<td><?php echo $s6_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s7_ca1; ?></td>
<td><?php echo $s7_ca2; ?></td>
<td><?php echo $total_s7; ?> </td>
<td><?php echo $e7; ?></td>
<td><?php echo $s7_percentage; ?></td>
<td><?php echo $s7_grade; ?> </td>
<td><?php echo $s7_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s8_ca1; ?></td>
<td><?php echo $s8_ca2; ?></td>
<td><?php echo $total_s8; ?> </td>
<td><?php echo $e8; ?></td>
<td><?php echo $s8_percentage; ?></td>
<td><?php echo $s8_grade; ?> </td>
<td><?php echo $s8_remark; ?> </td>
</tr>
<tr>
<td><?php echo $s9_ca1; ?></td>
<td><?php echo $s9_ca2; ?></td>
<td><?php echo $total_s9; ?> </td>
<td><?php echo $e9; ?></td>
<td><?php echo $s9_percentage; ?></td>
<td><?php echo $s9_grade; ?> </td>
<td><?php echo $s9_remark; ?> </td>
</tr>
<?php

$all_total = $s1_percentage + $s2_percentage + $s3_percentage + $s4_percentage + $s5_percentage + $s6_percentage + $s7_percentage + $s8_percentage + $s9_percentage;


$_SESSION['all_total'] = $all_total;

$av = $all_total/2;

?>
<tr>
<td colspan="7"> <font color="red"> Total Score: <?php echo $all_total; ?></td>
</tr>

<tr>
<td colspan="7"> <font color="red"> Average: <?php echo $av; $_SESSION['av'] = $av; ?></td>
</tr>
<tr>
<td colspan="7"> <center> <input type="submit" value="Save Result">  </center></td>
</tr>

<?php
//declaring session

$_SESSION['s1_ca1'] = $s1_ca1;  
$_SESSION['s1_ca2'] = $s1_ca2;
$_SESSION['total_s1'] = $total_s1;
$_SESSION['e1'] = $e1;
$_SESSION['s1_percentage'] = $s1_percentage;
$_SESSION['s1_grade'] = $s1_grade;
$_SESSION['s1_remark'] = $s1_remark;

$_SESSION['s2_ca1'] = $s2_ca1;  
$_SESSION['s2_ca2'] = $s2_ca2;
$_SESSION['total_s2'] = $total_s2;
$_SESSION['e2'] = $e2;
$_SESSION['s2_percentage'] = $s2_percentage;
$_SESSION['s2_grade'] = $s2_grade;
$_SESSION['s2_remark'] = $s2_remark;

$_SESSION['s3_ca1'] = $s3_ca1;  
$_SESSION['s3_ca2'] = $s3_ca2;
$_SESSION['total_s3'] = $total_s3;
$_SESSION['e3'] = $e3;
$_SESSION['s3_percentage'] = $s3_percentage;
$_SESSION['s3_grade'] = $s3_grade;
$_SESSION['s3_remark'] = $s3_remark;

$_SESSION['s4_ca1'] = $s4_ca1;  
$_SESSION['s4_ca2'] = $s4_ca2;
$_SESSION['total_s4'] = $total_s4;
$_SESSION['e4'] = $e4;
$_SESSION['s4_percentage'] = $s4_percentage;
$_SESSION['s4_grade'] = $s4_grade;
$_SESSION['s4_remark'] = $s4_remark;

$_SESSION['s5_ca1'] = $s5_ca1;  
$_SESSION['s5_ca2'] = $s5_ca2;
$_SESSION['total_s5'] = $total_s5;
$_SESSION['e5'] = $e5;
$_SESSION['s5_percentage'] = $s5_percentage;
$_SESSION['s5_grade'] = $s5_grade;
$_SESSION['s5_remark'] = $s5_remark;

$_SESSION['s6_ca1'] = $s6_ca1;  
$_SESSION['s6_ca2'] = $s6_ca2;
$_SESSION['total_s6'] = $total_s6;
$_SESSION['e6'] = $e6;
$_SESSION['s6_percentage'] = $s6_percentage;
$_SESSION['s6_grade'] = $s6_grade;
$_SESSION['s6_remark'] = $s6_remark;

$_SESSION['s7_ca1'] = $s7_ca1;  
$_SESSION['s7_ca2'] = $s7_ca2;
$_SESSION['total_s7'] = $total_s7;
$_SESSION['e7'] = $e7;
$_SESSION['s7_percentage'] = $s7_percentage;
$_SESSION['s7_grade'] = $s7_grade;
$_SESSION['s7_remark'] = $s7_remark;

$_SESSION['s8_ca1'] = $s8_ca1;  
$_SESSION['s8_ca2'] = $s8_ca2;
$_SESSION['total_s8'] = $total_s8;
$_SESSION['e8'] = $e8;
$_SESSION['s8_percentage'] = $s8_percentage;
$_SESSION['s8_grade'] = $s8_grade;
$_SESSION['s8_remark'] = $s8_remark;

$_SESSION['s9_ca1'] = $s9_ca1;  
$_SESSION['s9_ca2'] = $s9_ca2;
$_SESSION['total_s9'] = $total_s9;
$_SESSION['e9'] = $e9;
$_SESSION['s9_percentage'] = $s9_percentage;
$_SESSION['s9_grade'] = $s9_grade;
$_SESSION['s9_remark'] = $s9_remark;



?>






</table>
</table>


</p>
						</section>
						<!-- testimonial -->

						<section class="blog"><!-- content -->
							<div class="content"></div>
							<!-- end of content -->

							<!-- sidebar --><!-- end of sidebar -->
							<div class="cl">&nbsp;</div>
					  </section>	
						
						<!-- cols -->
						<section class="cols">
						  <div class="cl">&nbsp;</div>
					  </section>
						<!-- end of cols -->
					</div>
				<!-- end of shell -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of main -->
</div>	
		<!-- footer-push -->
		<div id="footer-push"></div>
		<!-- end of footer-push -->
	
	<!-- end of wrapper -->
	<!-- footer -->
	<div  id="footer">
		<span class="shadow-bottom"></span>
		<!-- footer-cols -->
		<div class="footer-cols">
			<!-- shell -->
			<div class="shell">
				<div class="col">
					<h3><a href="#">Contact Us</a></h3>
					<div class="col-cnt">
						<ul>
							<li><a href="#">Phone: 07032359759</a></li>
							<li><a href="#">Email: support@gssg.sch.ng</a></li>
							<li><a href="#">Address: PMB 68, Girei town Mubi road Girei.</a></li>
							<li><a href="#">Website: www.gssg.edu.ng </a></li>
							
						</ul>
					</div>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of shell -->
		</div>
		<!-- end of footer-cols -->
		<div class="footer-bottom">
			<div class="shell">
				<nav class="footer-nav">
					<ul>
						<li> Supervised by Mr M A Mahmud</li>
					</ul>
					<div class="cl">&nbsp;</div>
				</nav>
				<p class="copy">&copy; Copyright 2022<span>| Muhammad Musbahu Goni</span></p>
			</div>
		</div>
	</div>
	<!-- end of footer -->
</body>
</html>