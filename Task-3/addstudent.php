<html>
<head>
<link rel="stylesheet" type="text/css" href="css/buttoncss.css">
        <link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
if(isset($_SESSION['uid'])){
	echo "";
}
/*else{
    header('location:login.php');
}*/

?>

<?php
include('header.php');
include('titlehead.php');
?>
<!--<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%;margin-top: 40px">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter roll no" required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		<tr>
			<th>Parents Contact no.</th>
			<td><input type="text" name="pcon" placeholder="Enter the contact no of parent" required></td>
		</tr>
		<tr>
			<th>standard</th>
			<td><input type="number" name="std" placeholder="Enter standard" required></td>
		</tr>
		
		<tr align="center">
			<td colspan="2"><input type="submit" name="submit" value="Submit" required></td>
		</tr>
	</table>
</form>-->
<form method="post" action="addstudent.php" enctype="multipart/form-data">   
  <center>
             <br>
            Roll No&nbsp;&nbsp;&nbsp;<input type="text" name="rollno" placeholder="Enter roll no" required><br>				
                <br>
				Full Name&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Name" required><br>
                 <br>
				 City&nbsp;&nbsp;&nbsp;<input type="text" name="city" placeholder="Enter City" required><br>
				 <br>
				 Contact no.&nbsp;&nbsp;&nbsp;<input type="text" name="pcon" placeholder="Enter the contact no of parent" required><br>
				 <br>
				 Standard&nbsp;&nbsp;&nbsp;<input type="number" name="std" placeholder="Enter standard" required><br>
				 <br>
				 Hindi&nbsp;&nbsp;&nbsp;<input type="number" name="sub1" placeholder="Enter marks for hindi" required><br>
				 <br>
				 English&nbsp;&nbsp;&nbsp;<input type="number" name="sub2" placeholder="Enter marks for english" required><br>
				 <br>
				 Maths&nbsp;&nbsp;&nbsp;<input type="number" name="sub3" placeholder="Enter marks for maths" required><br>
				 <br>
				Science&nbsp;&nbsp;&nbsp;<input type="number" name="sub4" placeholder="Enter marks for maths" required><br>
                 <br>
				History&nbsp;&nbsp;&nbsp;<input type="number" name="sub5" placeholder="Enter marks for history" required><br>
                 <br>
				 Geography&nbsp;&nbsp;&nbsp;<input type="number" name="sub6" placeholder="Enter marks for geography" required><br>
                 <br>
				 Percentage&nbsp;&nbsp;&nbsp;<input type="number" name="per" placeholder="Enter percentage" required><br>
                    <br>
				 <input type="submit" class="button" name="submit" value="Submit" style="font-size:small" required>
</center>
				</form>
	
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		include('dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
		$sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
		$sub3=$_POST['sub3'];
		$sub4=$_POST['sub4'];
		$sub5=$_POST['sub5'];
		$sub6=$_POST['sub6'];
		$per=$_POST['per'];
		$query="insert into studentnew(rollno,name,city,pcont,standard,hindi,english,maths,science,history,geography,percentage) values ('$rollno','$name','$city','$pcon','$std','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$per');";
		$run=mysqli_query($con,$query);
		if($run==true){
			?>
			<script>
				alert('Data Inserted Successfully.');
			</script>
			<script>window.open('admindash.php','_self')</script>
			<?php
		}
	}

?>