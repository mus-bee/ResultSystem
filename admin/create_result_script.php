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
							
						Enter Student Record (First Test Second Test and Exam)


<?php

require_once('db_function.php');

$id = $_GET['id'];

$_SESSION['id'] = $id;

$result = mysqli_query($con, "Select * from student where id='$id'");

while($row= mysqli_fetch_array($result)) {
		

?>
<table border="1" width="40%">
<td><strong>Name: </strong></td><td><?php echo $row['first_name'] . " ". $row['last_name']; ?></td>
</tr>
<tr>
<td><strong>Class:</strong></td><td> <?php echo $row['class']; ?></td>
</tr>
<tr>
<td><strong>Admission No</strong></td><td> <?php echo $row['admission_no']; ?></td>
</tr>
<tr>
<td><strong>Course of Study</strong></td><td><?php echo $row['class_type']; $class_type = $row['class_type']; ?></td>
</table>
<?php
}
//mysqli_close($con);

?>
<br>
<h1>Enter Exam and Test Record</h1>
<table border="1"
style="width:10%;float:left">
<tbody>
<tr>
<th>Subject</th>
<?php 
require_once('db_function.php');

$result = mysqli_query($con, "Select * from subject where subject_for='$class_type'");

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

<table border="1">
<tr>
<th>Test(1)</th>
<th>Test(2)</th>
<th>Exam</th>
</tr>
<form action="create_result_script2.php" method="post">
<tr>
<td><input type="text" name="s1_ca1" required></td>
<td><input type="text" name="s1_ca2" required></td>
<td><input type="text" name="e1" required></td>
</tr>
<tr>
<td><input type="text" name="s2_ca1" required></td>
<td><input type="text" name="s2_ca2" required></td>
<td><input type="text" name="e2" required></td>
</tr>
<tr>
<td><input type="text" name="s3_ca1" required></td>
<td><input type="text" name="s3_ca2" required></td>
<td><input type="text" name="e3" required></td>
</tr>
<tr>
<td><input type="text" name="s4_ca1" required></td>
<td><input type="text" name="s4_ca2" required></td>
<td><input type="text" name="e4" required></td>
</tr>
<tr>
<td><input type="text" name="s5_ca1" required></td>
<td><input type="text" name="s5_ca2" required></td>
<td><input type="text" name="e5" required></td>
</tr>
<tr>
<td><input type="text" name="s6_ca1" required></td>
<td><input type="text" name="s6_ca2" required></td>
<td><input type="text" name="e6" required></td>
</tr>
<tr>
<td><input type="text" name="s7_ca1" required></td>
<td><input type="text" name="s7_ca2" required></td>
<td><input type="text" name="e7" required></td>
</tr>
<tr>
<td><input type="text" name="s8_ca1" required></td>
<td><input type="text" name="s8_ca2" required></td>
<td><input type="text" name="e8" required></td>
</tr>
<tr>
<td><input type="text" name="s9_ca1" required></td>
<td><input type="text" name="s9_ca2" required></td>
<td><input type="text" name="e9" required></td>
</tr>
<tr>
<td colspan="3"> <center> <input type="submit" value="Continue"> <input type="reset" value="Reset Form"> </center></td>
</tr>
</form>
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