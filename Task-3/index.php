<html>
<head>
	<title>Student Result Management System</title>
	<link rel="stylesheet" type="text/css" href="css/buttoncss.css">
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h3 align="right" style="margin-right: 20px;"><a href="login.php">Admin Login</a></h3>
	<h1 align="center">Welcome to Student Result Management System</h1>

<!--	<form method="post" action="index.php">
	<table style="width:50%;" align="center">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr class="table-primary" style="font-size:large"> 
			<td align="right">Choose Standard</td>
			<td>
				<select name="std" required>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
				</select>
			</td>
		</tr>
		<tr class="table-primary">
			<td align="right">Enter Rollno</td>
			<td><input type="text" name="rollno" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="Show Details"></td>
		</tr>
	</table>-->

	<form method="post" action="index.php">
    <center>        
	<h2>Enter standard
                 <input type="text"  name="std" required>&nbsp;</h2><h2>
                <br>
				Enter Rollno  
                   <input type="text" name="rollno" required><br></h2>
                 <br>
				 <input type="submit" class="button" name="submit" value="Show Details">
</center>
				</form>
   

</body>
</html>
<?php
if(isset($_POST['submit'])){
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];

	include('dbcon.php');
	include('function.php');

	showdetails($standard,$rollno);
}
?>