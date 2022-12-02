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
					<li><span><a href="new_student_reg.php">Student Reg</a></span></li>
					<li class="active"><span><a href="add_subject.php">Add Subject</a></span></li>
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
							<h2>Add New Subject</h2>
							<p><strong></strong>
							
						Add new subject for science, commercial or art


<?php
require_once('db_function.php');

if(isset($_POST['add_subject'])) {
	
	$subject_name = $_POST['subject_name'];
	$subject_for = $_POST['subject_for'];


	$query = "INSERT INTO subject(subject_name,subject_for)values('$subject_name','$subject_for')";

	if(mysqli_query($con, $query)) {
		

		echo '<h1>Subject Added Successfully</h1>';


	}
		else {
			
			echo mysqli_error($con);
		}



}

?>

<center>
<table border="1" width="50%">
<form action="add_subject.php" method="POST">
<tr>

<th colspan="2" bgcolor="black"><font color="white">ADD SUBJECT</font></th>
</tr>
<tr>
<td><strong>Subject</strong></td>
<td><input type="text" name="subject_name"></td>
</tr>
<tr>
<td><strong>Subject For</strong></td>
<td> <select name="subject_for">

<option>Select</option>
<option>Science</option>
<option>Art</option>
<option>Commercial</option>

</select>
</tr>
<tr>
<td colspan="2"><input type="submit" name="add_subject" value="Add Subject"> <input type="reset" value="Reset Form"></td>
</tr>
</form>
</table>
</center>

<br>
<br>
<center>
        <td width="70%" height="186" align="center"><div align="left"></div>
	
	
		<?php
require_once('db_function.php');


$result = mysqli_query($con, "Select * from subject");
?>
<table border ="1" width="70%" cellpadding="5">
<tr>
<th colspan="10" bgcolor="black"><font color="white">ALL SUBJECT</th>
</tr>
<tr>
<th bgcolor="white">Subject  Name</th>
<th bgcolor="white">Subject For</th>
<th bgcolor="white"> &nbsp</th>
<tr/>

<?php
while($row= mysqli_fetch_array($result)) {

echo "<tr>";

echo '<td>'.$row['subject_name']. '</td>';
echo '<td>'.$row['subject_for']. '</td>';

?><th bgcolor="white"> <a href="delete_subject.php?id=<?php echo $row['id']; ?>">Delete Subject</a></th>
<?php
}
mysqli_close($con);
?>

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