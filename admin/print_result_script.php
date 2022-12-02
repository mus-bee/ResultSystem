<?php
session_start();
?>
<!DOCTYPE html>
<head>

<style>
#box{
	border: 2px solid black;
	width: 900px;
	height: 1000px;
	text-align:left;
}
#box h1 {

	text-align:center;
	font-size:19px;
	font-family:Arial, Helvetica, sans-serif;
}

#box h2 {
		text-align:center;
		font-size:14px;
}

#box h3 {
		text-align:center;
		font-size:12px;
}

#student_info {
		line-height:1;
		margin-left:20px;
}
table {
border-collapse:collapse;
}

</style>

</head>

<body>

<center>
<div id="box">

<div id="student_info">
<?php
require_once('db_function.php');

$id = $_GET['id'];


$result = mysqli_query($con, "Select * from exam where id='$id'");

while($row= mysqli_fetch_array($result)) {
		

?>
<br>

<h1>GOVERNMENT SECONDARY SCHOOL, GIREI </h1>
<h2>PERSONAL AND SOCIAL QUALITIES</h2>
<table border="1">
<tr>
<td><strong>Name:</strong></td><td> <?php echo $row['name']; ?> </td>
</tr>
<tr>
<td><strong>Class:</strong></td><td> <?php echo $row['class']; ?> </td>
</tr>
<tr>
<td><strong>Position in Class:</strong> </td> <td> <?php echo $_GET['var']; ?> Out of <?php echo $_SESSION['count']; ?> </td>
</tr>
<tr>
<td><strong>Admission No</strong></td> <td> <?php echo $row['admission_no']; ?> </td>
</tr>
<tr>
<td colspan="2"><strong>Continuous Assessment(Termly)</strong></td
></table>

<?php
}
?>



<br />
<table border="1"
style="width:30%;float:left">
<tr>
<th>Subjects</th>
<?php 

$result = mysqli_query($con, "Select * from subject where subject_for='Science'");

while($row= mysqli_fetch_array($result)) {

?>

<tr>
<td> <?php echo $row['subject_name']; ?> </td>
</div>
<?php
}

//mysqli_close($con);

?>


</tr>
<br />
<h1>TERMLY REPORT SHEET</h1>
<table border="1" width="65%">
<tr>
<th>Test(1)</th>
<th>Test(2)</th>
<th>Total CA(30)</th>
<th>Exam(70)</th>
<th>Percentage(100%)</th>
<th>Grade</th>
<th>Remark</th>

<?php
$result = mysqli_query($con, "Select * from exam where id='$id'");

while($row= mysqli_fetch_array($result)) {

?>

</tr>
<tr>
<td> <?php echo $row['s1_ca1']; ?> </td>
<td> <?php echo $row['s1_ca2']; ?></td>
<td><?php echo $row['total_s1']; ?></td>
<td><?php echo $row['e1']; ?> </td>
<td><?php echo $row['s1_percentage']; ?></td>
<td><?php echo $row['s1_grade']; ?></td>
<td><?php echo $row['s1_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s2_ca1']; ?> </td>
<td> <?php echo $row['s2_ca2']; ?></td>
<td><?php echo $row['total_s2']; ?></td>
<td><?php echo $row['e2']; ?> </td>
<td><?php echo $row['s2_percentage']; ?></td>
<td><?php echo $row['s2_grade']; ?></td>
<td><?php echo $row['s2_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s3_ca1']; ?> </td>
<td> <?php echo $row['s3_ca2']; ?></td>
<td><?php echo $row['total_s3']; ?></td>
<td><?php echo $row['e3']; ?> </td>
<td><?php echo $row['s3_percentage']; ?></td>
<td><?php echo $row['s3_grade']; ?></td>
<td><?php echo $row['s3_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s4_ca1']; ?> </td>
<td> <?php echo $row['s4_ca2']; ?></td>
<td><?php echo $row['total_s4']; ?></td>
<td><?php echo $row['e4']; ?> </td>
<td><?php echo $row['s4_percentage']; ?></td>
<td><?php echo $row['s4_grade']; ?></td>
<td><?php echo $row['s4_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s5_ca1']; ?> </td>
<td> <?php echo $row['s5_ca2']; ?></td>
<td><?php echo $row['total_s5']; ?></td>
<td><?php echo $row['e5']; ?> </td>
<td><?php echo $row['s5_percentage']; ?></td>
<td><?php echo $row['s5_grade']; ?></td>
<td><?php echo $row['s5_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s6_ca1']; ?> </td>
<td> <?php echo $row['s6_ca2']; ?></td>
<td><?php echo $row['total_s6']; ?></td>
<td><?php echo $row['e6']; ?> </td>
<td><?php echo $row['s6_percentage']; ?></td>
<td><?php echo $row['s6_grade']; ?></td>
<td><?php echo $row['s6_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s7_ca1']; ?> </td>
<td> <?php echo $row['s7_ca2']; ?></td>
<td><?php echo $row['total_s7']; ?></td>
<td><?php echo $row['e7']; ?> </td>
<td><?php echo $row['s7_percentage']; ?></td>
<td><?php echo $row['s7_grade']; ?></td>
<td><?php echo $row['s7_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s8_ca1']; ?> </td>
<td> <?php echo $row['s8_ca2']; ?></td>
<td><?php echo $row['total_s8']; ?></td>
<td><?php echo $row['e8']; ?> </td>
<td><?php echo $row['s8_percentage']; ?></td>
<td><?php echo $row['s8_grade']; ?></td>
<td><?php echo $row['s8_remark']; ?></td>
</tr>

<tr>
<td> <?php echo $row['s9_ca1']; ?> </td>
<td> <?php echo $row['s9_ca2']; ?></td>
<td><?php echo $row['total_s9']; ?></td>
<td><?php echo $row['e9']; ?> </td>
<td><?php echo $row['s9_percentage']; ?></td>
<td><?php echo $row['s9_grade']; ?></td>
<td><?php echo $row['s9_remark']; ?></td>
</tr>

<tr>
<td colspan="7"> <center> <strong>Total Average</strong> <?php echo $row['av']; ?> </td>
</tr>

</table>
<p>&nbsp; </p>
<p>&nbsp;  </p>
<p>&nbsp;  </p>

<p>Class Teacher's Comment..........................</p>
<p>.................................................................</p>

<p>&nbsp;  </p>
<p style="margin-left:250px;">............................  Next Term Begin On..................Principal Comment.....................</p>

<p>.....................................</p>

<table border="1"
style="width:30%;float:left">

<tr>
<th colspan="2"> <center>GUIDE TO GRADING</th>
</tr>
<tr>
<td><strong> <center>Score</strong></td> <td><strong><center>Grade</strong></td>
</tr>
<tr>
<td>80 - 100 = A </td> <td>Excellent</td>
</tr>
<tr>
<td>70 - 79 = B+</td> <td> Very Good</td>
</tr>
<tr>
<td>60 - 69 = B </td> <td> Good</td>
</tr>
<tr>
<td>50 - 59 = C</td> <td> Credit</td>
</tr>
<tr>
<td>40 - 49 = D</td> <td> Pass</td>
</tr>
<tr>
<td>0 - 39 = F</td> <td> Fail</td>
</tr>
<br />
<table border="1" width="30%">
<tr>
<td><strong>INTEREST</strong></td>
</tr>
<tr>
<td>Literacy and Scientific</td>
</tr>
<tr>
<td>Cultural</td>
</tr>
<tr>
<td>Games</td>
</tr>
<tr>
<td>Sport</td>
</tr>
</table>

</table>
<?php

}
//mysqli_close($con);

?>
		
</div>

</div>
<form action="print_result.php" method="post">
<input type="submit" value="Print" onClick="print()" /><br>
 <a href="../index.html">close<a>
</center>
</body>

</html>