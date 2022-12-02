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
							<h2>Saving Exam Record.........</h2>
							<p><strong></strong>
	
 <?php
require_once('db_function.php'); 


$s1_ca1 = $_SESSION['s1_ca1'];   
$s1_ca2 = $_SESSION['s1_ca2'];
$total_s1 = $_SESSION['total_s1'];
$e1 = $_SESSION['e1'];
$s1_percentage = $_SESSION['s1_percentage'];
$s1_grade = $_SESSION['s1_grade'];
$s1_remark = $_SESSION['s1_remark'];

$s2_ca1 = $_SESSION['s2_ca1'];  
$s2_ca2 = $_SESSION['s2_ca2'];
$total_s2 = $_SESSION['total_s2'];
$e2 = $_SESSION['e2'];
$s2_percentage = $_SESSION['s2_percentage'];
$s2_grade = $_SESSION['s2_grade'];
$s2_remark = $_SESSION['s2_remark'];

$s3_ca1 = $_SESSION['s3_ca1'];  
$s3_ca2 = $_SESSION['s3_ca2'];
$total_s3 = $_SESSION['total_s3'];
$e3 = $_SESSION['e3'];
$s3_percentage = $_SESSION['s3_percentage'];
$s3_grade = $_SESSION['s3_grade'];
$s3_remark = $_SESSION['s3_remark'];

$s4_ca1 = $_SESSION['s4_ca1'];  
$s4_ca2 = $_SESSION['s4_ca2'];
$total_s4 = $_SESSION['total_s4'];
$e4 = $_SESSION['e4'];
$s4_percentage = $_SESSION['s4_percentage'];
$s4_grade = $_SESSION['s4_grade'];
$s4_remark = $_SESSION['s4_remark'];

$s5_ca1 = $_SESSION['s5_ca1'];  
$s5_ca2 = $_SESSION['s5_ca2'];
$total_s5 = $_SESSION['total_s5'];
$e5 = $_SESSION['e5'];
$s5_percentage = $_SESSION['s5_percentage'];
$s5_grade = $_SESSION['s5_grade'];
$s5_remark = $_SESSION['s5_remark'];

$s6_ca1 = $_SESSION['s6_ca1'];  
$s6_ca2 = $_SESSION['s6_ca2'];
$total_s6 = $_SESSION['total_s6'];
$e6 = $_SESSION['e6'];
$s6_percentage = $_SESSION['s6_percentage'];
$s6_grade = $_SESSION['s6_grade'];
$s6_remark = $_SESSION['s6_remark'];

$s7_ca1 = $_SESSION['s7_ca1'];  
$s7_ca2 = $_SESSION['s7_ca2'];
$total_s7 = $_SESSION['total_s7'];
$e7 = $_SESSION['e7'];
$s7_percentage = $_SESSION['s7_percentage'];
$s7_grade = $_SESSION['s7_grade'];
$s7_remark = $_SESSION['s7_remark'];

$s8_ca1 = $_SESSION['s8_ca1'];  
$s8_ca2 = $_SESSION['s8_ca2'];
$total_s8 = $_SESSION['total_s8'];
$e8 = $_SESSION['e8'];
$s8_percentage = $_SESSION['s8_percentage'];
$s8_grade = $_SESSION['s8_grade'];
$s8_remark = $_SESSION['s8_remark'];

$s9_ca1 = $_SESSION['s9_ca1'];  
$s9_ca2 = $_SESSION['s9_ca2'];
$total_s9 = $_SESSION['total_s9'];
$e9 = $_SESSION['e9'];
$s9_percentage = $_SESSION['s9_percentage'];
$s9_grade = $_SESSION['s9_grade'];
$s9_remark = $_SESSION['s9_remark'];

$all_total = $_SESSION['all_total'];
$name = $_SESSION['name'];
$class = $_SESSION['class'];
$admission_no = $_SESSION['admission_no'];
$class_type = $_SESSION['class_type'];

$av = $_SESSION['av']; 

 
 					
$query = "INSERT INTO exam(s1_ca1,s1_ca2,total_s1,e1,s1_percentage,s1_grade,s1_remark,s2_ca1,s2_ca2,total_s2,e2,s2_percentage,s2_grade,s2_remark,s3_ca1,s3_ca2,total_s3,e3,s3_percentage,s3_grade,s3_remark,s4_ca1,s4_ca2,total_s4,e4,s4_percentage,s4_grade,s4_remark,s5_ca1,s5_ca2,total_s5,e5,s5_percentage,s5_grade,s5_remark,s6_ca1,s6_ca2,total_s6,e6,s6_percentage,s6_grade,s6_remark,s7_ca1,s7_ca2,total_s7,e7,s7_percentage,s7_grade,s7_remark,s8_ca1,s8_ca2,total_s8,e8,s8_percentage,s8_grade,s8_remark,s9_ca1,s9_ca2,total_s9,e9,s9_percentage,s9_grade,s9_remark,all_total,name,class,admission_no,class_type,av)

values('$s1_ca1','$s1_ca2','$total_s1','$e1','$s1_percentage','$s1_grade','$s1_remark','$s2_ca1','$s2_ca2','$total_s2','$e2','$s2_percentage','$s2_grade','$s2_remark','$s3_ca1','$s3_ca2','$total_s3','$e3','$s3_percentage','$s3_grade','$s3_remark','$s4_ca1','$s4_ca2','$total_s4','$e4','$s4_percentage','$s4_grade','$s4_remark','$s5_ca1','$s5_ca2','$total_s5','$e5','$s5_percentage','$s5_grade','$s5_remark','$s6_ca1','$s6_ca2','$total_s6','$e6','$s6_percentage','$s6_grade','$s6_remark','$s7_ca1','$s7_ca2','$total_s7','$e7','$s7_percentage','$s7_grade','$s7_remark','$s8_ca1','$s8_ca2','$total_s8','$e8','$s8_percentage','$s8_grade','$s8_remark','$s9_ca1','$s9_ca2','$total_s9','$e9','$s9_percentage','$s9_grade','$s9_remark','$all_total','$name','$class', '$admission_no','$class_type','$av')";

if(mysqli_query($con, $query)) {
			
			echo '<center>';
		echo '<h1>Student Result Saved Successfully</h1>';
					
					echo '<a href="create_result.php">Create Another Result</a>';
				echo '<center>';
}
	else {
		
echo		mysqli_error($con);
	
}




?>
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