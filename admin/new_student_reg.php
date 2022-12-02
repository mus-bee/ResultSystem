    <script type="text/javascript">
		
		function validate()
         {
      
         if( document.new_student_reg.first_name.value == "" )
          {
            alert( "Please you must put the First name!" );
            document.new_student_reg.first_name.focus() ;
            return false;
          }
		  
		  if( document.new_student_reg.last_name.value == "" )
          {
            alert( "Please you must Enter your Last name!" );
            document.new_student_reg.last_name.focus() ;
            return false;
          }
		  if( document.new_student_reg.gender.value == "" )
          {
            alert( "Please you must select a Gender!" );
            document.new_student_reg.gender.focus() ;
            return false;
          }
		  
		   if( document.new_student_reg.birth.value == "" )
          {
            alert( "Please you must Select your Age!" );
            document.new_student_reg.birth.focus() ;
            return false;
          }
		  
		  if( document.new_student_reg.state.value == "" )
          {
            alert( "Please you must Enter your State of origin!" );
            document.new_student_reg.state.focus() ;
            return false;
          }
		  if( document.new_student_reg.l_g_a.value == "" )
          {
            alert( "Please you must Enter Local Government Area Council" );
            document.new_student_reg.l_g_a.focus() ;
            return false;
          }
		  
		   if( document.new_student_reg.class.value == "" )
          {
            alert( "Please you must Select a class!" );
            document.new_student_reg.class.focus() ;
            return false;
          }
		  
		   if( document.new_student_reg.class_type.value == "" )
          {
            alert( "Please you must Select your course of study!" );
            document.new_student_reg.class_type.focus() ;
            return false;
          }
		  
		  if( document.new_student_reg.admission_no.value == "" )
          {
            alert( "Please Enter your Addmision number Correctly !" );
            document.new_student_reg.admission_no.focus() ;
            return false;
          }
		   return(true);
		 }
		 
		 
   </script>
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
	}	</style>
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
					<li class="active"><span><a href="new_student_reg.php">Student Reg</a></span></li>
					<li><span><a href="add_subject.php">Add Subject</a></span></li>
					<li><span><a href="create_result.php">Create</a></span></li>
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
							<h2>New Student Registration</h2>
							<p><strong></strong>
							
						Before you create any student result you need to register a new student
						<?php
require_once('db_function.php');

if(isset($_POST['add_student'])) {

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$state = $_POST['state'];
	$l_g_a = $_POST['l_g_a'];
	$class = $_POST['class'];
	$class_type = $_POST['class_type'];
	$admission_no = $_POST['admission_no'];


	$query = "INSERT INTO student(first_name,last_name,gender,birth,state,l_g_a,class,class_type,admission_no)values
	('$first_name','$last_name','$gender','$birth','$state','$l_g_a','$class','$class_type','$admission_no')";

	if(mysqli_query($con, $query)) {
		

	echo '<h1>Student Registered Successfully</h1>';


	}
		else {
			
			echo mysqli_error($con);
		}

}

?>

<center>
<table width="480" border="8" align="center" cellpadding="6">
<form name="new_student_reg" action="new_student_reg.php" onsubmit="return validateForm()" enctype="multipart/form-data" method="POST">
<tr>
<th colspan="2" bgcolor="blue"><font color="white">NEW STUDENT REGISTRATION FORM</font></th>
</tr>
<tr>
<td><strong>First Name</strong></td>
<td><input type="text" name="first_name" placeholder="Enter Your First Name Here" requied></td>
</tr>
<tr>
<td><strong>Last Name</strong></td>
<td><input type="text" name="last_name" placeholder="Enter Your Last Name Here" requied></td>
</tr>
<tr>
<td><strong>Gender</strong></td>
<td>
<select name="gender">
<OPTION> </OPTION>
<option>Male</option>
<option>Female</option>
</td>
</tr>
<tr>
<td><strong>Age</strong></td>
<td>
                    	<select name="birth" type="date">
                        	<option></option>
                            	<?php
                            		//Do Loop while
									$d=18;
									do{
										$d++;
										echo "<option>".$d."</option>";
									}while($d<=25);
								?>
                        </select>
                        
                    </td>
</tr>
<tr>
<td><strong>State</strong></td>
<td><input type="text" name="state"></td>
</tr>
<tr>
<td><strong>L.G.A</strong></td>
<td><input type="text" name="l_g_a"></td>
</tr>
<tr>
<td><strong>Class</strong></td>
<td>
<select name="class">
<option></option>
<option>JS 1</option>
<option>JS 2</option>
<option>JS 3</option>
<option>SS 1</option>
<option>SS 2</option>
<option>SS 3</option>
</select>
</td>
</tr>
<tr>
<td><strong>Course of Study</strong></td>
<td>
<select name="class_type">
<option><option>
<option>Science</option>
<option>Art</option>
<option>Commercial</option>
</select> </td>
</tr>
<tr>
<td><strong>Admission No</strong></td>
<td><input type="text" name="admission_no"></td>
</tr>
<tr>
<td colspan="2">
<center>
<input type="submit" name="add_student" onclick="return validate() " value="Submit"> 
<input type="reset" value="Reset">
</center></td>
</tr>
</form>
</table>
</center>

<br>
<br>



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