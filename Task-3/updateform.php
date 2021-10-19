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


?>

<?php
include('header.php');
include('titlehead.php');
include('dbcon.php');

$sid=$_GET['sid'];
$sql="select * from studentnew where rollno='$sid';";
$run=mysqli_query($con,$sql);
//echo "".$sid;
$data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%;margin-top: 40px">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> required></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
		</tr>
		<tr>
			<th>Parents Contact no.</th>
			<td><input type="text" name="pcon" value=<?php echo $data['pcont'];?> required></td>
		</tr>
		<tr>
			<th>standard</th>
			<td><input type="number" name="std" value=<?php echo $data['standard'];?> required></td>
		</tr>
		<tr>
			<th>Hindi</th>
			<td><input type="text" name="sub1" value=<?php echo $data['hindi'];?> required></td>
		</tr>
		<tr>
			<th>English</th>
			<td><input type="text" name="sub2" value=<?php echo $data['english'];?> required></td>
		</tr>
		<tr>
			<th>Maths</th>
			<td><input type="text" name="sub3" value=<?php echo $data['maths'];?> required></td>
		</tr>
		<tr>
			<th>Science</th>
			<td><input type="text" name="sub4" value=<?php echo $data['science'];?> required></td>
		</tr>
		<tr>
			<th>history</th>
			<td><input type="text" name="sub5" value=<?php echo $data['history'];?> required></td>
		</tr>
		<tr>
			<th>geography</th>
			<td><input type="text" name="sub6" value=<?php echo $data['geography'];?> required></td>
		</tr>
		<tr>
			<th>Percentage</th>
			<td><input type="text" name="per" value=<?php echo $data['percentage'];?> required></td>
		</tr>
		
		<tr align="center">
			<td colspan="2"><input type="hidden" name="sid" value="<?php echo $data['rollno']; ?>"><input type="submit" name="submit" value="Submit" required></td>
		</tr>

	</table>
</form>

</body>
</html>